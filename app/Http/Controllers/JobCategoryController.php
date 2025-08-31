<?php

namespace App\Http\Controllers;

use App\Models\JobCategory;
use Illuminate\Http\Request;

class JobCategoryController extends Controller
{
    // Show all categories
    public function index()
    {
        $categories = JobCategory::all(); // Soft deleted automatically hidden
        return view('job_categories.index', compact('categories'));
    }

    // Show create form
    public function create()
    {
        return view('job_categories.create');
    }

    // Store new category
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
        ]);

        JobCategory::create($request->all());

        return redirect()->route('job_categories.index')->with('success', 'Category created successfully.');
    }

    // Show edit form
    public function edit($id)
    {
        $category = JobCategory::findOrFail($id);
        return view('job_categories.edit', compact('category'));
    }

    // Update category
    public function update(Request $request, $id)
    {
        $category = JobCategory::findOrFail($id);

        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
        ]);

        $category->update($request->all());

        return redirect()->route('job_categories.index')->with('success', 'Category updated successfully.');
    }

    // ✅ Soft delete category
    public function destroy($id)
    {
        $category = JobCategory::findOrFail($id);
        $category->delete();

        return redirect()->route('job_categories.index')->with('success', 'Category deleted successfully.');
    }
}
