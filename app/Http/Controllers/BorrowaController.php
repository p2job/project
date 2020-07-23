<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Borrow;
use App\Users;
//use Illuminate\Support\Facades\DB;
use DB;
class BorrowaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $borrows = Borrow::with('equipment')->paginate(5);
        return view('admin/borrows.index', compact('borrows'));
    }
    public function repost()
    {
        //$borrows = Borrow::with('test')->paginate(5);
        $borrows = Borrow::tests();
        //dd($borrows);
        return view('admin/report.index',compact('borrows'));
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
        $borrows = new Borrow ([
            'user_id' => $request->get('user_id'),
            'equip_id' => $request->get('equip_id'),
            'comedate' => $request->get('comedate'),
            'Return_date' => $request->get('Return_date'),
            'borrow_status' => $request->get('borrow_status')
        ]);
        $borrows->save();
        return redirect()->route('borrows.index')->with('success', 'บันทึกข้อมูลเรียบร้อย');
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
        $borrows = Borrow::find($id);
        return view('admin/borrows.edit', compact('borrows', 'id'));
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
        $borrows = Borrow::find($id);
        $borrows->user_id = $request->get('user_id');
        $borrows->equip_id = $request->get('equip_id');
        $borrows->comedate = $request->get('comedate');
        $borrows->Return_date = $request->get('Return_date');
        $borrows->borrow_status = $request->get('borrow_status');
        $borrows->save();
        return redirect()->route('borrows.index')->with('success', 'อัพเดทเรียบร้อย');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $equi = Borrow::find($id);
        $equi->delete();
        return redirect()->route('borrows.index')->with('success', 'ลบข้อมูลเรียบร้อย');
    }
}
