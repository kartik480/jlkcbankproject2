<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('membership_applications', function (Blueprint $table) {
            $table->id();
            $table->string('name', 255);
            $table->string('middle_name', 255)->nullable();
            $table->string('father_spouse_name', 255);
            $table->string('mother_name', 255);
            $table->date('dob');
            $table->string('gender', 1);
            $table->string('marital_status', 255);
            $table->string('citizenship', 50);
            $table->string('politically_exposed', 10);
            $table->string('occupation_type', 255);
            $table->string('applicant_photo_path', 500)->nullable();
            $table->string('address_line_1', 255);
            $table->string('address_line_2', 255)->nullable();
            $table->string('address_line_3', 255)->nullable();
            $table->string('city_town_village', 255);
            $table->string('district', 255);
            $table->string('state', 255);
            $table->string('pincode', 20);
            $table->string('mobile', 50);
            $table->string('alternate_mobile', 50)->nullable();
            $table->boolean('mobile_banking_enabled')->default(false);
            $table->string('email', 255);
            $table->string('tel_res', 50)->nullable();
            $table->string('tel_office', 50)->nullable();
            $table->string('aadhaar', 20);
            $table->string('pan', 20);
            $table->string('nominee_name', 255);
            $table->string('nominee_relation', 255);
            $table->date('nominee_dob');
            $table->string('nominee_contact', 50);
            $table->string('nominee_bank', 255);
            $table->string('nominee_branch', 255);
            $table->string('nominee_account', 100);
            $table->string('nominee_ifsc', 20);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('membership_applications');
    }
};
