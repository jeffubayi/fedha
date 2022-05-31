<?php

namespace App\Http\Controllers;

use App\Models\Listing;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;


class ListingController extends Controller
{

    //show all items
public function index() {
    return view('listings.index',[
        'listing' => Listing::latest()->filter(request(['tag']))->paginate(8)
]);
}

public function dashboard() {
    return view('listings.dashboard',[
        'listing' => Listing::latest()->filter(request(['tag']))->get(),
        'list' => Listing::latest()->filter(request(['tag']))->paginate(5)
]);
}

public function settings() {
    return view('listings.settings',[
        'listing' => Listing::latest()->filter(request(['tag']))->get()
]);
}

//single listing
public function show(Listing $listing) {
    return view('listings.show',[
        'list' => $listing
]); 
}
// create listing
public function create(Listing $listing) {
    return view('listings.create'); 
}

   // Store Listing Data
   public function store(Request $request) {
    $formFields = $request->validate([
        'title' => 'required',
        'company' => ['required', Rule::unique('listings', 'company')],
        'location' => 'required',
        'website' => 'required',
        'email' => ['required', 'email'],
        'tags' => 'required',
        'description' => 'required'
    ]);

    if($request->hasFile('logo')) {
        $formFields['logo'] = $request->file('logo')->store('logos', 'public');
    }

    $formFields['user_id'] = auth()->id();

    Listing::create($formFields);

    return redirect('/')->with('message', 'Listing created successfully!');
}
// edit listing
public function edit(Listing $listing) {
    return view('listings.edit',['listing' => $listing]); 
}

   // Store Listing Data
   public function update(Request $request,Listing $listing) {
        // Make sure logged in user is owner
        if($listing->user_id != auth()->id()) {
            abort(403, 'Unauthorized Action');
        }

    $formFields = $request->validate([
        'title' => 'required',
        'company' => ['required'],
        'location' => 'required',
        'website' => 'required',
        'email' => ['required', 'email'],
        'tags' => 'required',
        'description' => 'required'
    ]);

    if($request->hasFile('logo')) {
        $formFields['logo'] = $request->file('logo')->store('logos', 'public');
    }

    $listing->update($formFields);

    return redirect('/')->with('message', 'Listing updated successfully!');
}

    // Delete Listing
    public function destroy(Listing $listing) {
         // Make sure logged in user is owner
         if($listing->user_id != auth()->id()) {
            abort(403, 'Unauthorized Action');
        }
        
        
        $listing->delete();
        return redirect('/')->with('message', 'Listing deleted successfully');
    }

// manage listing
public function manage() {
    return view('listings.manage',['listing' => Listing::latest()->paginate(10)]); 
}

}
