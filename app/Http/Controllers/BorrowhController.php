<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Borrow;
use PDF;

class BorrowhController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $borrow = Borrow::with('equipment')->paginate(5);
       // $borrow = Borrow::with('equipment')->get();

        //$borrow = Borrow::test($id);
      /* foreach($borrow as $row)
        {
            echo $row->equipment->equip_name;
           // print_r($row->equipment);
        }*/
        return view('home/borrow.index', compact('borrow'));
    }
    public function repost($id){
        $borrow = Borrow::test($id);
        //dd($id);
        return view('home/report.index',compact('borrow'));
    }
    public function downloadPDF($id)
    {
        $borrow = Borrow::find($id);
        $viwe = \View::make('home/borrow.pdf', compact('borrow'));
        $html = $viwe->render();
        $pdf = new PDF();
        $pdf::SetTitle('รายการยืม');
        $pdf::AddPage();
        $pdf::SetFont('freeserif', '', 10);
        $pdf::WriteHTML($html,true,false,true,false);
        $pdf::Output('report.pdf');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('home/borrow.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $borrow = new Borrow ([
            'user_id' => $request->get('user_id'),
            'equip_id' => $request->get('equip_id'),
            'comedate' => $request->get('comedate'),
            'Return_date' => $request->get('Return_date'),
            'borrow_status' => $request->get('borrow_status')
        ]);
        $borrow->save();
        return redirect()->route('borrow.index')->with('success', 'บันทึกข้อมูลเรียบร้อย');

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
        $borrow = Borrow::find($id);
        return view('home/borrow.edit', compact('borrow', 'id'));
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
        $borrow = Borrow::find($id);
        $borrow->user_id = $request->get('user_id');
        $borrow->equip_id = $request->get('equip_id');
        $borrow->comedate = $request->get('comedate');
        $borrow->Return_date = $request->get('Return_date');
        $borrow->borrow_status = $request->get('borrow_status');
        $borrow->save();
        return redirect()->route('borrow.index')->with('success', 'อัพเดทเรียบร้อย');
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
        return redirect()->route('borrow.index')->with('success', 'ลบข้อมูลเรียบร้อย');
    }
}
