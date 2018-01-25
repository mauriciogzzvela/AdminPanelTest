<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Address;
use App\User;
use Exception;
use Validator;
class AddressController extends Controller
{
  private $path = 'addresses';
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
      $user = new User();
        return view('addresses.create', [
          'user' => auth()->user(),
          'data' => $user->all(),
        ]);
    }

    public function store(Request $request){
      $validator = Validator::make($request->all(), [
          'name' => 'required|string|max:255',
          'street' => 'required|string|max:255',
          'number' => 'required|integer',
          'neighborhood' => 'required|string|max:255',
          'zipcode' => 'required|integer',
          'state' => 'required|string|max:255',
          'country' => 'required|string|max:255',
      ]);

      if ($validator->fails()) {
          return redirect('/addresses/create')
                ->withErrors($validator)
                ->withInput();
      }else{
        Address::create([
            'iduser' => $request['name'],
            'street' => $request['street'],
            'number' => $request['number'],
            'neighborhood' => $request['neighborhood'],
            'zipcode' => $request['zipcode'],
            'state' => $request['state'],
            'country' => $request['country'],
        ]);
        return redirect()->route('home');
      }
    }

    public function edit($id){
      //var_dump($id);
      $user = User::findOrFail($id);

      $user = DB::table('addresses')
            ->join('users', 'addresses.iduser', '=', 'users.id')
            ->select('addresses.*', 'users.id as userid', 'users.name')
            ->where('users.id',$id)
            ->get();

      return view($this->path.'.edit', compact('user'));

    }

    public function update(Request $request, $id){
      $address = Address::findOrFail($id);
      $address->iduser = $request->userid;
      $address->street = $request->street;
      $address->number = $request->number;
      $address->neighborhood = $request->neighborhood;
      $address->zipcode = $request->zipcode;
      $address->state = $request->state;
      $address->country = $request->country;
      $address->save();
      return redirect()->route('home');
    }

    public function delete($id){
      try {
        DB::table('addresses')->where('iduser', '=', $id)->delete();
        return redirect()->route('home');

      } catch (\Exception $e) {
        return "Fatal error - ".$e->getMessage();
      }

    }
}
