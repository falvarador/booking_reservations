<?php

namespace App\Http\Controllers;

use App\Models\Review;
use App\Models\Service;
use App\Models\User;
use Illuminate\Http\Request;

class ReviewController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $reviews = Review::with('user', 'service')->get();
        return view('reviews.index', compact('reviews'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $users = User::all();
        $services = Service::all();
        return view('reviews.create', compact('users', 'services'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Review::create($request->all());
        return redirect()->route('reviews.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $review = Review::with('user', 'service')->findOrFail($id);
        return view('reviews.show', compact('review'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $review = Review::findOrFail($id);
        $users = User::all();
        $services = Service::all();
        return view('reviews.edit', compact('review', 'users', 'services'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $review = Review::findOrFail($id);
        $review->update($request->all());
        return redirect()->route('reviews.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Review::destroy($id);
        return redirect()->route('reviews.index');
    }
}
