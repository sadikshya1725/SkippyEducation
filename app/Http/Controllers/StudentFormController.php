<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\StudentForm;

class StudentFormController extends Controller
{
    public function index()
    {
        $studentForms = StudentForm::all();
        return view('backend.form.index', ['studentForms' => $studentForms]);
    }

    public function create()
    {
        return view('backend.form.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'full_name' => 'required',
            'current_address' => 'required',
            'email' => 'required|email',
            'contact_number' => 'required',
            'country_of_citizenship' => 'required',
            'visa_status' => 'required',
            'highest_education_level' => 'required',
            'enrolled_course' => 'required',
            'purpose_of_visit' => 'required',
        ]);

        // Check if 'visa_status_other' is present in the request
        if ($request->has('visa_status_other')) {
            $validated['visa_status_other'] = $request->input('visa_status_other');
        }

        // Check if 'special_conditions' is present in the request
        if ($request->has('special_conditions')) {
            $validated['special_conditions'] = $request->input('special_conditions');
        }

        StudentForm::create($validated);

        return redirect()->route('admin.student-forms.index')->with('success', 'Student form submitted successfully.');
    }

    public function edit($id)
    {
        $studentForm = StudentForm::findOrFail($id);
        return view('backend.form.update', ['studentForm' => $studentForm]);
    }

    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'full_name' => 'required',
            'current_address' => 'required',
            'email' => 'required|email',
            'contact_number' => 'required',
            'country_of_citizenship' => 'required',
            'visa_status' => 'required',
            'highest_education_level' => 'required',
            'enrolled_course' => 'required',
            'purpose_of_visit' => 'required',
        ]);

        // Check if 'visa_status_other' is present in the request
        if ($request->has('visa_status_other')) {
            $validated['visa_status_other'] = $request->input('visa_status_other');
        }

        // Check if 'special_conditions' is present in the request
        if ($request->has('special_conditions')) {
            $validated['special_conditions'] = $request->input('special_conditions');
        }

        $studentForm = StudentForm::findOrFail($id);
        $studentForm->update($validated);

        return redirect()->route('admin.student-forms.index')->with('success', 'Student form updated successfully.');
    }

    public function destroy($id)
    {
        $studentForm = StudentForm::findOrFail($id);
        $studentForm->delete();

        return redirect()->route('admin.student-forms.index')->with('success', 'Student form deleted successfully.');
    }
}
