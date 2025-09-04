<?php

namespace App\Http\Controllers;

use App\Models\Job;
use App\Models\JobCategory;
use Illuminate\Http\Request;

class JobController extends Controller
{
    // Show all jobs
    public function index()
    {
        // eager load category for each job
        $jobs = Job::with('category')->get(); // soft deleted rows hidden
        return view('jobs.index', compact('jobs'));
    }

    // Show create form
    public function create()
    {
        $categories = JobCategory::all(); // send to view for dropdown
        return view('jobs.create', compact('categories'));
    }

    // Store new job
    public function store(Request $request)
    {
        $request->validate([
            'job_category_id' => 'required|exists:job_categories,id',
            'title'           => 'required|string|max:255',
            'description'     => 'required|string',
            'location'        => 'required|string|max:255',
            'salary'          => 'required|numeric',
        ]);

        Job::create($request->all());

        return redirect()->route('jobs.index')->with('success', 'Job added successfully!');
    }

    // Show edit form
    public function edit($id)
    {
        $job = Job::findOrFail($id);
        $categories = JobCategory::all(); // for dropdown
        return view('jobs.edit', compact('job', 'categories'));
    }

    // Update job
    public function update(Request $request, $id)
    {
        $job = Job::findOrFail($id);

        $request->validate([
            'job_category_id' => 'required|exists:job_categories,id',
            'title'           => 'required|string|max:255',
            'description'     => 'required|string',
            'location'        => 'required|string|max:255',
            'salary'          => 'required|numeric',
        ]);

        $job->update($request->all());

        return redirect()->route('jobs.index')->with('success', 'Job updated successfully!');
    }

    // Soft delete job
    public function destroy($id)
    {
        $job = Job::findOrFail($id);
        $job->delete();

        return redirect()->route('jobs.index')->with('success', 'Job deleted successfully.');
    }
}
