<?php

namespace App\Http\Controllers;

use App\Models\InvoiceLost;
use App\Http\Requests\StoreInvoiceLostRequest;
use App\Http\Requests\UpdateInvoiceLostRequest;

class InvoiceLostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreInvoiceLostRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreInvoiceLostRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\InvoiceLost  $invoiceLost
     * @return \Illuminate\Http\Response
     */
    public function show(InvoiceLost $invoiceLost)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\InvoiceLost  $invoiceLost
     * @return \Illuminate\Http\Response
     */
    public function edit(InvoiceLost $invoiceLost)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateInvoiceLostRequest  $request
     * @param  \App\Models\InvoiceLost  $invoiceLost
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateInvoiceLostRequest $request, InvoiceLost $invoiceLost)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\InvoiceLost  $invoiceLost
     * @return \Illuminate\Http\Response
     */
    public function destroy(InvoiceLost $invoiceLost)
    {
        //
    }
}
