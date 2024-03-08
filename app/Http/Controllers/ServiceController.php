<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\Request;

class ServiceController extends Controller
{

    public function index()
    {
        $services = Service::all();
        return view('backend.services.index', compact('services'));
    }

    public function create()
    {
        return view('backend.services.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'laptop_id' => 'required',
            'tanggal_masuk' => 'required',
            'deskripsi_masalah' => 'required',
            'status' => 'required',
        ]);

        Service::create($request->all());
        return redirect()->route('services.index')
            ->with('success', 'Service created successfully.');
    }

    public function show(Service $service)
    {
        return view('backend.services.show', compact('service'));
    }

    public function edit(Service $service)
    {
        return view('backend.services.edit', compact('service'));
    }

    public function update(Request $request, Service $service)
    {
        $request->validate([
            'laptop_id' => 'required',
            'tanggal_masuk' => 'required',
            'deskripsi_masalah' => 'required',
            'status' => 'required',
        ]);

        $service->update($request->all());
        return redirect()->route('services.index')
            ->with('success', 'Service updated successfully');
    }

    public function destroy(Service $service)
    {
        $service->delete();
        return redirect()->route('services.index')
            ->with('success', 'Service deleted successfully');
    }
}
