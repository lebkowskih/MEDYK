<?php
namespace App\Http\Controllers;

use App\Models\Prescription;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\View;
use PDF;
use Illuminate\Support\Facades\DB;


class PrescriptionController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = Auth::user();

        $prescriptions = Prescription::all();
        return view('prescriptions/list',['prescriptions'=>$prescriptions,'user'=>$user]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $users = User::all();
        return view('/prescriptions/create',['users'=>$users]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $user = User::find($request->input('user'));
        $data = $request->all();
        $request->validate([
            'medicine' =>['required']
        ]);

        $prescription = new Prescription();
        $prescription->fill(['code'=>rand(1000,9999)]);
        $prescription ->fill($data);
        $user->prescription()->save($prescription);
        $prescription->save();
        return redirect ('/home');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $prescription = Prescription::find($id);
        return view('prescriptions/show',['prescription'=>$prescription]);
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

    public function pdf($id)
    {
        $prescription = Prescription::find($id);
        $userList = DB::select('select distinct firstname,lastname from users join prescriptions on prescriptions.user_id=users.id where ?=prescriptions.user_id',[Auth::user()?->id]);
        $pdf = App::make('dompdf.wrapper');
        $pdf->loadHTML(View::make('prescriptions/pdf',['prescription' => $prescription,'userList'=>$userList]));
        return $pdf->stream();
    }

}
