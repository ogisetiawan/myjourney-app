<?php

namespace App\Http\Controllers\Employee;

use App\Http\Controllers\Controller;
use App\Models\Employee\Employee;
use App\Models\Employee\EmployeeContact;
use App\Models\Employee\EmployeeJobDetail;
use App\Models\User;
use Illuminate\Http\Request;
use DataTables;

class EmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        // $employeeContacts = EmployeeContact::with('employee')->find(2);
        // $employee = Employee::pluck('id_employee');
        // $employee = Employee::first()->id_employee;
        // echo "<pre>";
        // print_r($employee);
        // dd($employeeContacts);

        // $employee = Employee::findOrFail(2);
        // $employeeDet = EmployeeJobDetail::findOrFail(1);
        // $userEmpl = [
        //    $employee->user->id,
        //    $employee->user->name,
        //    $employee->code_employee,
        //    $employee->name,
        //    $employee->employeeJobHeader,
        //    $employee->employeeJobDetail,
        //    $employeeDet->employee->id_employee,
        // //    $employee->employeeJobDetail->country,
        // ];
        // dd($userEmpl);

        // $emp = Employee::all(); 
        // $emp = Employee::with('employeeJobDetail')->has('employeeJobDetail')->get(); //? only have data 
        // $emp = Employee::has('employeeJobDetail')->get();
        // foreach ($emp as $e) {
        //     echo $e->code_employee.' | '.$e->employeeJobDetail->country.' | '.(!empty($e->user->email) ? $e->user->email : 'Null').' | ';
        //     echo "<br>";
        // }
        // dd();
        return view('employee/all_employee/index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('employee/all_employee/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Employee\Employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $employee = Employee::find($id);
        return view('employee/all_employee/show', compact('employee'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Employee\Employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function edit(Employee $employee)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Employee\Employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Employee $employee)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Employee\Employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function destroy(Employee $employee)
    {
        //
    }

    public function list(){
        $employee = Employee::all();
        return Datatables::of($employee)->addColumn('email', function ($user) {
            return (!empty($user->user->email) ? $user->user->email : null);
        })->addColumn('employee_mobile_number', function ($contact) {
            return (!empty($contact->employeeContact->employee_mobile_number) ? $contact->employeeContact->employee_mobile_number : null);
        })->addColumn('country', function ($job) {
            return (!empty($job->employeeJobDetail->country) ? $job->employeeJobDetail->country : null);
        })->addColumn('company', function ($job) {
            return (!empty($job->employeeJobDetail->company) ? $job->employeeJobDetail->company : null);
        })->addColumn('work_location', function ($job) {
            return (!empty($job->employeeJobDetail->work_location) ? $job->employeeJobDetail->work_location : null);
        })->addColumn('divison', function ($job) {
            return (!empty($job->employeeJobDetail->division) ? $job->employeeJobDetail->division : null);
        })->addColumn('department', function ($job) {
            return (!empty($job->employeeJobDetail->department) ? $job->employeeJobDetail->department : null);
        })->addColumn('hire_date', function ($job) {
            return (!empty($job->employeeStatus->hire_date) ? $job->employeeStatus->hire_date : null);
        })->addColumn('years_of_service', function ($job) {
            return (!empty($job->employeeStatus->years_of_service) ? $job->employeeStatus->years_of_service : null);
        })->addColumn('job_title', function ($job) {
            return (!empty($job->employeeJobDetail->job_title) ? $job->employeeJobDetail->job_title : null);
        })->addColumn('direct_superior', function ($job) {
            return (!empty($job->employeeJobHeader->direct_superior) ? $job->employeeJobHeader->direct_superior : null);
        })->addColumn('employee_status', function ($job) {
            return (!empty($job->employeeStatus->employee_status) ? $job->employeeStatus->employee_status : null);
        })->toJson();
    }

    
}
