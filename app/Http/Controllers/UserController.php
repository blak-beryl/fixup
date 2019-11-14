<?php 

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\User;
use App\Mechanic;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $mechanics = mechanic::all();

        return view('home', compact('mechanics'));
     
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
            'phonenumber' => 'required | numeric | max:11',
           'address' => 'required | min:7',
           'about' => 'min:10',
            'validation'=>'validation' 
        ]);
        $user = new user();
        $user->firstname = $request->input('firstname');
        $user->lastname = $request->input('lastname');
        $user->email = $request->input('email');
        $user->$request->input('validation');
        $user->password = Hash::make($request->input('password'));

        $user->save();
        // $data = request()->validate([

        //     'firstname' => ['required', 'string', 'max:255'],
        //     'lastname' => ['required', 'string', 'max:255'],
        //     'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
        //     'password' => ['required', 'string', 'min:8', 'confirmed'],
        //     'phonenumber' => ['required | numeric','max:11'],
        //     'address' => ['required | min:7'],
        //     'about' => ['min:10'],
        //     'validation'=> ['required'] 
        // ]);
        // function(){
        //     if (request()->hasFile('image')) {
        //         request()->validate([
        //             'image' => 'file|image|max:10000'
        //         ]);
        //     }
        // };
    }
    
            

protected function storeImage($mechanic)
{
    if(request()->has('image')){
        $mechanic->update([
            'image' => request()->image->store('uploads', 'public')
        ]);
    }

        // User::create([
        //     'firstname' => $mechanic['firstname'],
        //     'lastname' =>$mechanic['lastname'],
        //    'email' => $mechanic['email'],
        //     'password' => Hash::make($mechanic['password']),
        //     'phonenumber' => $mechanic['phonenumber'],
        //     'address' => $mechanic['address'],
        //     'about' => $mechanic['about'],
        //     'validation'=>$mechanic['validation'] 
        // ]);
    
        
           
              
    
        /**
         * Create a new user instance after a valid registration.
         *
         * @param  array  $data
         * @return \App\User
         */
       
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
