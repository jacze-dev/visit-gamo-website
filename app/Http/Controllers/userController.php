<?php

namespace App\Http\Controllers;

use index;
use App\Models\Blog;
use App\Models\User;
use App\Models\Hotel;
use App\Models\Nature;
use App\Models\message;
use App\Models\Arbaminch;
use Illuminate\Http\Request;
use App\Models\ReligiousArea;
use Illuminate\Support\Facades\Auth;

class userController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
       public function goToDestinLIst(){

        $religious = ReligiousArea::all();
        $nature = Nature ::all();
        $arbaminch = Arbaminch :: all();
        // dd($religious);

        return view('destinList',compact('religious','nature','arbaminch'));
       }
     public function usersIndex(){
        $users = User::all();
        return view('users',compact('users'));
     }
    public function index(){
        $arbaminch = Arbaminch::all();
        $relig = ReligiousArea::all();
        $nature = Nature::all();
        $totalHotels = Hotel::count();
        $totalDestin = Arbaminch::count() + ReligiousArea::count() + Nature::count();
        $totalUsers = User::count();
        $blogs = Blog::orderby('created_at','desc')->paginate(3);
        // dd($isAdmin);
        $messages = message::join('users', 'messages.foreign_user_id', '=', 'users.id')
        ->select('messages.*','first_name as first_name','last_name as last_name','image as image')->orderby('created_at','desc')
        ->paginate(3);
        if (!$messages) {
            return redirect()->back();
        }
        return view('index',compact('messages','totalUsers','blogs','totalDestin','totalHotels','arbaminch','relig','nature'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('signup');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $formField = $request->validate([
            'first_name' => 'required|min:3',
            'last_name' => 'required|min:3',
            'email' => 'required|email|unique:users',
            'password' => 'required|confirmed|min:3',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:5120',
        ]);

        $formField['password'] = bcrypt($formField['password']);


        if ($request->hasFile('image')) {
            $photo = $request->file('image');
        } else {
            return redirect('')->with('error', 'Please select a file to upload.');
        }


        $fileName = $photo->getClientOriginalName();

        $photo->move(public_path('images'), $fileName);
        $formField['image'] = $fileName;
        $user = User::create($formField);
        auth()->login($user);

        return redirect('/');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\visitors  $visitors
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\visitors  $visitors
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\visitors  $visitors
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\visitors  $visitors
     * @return \Illuminate\Http\Response
     * 
     */

    public function destroy($id)
    {
        $user = User::find($id);
        if ($user) {
            $user->delete();
            return redirect()->route('usersIndex')->with('message', 'usersuccessfully deleted');
        } else {
            return redirect()->route('usersIndex')->with('message', 'user not found');
        }
       
    }
    function login()
    {
        return view('login');
    }

    function authenticate(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);
       
        // dd($request->only(['email', 'password']));
        $credentials = $request->only(['email', 'password']);
        // dd($request->only(['email', 'password']));
        if (Auth::attempt($credentials)) {
            return redirect('/');
        }

        return redirect()->back()->withErrors(['email' => 'Email or password is incorrect']);
    }

    function logout(Request $request){
        auth() ->logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
      
        return redirect('/');
    }
}
