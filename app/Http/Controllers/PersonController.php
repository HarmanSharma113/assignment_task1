<?php
namespace App\Http\Controllers;

use App\Models\Person;

class PersonController extends Controller
{
    public function showHierarchy()
    {
        // Get all root people (people with no parent)
        $people = Person::whereNull('parent_id')->get();

        // Pass the people data to the view
        return view('persons', compact('people'));
    }
}
