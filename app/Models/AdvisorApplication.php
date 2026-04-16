<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AdvisorApplication extends Model
{
    protected $fillable = [
        'name',
        'middle_name',
        'father_spouse_name',
        'mother_name',
        'dob',
        'gender',
        'marital_status',
        'citizenship',
        'politically_exposed',
        'occupation_type',
        'applicant_photo_path',
        'address_line_1',
        'address_line_2',
        'address_line_3',
        'city_town_village',
        'district',
        'state',
        'pincode',
        'mobile',
        'alternate_mobile',
        'mobile_banking_enabled',
        'email',
        'tel_res',
        'tel_office',
        'aadhaar',
        'pan',
        'nominee_name',
        'nominee_relation',
        'nominee_dob',
        'nominee_contact',
        'nominee_bank',
        'nominee_branch',
        'nominee_account',
        'nominee_ifsc',
        'applicant_declaration_name',
        'applicant_declaration_accepted',
    ];

    protected function casts(): array
    {
        return [
            'dob' => 'date',
            'nominee_dob' => 'date',
            'mobile_banking_enabled' => 'boolean',
            'applicant_declaration_accepted' => 'boolean',
        ];
    }
}
