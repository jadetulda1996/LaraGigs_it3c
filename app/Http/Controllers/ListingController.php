<?php

namespace App\Http\Controllers;

use App\Models\Listing;
use Illuminate\Http\Request;

class ListingController extends Controller
{
    public function index()
    {
        $listings = Listing::all();

        return view('listing.index', compact(['listings']));
    }

    public function show(Listing $listing)
    {
        return view('listing.show', compact('listing'));
    }

    public function create()
    {
        return view('listing.create');
    }

    public function store(Request $request)
    {
        // dd($request->all());
        $author_id = fake()->randomElement([1, 2, 3, 4, 5]);

        $formFields = $request->validate([
            'company' => 'required',
            'title' => 'required',
            'location' => 'required',
            'email' => 'required|email',
            'website' => 'required',
            'tags' => 'required',
            'description' => 'required'
        ]);
        
        $formFields['author_id'] = $author_id;

        $newData = Listing::create($formFields);

        // dd(request('company'));

        return view('listing.create');
    }

    public function edit(Listing $listing)
    {
        return view('listing.edit', compact('listing'));
    }

    public function update(Listing $listing)
    {
        dd('from update');
    }
}
