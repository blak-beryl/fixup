<?php

namespace App\Http\Controllers;
use App\Mechanic;
use App\Service;
use App\Comment;
use App\Review;
use App\User;
use App\makerequest;
use Illuminate\Http\Request;

class MakerequestController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
           $moyo = $this->requestValidation();
           $moyo["user_id"] = auth()->user()->id;
           $moyo["service_id"] = '0';
        //    dd($moyo);
           $makerequest = makerequest::create($moyo);

           $services= service::all();
           $mechanics = User::where('validation', '=', '1')->get();

            return view('home', compact('services', 'mechanics'));

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\makerequest  $makerequest
     * @return \Illuminate\Http\Response
     */
    public function show(makerequest $makerequest)
    {
        $makerequest = makerequest::where('mechanic_id', '=', auth()->user()->id);
        return view('request.show', compact(''));
    }

    public function showall(User $mechanic)
    {
        $makerequests = makerequest::where('mechanic_id', '=', auth()->user()->id);

        return view('request.show', compact('makerequests'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\makerequest  $makerequest
     * @return \Illuminate\Http\Response
     */
    public function edit(makerequest $makerequest)
    {
        // return view('request.edit', 'makerequest');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\makerequest  $makerequest
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, makerequest $makerequest)
    {
        // $makerequest->update($this->requestValidation());
        // ​
        //         return view('request.show', 'makerequest');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\makerequest  $makerequest
     * @return \Illuminate\Http\Response
     */
    public function destroy(makerequest $makerequest)
    {
        $makerequest->delete();
    }

    protected function requestValidation()
    {
        return request()->validate([
            'address' => 'required | max:250',
            'phonenumber' => 'required | max:15',
            'request' => 'max:500',
            'mechanic_id' => 'required',

        ]);
    }
}