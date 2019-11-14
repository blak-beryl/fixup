<?php

namespace App\Http\Controllers;

use App\mechanic;
use App\User;
use App\service;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class MechanicController extends Controller
{

    use AuthenticatesUsers;


     /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/home';

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $mechanics = mechanic::all();

        return view('mechanic.index', compact('mechanics'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $mechanic = new mechanic();
        $services = service::all();

        return view('mechanic.create', compact('mechanic', 'services'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'firstname'=>'required',
            'lastname'=>'required',
            'email'=>'required|email',
            'password'=>'required', 
            'phonenumber' =>'required | numeric',
            'address' =>'required | min:7',
            'about' =>'min:10',
            
        ]);

        $user = new User();
        $user->firstname = $request->input('firstname');
        $user->lastname = $request->input('lastname');
        $user->email = $request->input('email');
        $user->image = $request->input('image');
        $user->phonenumber = $request->input('phonenumber');
        $user->address = $request->input('address');
        $user->about= $request->input('about');
        $user->service1 = $request->input('service1');
        $user->service2 = $request->input('service2');
        $user->service3 = $request->input('service3');
        $user->validation = 1;
        $user->password = Hash::make($request->input('password'));

        $user->save();

        // $mechanic = User::create($this->requestValidation());

        // $this->storeImage($mechanic);
        
        $this->storeImage($user);

        // $mechanics = User::where('validation', '=', '1')->get();

        // return view('mechanic.view', compact('mechanics'));

        return redirect('/login');
  
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\mechanic  $mechanic
     * @return \Illuminate\Http\Response
     */
    public function show(mechanic $mechanic)
    {
        return view('mechanic.show', compact('mechanic'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\mechanic  $mechanic
     * @return \Illuminate\Http\Response
     */
    public function edit(mechanic $mechanic)
    {
        return view('mechanic.edit', compact('mechanic'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\mechanic  $mechanic
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, mechanic $mechanic)
    {
        $mechanic->update($this->requestValidation());

        $this->storeImage($mechanic);

        return view('mechanic.show', compact('mechanic'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\mechanic  $mechanic
     * @return \Illuminate\Http\Response
     */
    public function destroy(mechanic $mechanic)
    {
        $mechanic->delete();
    }

    protected function requestValidation()
    {
        return tap(request()->validate([

            'firstname' => 'required|min:4',
            'lastname' => 'required|min:4',
            'email' => 'required | email',
            'password' => '',
            'phonenumber' => 'required | numeric',
            'address' => 'required | min:7',
            'service1' => 'required',
            'service2' => 'required',
            'service3' => 'required',
            'about' => 'min:10',
        ]), function(){
                if(request()->hasFile('image'))
                {
                    request()->validate([
                        'image' => 'file|image|max:10000'
                    ]);
                }
        });
    }

    protected function storeImage($user)
    {
        if(request()->has('image')){
            $user->update([
                'image' => request()->image->store('uploads', 'public')
            ]);
        }
    }
}




