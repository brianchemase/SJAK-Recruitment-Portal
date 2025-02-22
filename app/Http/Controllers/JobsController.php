<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

class JobsController extends Controller
{
    //

    public function create()
    {
        return view('create_job');
    }


    public function vacancyform()
    {
        $contributions="";

        $data=[
            'contributions' => $contributions,
            

        ];

        return view('dashboard.registerjobs')->with($data);
    }

    public function store(Request $request)
    {
        // Validate the input data
        $validated = $request->validate([
            'JobTitle' => 'required|string|max:255',
            'JobLocation' => 'required|string|max:255',
            'JobDescription' => 'required|string',
            'ResponsibilitiesTitle' => 'required|string|max:255',
            'Vacancy' => 'required|integer',
            'PublishedOn' => 'required|date',
            'Deadline' => 'required|date',
            'Salary' => 'required|string|max:255',
            'JobNature' => 'required|string|max:255',
            'responsibilities' => 'required|array',
            'qualifications' => 'required|array',
        ]);

        // Insert the data into the jobs table using DB Facade
        DB::table('jobs')->insert([
            'JobTitle' => $validated['JobTitle'],
            'JobLocation' => $validated['JobLocation'],
            'JobDescription' => $validated['JobDescription'],
            'ResponsibilitiesTitle' => $validated['ResponsibilitiesTitle'],
            'Vacancy' => $validated['Vacancy'],
            'PublishedOn' => $validated['PublishedOn'],
            'Deadline' => $validated['Deadline'],
            'Salary' => $validated['Salary'],
            'JobNature' => $validated['JobNature'],
            'responsibilities' => json_encode($validated['responsibilities']),
            'qualifications' => json_encode($validated['qualifications']),
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        return redirect()->route('jobs.index')->with('success', 'Job posted successfully!');
    }
}
