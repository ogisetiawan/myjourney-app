<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employee', function (Blueprint $table) {
            $table->id('id_employee');
            $table->string('code_employee');
            $table->string('salutation');
            $table->string('name');
            $table->string('nick_name')->nullable();
            $table->text('photo')->nullable();
            $table->string('gender');
            $table->string('birth_date');
            $table->string('age');
            $table->string('birth_place');
            $table->string('country_of_birth');
            $table->string('nationality');
            $table->string('race');
            $table->string('internal_order_SAP')->nullable();
            $table->string('status')->nullable();
            $table->integer('created_by')->nullable();
            $table->integer('updated_by')->nullable();
            $table->timestamps();
            $table->datetime('deleted_at')->nullable();
        });

        Schema::create('employee_contact', function (Blueprint $table) {
            $table->id('id_employee_contact');
            $table->string('employee_mobile_number');
            $table->string('employee_mobile_number_2')->nullable();
            $table->string('email_address_office');
            $table->string('email_address_personal')->nullable();;
            $table->string('office_phone_number')->nullable();
            $table->string('social_media_accounts')->nullable();
            $table->string('permanent_address_identity_card');
            $table->string('address_residence');
            $table->integer('id_employee');
            $table->timestamps();
        });

        Schema::create('employee_other_information', function (Blueprint $table) {
            $table->id('id_employee_other_information');
            $table->string('marital_status');
            $table->date('marriage_date');
            $table->string('religion');
            $table->string('blood_type')->nullable();
            $table->date('last_health_check_date')->nullable();
            $table->text('current_health_status')->nullable();
            $table->string('height')->nullable();
            $table->string('weight')->nullable();
            $table->integer('id_employee');
            $table->timestamps();
        });

        Schema::create('employee_status', function (Blueprint $table) {
            $table->id('id_employee_status');
            $table->string('employee_status');
            $table->date('hire_date');
            $table->date('original_hire_date');
            $table->date('continuous_service_date');
            $table->date('confirmation_date')->nullable();
            $table->integer('years_of_service');
            $table->date('end_of_probation')->nullable();
            $table->date('last_working_day')->nullable();
            $table->string('reason_for_leaving')->nullable();
            $table->date('retirement_date')->nullable();
            $table->date('extended_retirement_date')->nullable();
            $table->integer('id_employee');
            $table->timestamps();
            $table->datetime('deleted_at')->nullable();
        });

        Schema::create('employee_job_header', function (Blueprint $table) {
            $table->id('id_employee_job_header');
            $table->string('employee_type')->nullable();
            $table->string('direct_superior');
            $table->string('indirect_superior');
            $table->string('salesman_code')->nullable();
            $table->integer('id_employee');
            $table->timestamps();
        });
        ///@ 
        Schema::create('employee_job_detail', function (Blueprint $table) {
            $table->id('id_employee_job_detail');
            $table->string('country');
            $table->string('company');
            $table->string('region');
            $table->string('state_province');
            $table->string('branch');
            $table->string('work_location');
            $table->string('division_group_vn')->nullable();
            $table->string('division_code');
            $table->string('division');
            $table->string('bu_group');
            $table->string('dept_code');
            $table->string('department');
            $table->string('job_grade');
            $table->string('job_family');
            $table->string('sub_job_family');
            $table->string('job_title');
            $table->string('cost_center')->nullable();
            $table->string('movement_type')->nullable();
            $table->date('movement_date')->nullable();
            $table->string('career_level');
            $table->integer('id_employee');
            $table->integer('id_employee_job_header');
            $table->timestamps();
        });

        Schema::create('employee_formal_education', function (Blueprint $table) {
            $table->id('id_employee_formal_education');
            $table->integer('education_grade')->nullable();
            $table->string('institution')->nullable();
            $table->string('major')->nullable();
            $table->string('gpa_score')->nullable();
            $table->integer('id_employee');
            $table->timestamps();
        });

        Schema::create('employee_informal_education', function (Blueprint $table) {
            $table->id('id_employee_informal_education');
            $table->string('course_training')->nullable();
            $table->string('institution')->nullable();
            $table->date('start_date')->nullable();
            $table->date('end_date')->nullable();
            $table->string('duration_type')->nullable();
            $table->string('duration')->nullable();
            $table->date('expired_date')->nullable();
            $table->string('course_fee')->nullable();
            $table->text('education_description')->nullable();
            $table->boolean('have_certificate')->default(false);
            $table->string('attachment')->nullable();
            $table->integer('id_employee');
            $table->timestamps();
        });

        Schema::create('employee_work_history', function (Blueprint $table) {
            $table->id('id_employee_work_history');
            $table->string('company_name')->nullable();
            $table->text('address')->nullable();
            $table->string('position_held')->nullable();
            $table->string('period_of_employment')->nullable();
            $table->integer('id_employee');
            $table->timestamps();
        });

        Schema::create('employee_family_information', function (Blueprint $table) {
            $table->id('id_employee_family_information');
            $table->string('emergency_contact_person')->nullable();
            $table->integer('relationship_type')->nullable();
            $table->string('phone_number')->nullable();
            $table->text('address')->nullable();
            $table->string('id_number')->nullable();
            $table->date('date_of_birth')->nullable();
            $table->integer('age')->nullable();
            $table->string('gender')->nullable();
            $table->string('marital_status')->nullable();
            $table->string('job_occupation')->nullable();
            $table->integer('id_employee');
            $table->timestamps();
        });

        Schema::create('employee_legal_identity', function (Blueprint $table) {
            $table->id('id_employee_legal_identity');
            $table->string('identity_type');
            $table->string('national_id_card_number');
            $table->string('national_id_card_place_of_issue')->nullable();
            $table->date('national_id_card_date_of_issue')->nullable();
            $table->date('national_id_card_date_of_expiry')->nullable();
            $table->string('family_id_card_number')->nullable();
            $table->integer('id_employee');
            $table->timestamps();
        });

        Schema::create('employee_bank', function (Blueprint $table) {
            $table->id('id_employee_bank');
            $table->string('name_of_the_bank')->nullable();
            $table->string('branch_of_the_bank')->nullable();
            $table->string('bank_account_number')->nullable();
            $table->string('bank_account_holder_name')->nullable();
            $table->integer('id_employee');
            $table->timestamps();
        });

        Schema::create('employee_tax', function (Blueprint $table) {
            $table->id('id_employee_tax');
            $table->string('tax_id')->nullable();
            $table->string('tax_status')->nullable();
            $table->integer('number_of_dependents')->nullable();
            $table->integer('id_employee');
            $table->timestamps();
        });

        Schema::create('employee_insurance', function (Blueprint $table) {
            $table->id('id_employee_insurance');
            $table->string('benefit_in_kind')->nullable();
            $table->string('social_security_by_local_government_id')->nullable();
            $table->string('epf_number')->nullable();
            $table->string('company_health_medical_insurance_id')->nullable();
            $table->string('insurance_name')->nullable();
            $table->string('nbi_number')->nullable();
            $table->date('nbi_validity')->nullable();
            $table->integer('id_employee');
            $table->timestamps();
        });
    }

    // buatkan sebuah script model dan factories pada skema migration dibawah ini
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('employee');
        Schema::dropIfExists('employee_contact');
        Schema::dropIfExists('employee_other_information');
        Schema::dropIfExists('employee_status');
        Schema::dropIfExists('employee_job_header');
        Schema::dropIfExists('employee_job_detail');
        Schema::dropIfExists('employee_formal_education');
        Schema::dropIfExists('employee_informal_education');
        Schema::dropIfExists('employee_work_history');
        Schema::dropIfExists('employee_family_information');
        Schema::dropIfExists('employee_legal_identity');
        Schema::dropIfExists('employee_bank');
        Schema::dropIfExists('employee_tax');
        Schema::dropIfExists('employee_insurance');
    }
};
