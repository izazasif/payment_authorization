<?php
use Illuminate\Support\Facades\Crypt;
namespace App\Http\Controllers;
use App\ClientModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use \Crypt;

class HomeController extends Controller
{
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
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

   
    public function store(Request $request)
    {   
        // $data = request()->validate([
        //     'title' => ['required', 'string', 'max:255'],
        //     'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
        //     'password' => ['required', 'string', 'min:8', 'confirmed'],
        //     'message' => ['required', 'string', 'max:255'],
        // ]);
        // auth()->user()->client()->create([
        //     'name' => $data['name'],
        //     'email' => $data['email'],
        //     'password' => Hash::make($data['password']),
        //     'message' => Hash::make($data['message']),
        // ]);
        $data = new ClientModel();
        $data->title = $request->input('title');
        $data->user_id = Auth::user()->id;
        $data->link = "https://www.fezxcxc544646.com/users/as/user";
        $data->password = Hash::make($request->password);
       $data->text = Crypt::encryptString($request->text);
        $data->save(); 
        return redirect('/home');
      
    }

}
