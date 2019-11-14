<?php

namespace App\Http\Controllers;

use App\makerequest;
use App\service;
use App\mechanic;
use App\User;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $services = Service::all();

      return view('service.index', compact('services'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $service = new Service();

      return view('service.create', compact('service'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $service = Service::create($this-requestValidation());
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\service  $service
     * @return \Illuminate\Http\Response
     */
    public function show(service $service)
    {
        $mechanics = User::where('validation','=','1')->where('service1','=', $service->id)->orWhere('service2','=', $service->id)->orWhere('service3','=', $service->id)->get();
        $request = new makerequest();
        return view('service.show', compact('service','mechanics','request'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\service  $service
     * @return \Illuminate\Http\Response
     */
    public function edit(service $service)
    {
        return view('service.edit', compact('service'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\service  $service
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, service $service)
    {
        $service->update($this->requestValidation());
        
          return view('service.show', compact('service'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\service  $service
     * @return \Illuminate\Http\Response
     */
    public function destroy(service $service)
    {
        $service->delete();
    }

    protected function requestValidation()
    {
        return request()->validate([
            'name' => 'required',
            'description' => 'required|max:255',
            'company_id' => 'required'
        ]);
    }
}





