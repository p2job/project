<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Equipment;

class EquipmentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $eqius = Equipment::paginate(5);
        return view('admin/equip.index', compact('eqius'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin/equip.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'equip_id'=>'required',
            'equip_name'=>'required',
            'year'=>'required',
            'jurantee'=>'required',
            'status'=>'required',
            'type'=>'required'
        ]);
        Equipment::create($request->all());
        return json_encode(array(
            "statusCode"=>200
        ));
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
        $equi = Equipment::find($id);
        return view('admin/equip.edit', compact('equi', 'id'));
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
        //$this->validate($request, [ 'id' => 'required', 'equip_id' => 'required','year' => 'required','equip_name' => 'required',
        //'jurantee' => 'required','tooltype_id' => 'required', 'equip_status' => 'required']);

        $equi = Equipment::find($id);
        $equi->equip_id = $request->get('equip_id');
        $equi->year = $request->get('year');
        $equi->equip_name = $request->get('equip_name');
        $equi->jurantee = $request->get('jurantee');
        $equi->tooltypes = $request->get('tooltypes');
        $equi->equip_status = $request->get('equip_status');
        $equi->save();
        return redirect()->route('equip.index')->with('success', 'อัพเดทเรียบร้อย');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $equi = Equipment::find($id);
        $equi->delete();
        return redirect()->route('equip.index')->with('success', 'ลบข้อมูลเรียบร้อย');
    }
}
