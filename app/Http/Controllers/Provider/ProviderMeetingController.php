<?php

namespace App\Http\Controllers\Provider;

use App\Http\Controllers\Controller;
use App\Models\Provider\ProviderMeeting;
use App\Http\Requests\StoreProviderMeetingRequest;
use App\Http\Requests\UpdateProviderMeetingRequest;

class ProviderMeetingController extends Controller
{

    public function index()
    {
        $data = ProviderMeeting::get();
        return view('provider.provider_meeting.index', compact('data'));

    }

    public function create()
    {
        //
    }

    public function store(StoreProviderMeetingRequest $request)
    {
        //
    }

    public function show(ProviderMeeting $providerMeeting)
    {
        //
    }

    public function edit(ProviderMeeting $providerMeeting)
    {
        //
    }

    public function update(UpdateProviderMeetingRequest $request, ProviderMeeting $providerMeeting)
    {
        //
    }

    public function destroy(ProviderMeeting $providerMeeting)
    {
        //
    }
}
