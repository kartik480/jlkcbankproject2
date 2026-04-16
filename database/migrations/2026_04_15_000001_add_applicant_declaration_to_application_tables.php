<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        foreach (['membership_applications', 'advisor_applications'] as $tableName) {
            Schema::table($tableName, function (Blueprint $table) {
                $table->string('applicant_declaration_name', 255)->nullable()->after('nominee_ifsc');
                $table->boolean('applicant_declaration_accepted')->default(false)->after('applicant_declaration_name');
            });
        }
    }

    public function down(): void
    {
        foreach (['membership_applications', 'advisor_applications'] as $tableName) {
            Schema::table($tableName, function (Blueprint $table) {
                $table->dropColumn(['applicant_declaration_name', 'applicant_declaration_accepted']);
            });
        }
    }
};
