<?php

namespace App\Http\Controllers\Provider;

use App\Http\Controllers\Controller;
use App\Models\Provider\ProviderType;
use App\Http\Requests\StoreProviderTypeRequest;
use App\Http\Requests\UpdateProviderTypeRequest;

class ProviderTypeController extends Controller
{
    public function index()
    {
        $data = ProviderType::get();
        return view('provider.provider_type.index', compact('data'));

    }

    public function create()
    {
        //
    }

    public function store(StoreProviderTypeRequest $request)
    {
        //
    }

    public function show(ProviderType $providerType)
    {
        //
    }

    public function edit(ProviderType $providerType)
    {
        //
    }

   public function update(UpdateProviderTypeRequest $request, ProviderType $providerType)
    {
        //
    }

    public function destroy(ProviderType $providerType)
    {
        //
    }
}
