<?php

namespace App\Http\Controllers;

use App\Models\AdvisorApplication;
use App\Models\MembershipApplication;
use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;

class MembershipAdvisorFormController extends Controller
{
    public function storeMembership(Request $request)
    {
        return $this->store($request, MembershipApplication::class, 'membership.form');
    }

    public function storeAdvisor(Request $request)
    {
        return $this->store($request, AdvisorApplication::class, 'advisor.form');
    }

    private function store(Request $request, string $modelClass, string $redirectRoute)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'middle_name' => 'nullable|string|max:255',
            'father_spouse_name' => 'required|string|max:255',
            'mother_name' => 'required|string|max:255',
            'dob' => 'required|date',
            'occupation_type' => 'required|string|max:255',
            'address_line_1' => 'required|string|max:255',
            'address_line_2' => 'nullable|string|max:255',
            'address_line_3' => 'nullable|string|max:255',
            'city_town_village' => 'required|string|max:255',
            'district' => 'nullable|string|max:255',
            'state' => 'required|string|max:255',
            'pincode' => 'required|string|max:20',
            'mobile' => 'required|string|max:50',
            'alternate_mobile' => 'nullable|string|max:50',
            'email' => 'required|email|max:255',
            'tel_res' => 'nullable|string|max:50',
            'tel_office' => 'nullable|string|max:50',
            'aadhaar' => 'required|string|max:20',
            'pan' => 'required|string|max:20',
            'nominee_name' => 'required|string|max:255',
            'nominee_relation' => 'required|string|max:255',
            'nominee_dob' => 'required|date',
            'nominee_contact' => 'required|string|max:50',
            'nominee_bank' => 'required|string|max:255',
            'nominee_branch' => 'required|string|max:255',
            'nominee_account' => 'required|string|max:100',
            'nominee_ifsc' => 'required|string|max:20',
            'applicant_photo_signature' => 'nullable|image|max:5120',
            'applicant_declaration_name' => 'required|string|max:255',
            'applicant_declaration_accepted' => 'accepted',
        ]);

        $gender = $this->resolveGender($request);
        $maritalStatus = $this->resolveMaritalStatus($request);
        $citizenship = $this->resolveCitizenship($request);
        $pep = $this->resolvePoliticallyExposed($request);

        $photoPath = null;
        if ($request->hasFile('applicant_photo_signature')) {
            $photoPath = $request->file('applicant_photo_signature')->store('membership_advisor_photos', 'local');
        }

        $modelClass::create([
            'name' => $validated['name'],
            'middle_name' => $validated['middle_name'] ?? null,
            'father_spouse_name' => $validated['father_spouse_name'],
            'mother_name' => $validated['mother_name'],
            'dob' => $validated['dob'],
            'gender' => $gender,
            'marital_status' => $maritalStatus,
            'citizenship' => $citizenship,
            'politically_exposed' => $pep,
            'occupation_type' => $validated['occupation_type'],
            'applicant_photo_path' => $photoPath,
            'address_line_1' => $validated['address_line_1'],
            'address_line_2' => $validated['address_line_2'] ?? null,
            'address_line_3' => $validated['address_line_3'] ?? null,
            'city_town_village' => $validated['city_town_village'],
            'district' => filled($validated['district'] ?? null) ? $validated['district'] : $validated['city_town_village'],
            'state' => $validated['state'],
            'pincode' => $validated['pincode'],
            'mobile' => $validated['mobile'],
            'alternate_mobile' => $validated['alternate_mobile'] ?? null,
            'mobile_banking_enabled' => $request->boolean('mobile_banking_enabled'),
            'email' => $validated['email'],
            'tel_res' => $validated['tel_res'] ?? null,
            'tel_office' => $validated['tel_office'] ?? null,
            'aadhaar' => $validated['aadhaar'],
            'pan' => $validated['pan'],
            'nominee_name' => $validated['nominee_name'],
            'nominee_relation' => $validated['nominee_relation'],
            'nominee_dob' => $validated['nominee_dob'],
            'nominee_contact' => $validated['nominee_contact'],
            'nominee_bank' => $validated['nominee_bank'],
            'nominee_branch' => $validated['nominee_branch'],
            'nominee_account' => $validated['nominee_account'],
            'nominee_ifsc' => $validated['nominee_ifsc'],
            'applicant_declaration_name' => $validated['applicant_declaration_name'],
            'applicant_declaration_accepted' => true,
        ]);

        return redirect()
            ->route($redirectRoute)
            ->with('application_form_status', 'Thank you — we have received your application.');
    }

    private function resolveGender(Request $request): string
    {
        $gender = $request->input('gender');
        if (in_array($gender, ['M', 'F'], true)) {
            return $gender;
        }

        $male = $request->has('gender_male');
        $female = $request->has('gender_female');
        if ($male xor $female) {
            return $male ? 'M' : 'F';
        }

        throw ValidationException::withMessages([
            'gender' => ['Please select exactly one gender.'],
        ]);
    }

    private function resolveMaritalStatus(Request $request): string
    {
        $keys = [
            'marital_married' => 'Married',
            'marital_unmarried' => 'Unmarried',
            'marital_single' => 'Single',
            'marital_divorced' => 'Divorced',
            'marital_widow_widower' => 'Widow/Widower',
        ];
        $selected = [];
        foreach ($keys as $input => $label) {
            if ($request->has($input)) {
                $selected[] = $label;
            }
        }
        if ($selected === []) {
            throw ValidationException::withMessages([
                'marital_married' => ['Please select at least one marital status.'],
            ]);
        }

        return implode(', ', $selected);
    }

    private function resolveCitizenship(Request $request): string
    {
        $citizenship = $request->input('citizenship');
        if (in_array($citizenship, ['In-India', 'Others'], true)) {
            return $citizenship;
        }

        $inIndia = $request->has('citizenship_in_india');
        $others = $request->has('citizenship_others');
        if ($inIndia xor $others) {
            return $inIndia ? 'In-India' : 'Others';
        }

        throw ValidationException::withMessages([
            'citizenship' => ['Please select exactly one citizenship option.'],
        ]);
    }

    private function resolvePoliticallyExposed(Request $request): string
    {
        $pep = $request->input('pep');
        if (in_array($pep, ['YES', 'NO'], true)) {
            return $pep;
        }

        $yes = $request->has('pep_yes');
        $no = $request->has('pep_no');
        if ($yes xor $no) {
            return $yes ? 'YES' : 'NO';
        }

        throw ValidationException::withMessages([
            'pep' => ['Please indicate whether you are a politically exposed person.'],
        ]);
    }
}
