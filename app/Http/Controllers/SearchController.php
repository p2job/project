<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class SearchController extends Controller
{
    function search(){
      return view('admin/search');
    }
    function search1(){
      return view('home/search');
    }

    function action(Request $request){
      if ($request->ajax()) {
        $output='';
        $result=$request->get('query');
        if ($result !='') {
          $data=DB::table('equipment')
            ->where('equip_name','like','%'.$result.'%')
            ->orWhere('id','like','%'.$result.'%')->get();
        }else {
          $data=DB::table('equipment')->get();
        }
        $total_row=$data->count();
        if ($total_row>0) {
          foreach ($data as $row) {
            $output.='<tr>
            <td>'.$row->equip_id.'</td>
            <td>'.$row->equip_name.'</td>
            <td>'.$row->tooltypes.'</td>
            <td>'.$row->equip_status.'</td>
            </tr>';
          }
        }else {
          $output="<tr><td align='center' colspan='5'>ไม่พบข้อมูล<></tr>";
        }
        $data = array('table_data'=>$output,'total_data'=>$total_row);
        echo json_encode($data);
      }
    }
}
