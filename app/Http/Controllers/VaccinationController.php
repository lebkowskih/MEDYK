<?php

namespace App\Http\Controllers;

use App\Models\Manufacturer;
use App\Models\Vaccination;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;


class VaccinationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $vaccinationsList = Vaccination::all(); 
        return view('vaccination/index',['vaccinationsList' => $vaccinationsList]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $vaccinationsList = Vaccination::all();
        return view('vaccination/create',['vaccinationsList'=>$vaccinationsList]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->all();
        $request->validate([
            'manufacturer' =>['required',], 
            'date' =>['required']]);

        $vaccination = new Vaccination();
        $vaccination->fill($data);
        $vaccination->save();
        return redirect('/vaccination');
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

    public function signin(Request $request)
    {
        $userid = Auth::user()->id;
        $vaccinationid = $request->input("vaxid");
        $updateDetails = ['user_id'=>$userid,"isAvailable"=> 0];

        DB::table('vaccinations')
           ->where('id',$vaccinationid)
            ->update($updateDetails);
        
        return redirect ('vaccination');
    }

    public function indexforuser(){
        $vaccinationsList = Vaccination::all();
        return view('vaccination/indexforuser',['vaccinationsList' => $vaccinationsList]);
    }
}
