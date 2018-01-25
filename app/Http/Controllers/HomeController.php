<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\User;
use App\Address;
use Exception;
use Validator;
class HomeController extends Controller
{
  private $path = 'users';
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $user = new User();

      $address = DB::table('addresses')
            ->join('users', 'addresses.iduser', '=', 'users.id')
            ->get();

        return view('home', [
          'user' => auth()->user(),
          'data' => $user->all(),
          'address' => $address,
        ]);
    }

    public function create(){
      return view('users.create');
    }

    public function store(Request $request){
      $validator = Validator::make($request->all(), [
          'name' => 'required|string|max:255',
          'email' => 'required|string|email|max:255|unique:users',
          'password' => 'required|string|min:6|confirmed',
          'idrol' => 'required|integer',
      ]);

      if ($validator->fails()) {
          return redirect('users/create')
                ->withErrors($validator)
                ->withInput();
      }else{
        User::create([
            'name' => $request['name'],
            'email' => $request['email'],
            'password' => bcrypt($request['password']),
            'idrol' => $request['idrol'],
        ]);
        return redirect()->route('home');
      }
    }

    public function edit($id){
      //var_dump($id);
      $user = User::findOrFail($id);
      return view($this->path.'.edit', compact('user'));
    }

    public function update(Request $request, $id){
      $user = User::findOrFail($id);
      $user->name = $request->name;
      $user->email = $request->email;
      $user->password = bcrypt($request->password);
      $user->idrol = $request->idrol;
      $user->save();
      return redirect()->route('home');
    }

    public function delete($id){
      try {
        $user = User::findOrFail($id);
        $user->delete();
        return redirect()->route('home');

      } catch (\Exception $e) {
        return "Fatal error - ".$e->getMessage();
      }

    }
}
