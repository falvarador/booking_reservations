<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use App\Models\CancellationRefund;
use Illuminate\Http\Request;

class CancellationRefundController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $refunds = CancellationRefund::with('booking')->get();
        return view('cancellation_refunds.index', compact('refunds'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $bookings = Booking::all();
        return view('cancellation_refunds.create', compact('bookings'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        CancellationRefund::create($request->all());
        return redirect()->route('cancellation_refunds.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $refund = CancellationRefund::with('booking')->findOrFail($id);
        return view('cancellation_refunds.show', compact('refund'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $refund = CancellationRefund::findOrFail($id);
        $bookings = Booking::all();
        return view('cancellation_refunds.edit', compact('refund', 'bookings'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $refund = CancellationRefund::findOrFail($id);
        $refund->update($request->all());
        return redirect()->route('cancellation_refunds.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        CancellationRefund::destroy($id);
        return redirect()->route('cancellation_refunds.index');
    }
}
