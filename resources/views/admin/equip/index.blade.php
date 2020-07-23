@extends('admin.equip.master')
@section('title', 'จัดการข้อมูลวัสดุอุปกรณ์')
@section('content')
<br>
<div class="container">
  <div class="row">
    <div class="col-md-12">
      <h3 align="center">วัสดุอุปกรณ์</h3>
      <a href="{{route('equip.create')}}" class="btn btn-success">เพิ่มข้อมูล</a>
      <br>
      @if(\Session::has('success'))
      <div class="alert alert-success">
      <p>{{ \Session::get('success') }}</p>
      </div>
    @endif
    <br>
      <table class="table">
        <thead class="thead-dark">
          <tr>
            <th scope="col">ลำดับ</th>
            <th scope="col">รหัสวัสดุอุปกรณ์</th>
            <th scope="col">ปีที่รับ</th>
            <th scope="col">ชื่อ/รายละเอียดวัสดุอุปกรณ์</th>
            <th scope="col">อายุประกัน</th>
            <th scope="col">ประเภทวัสดุอุปกรณ์</th>
            <th scope="col">สถานะอุปกรณ์</th>
            <th scope="col">แก้ไข้</th>
            <th scope="col">ลบข้อมูล</th>
          </tr>
        </thead>
        <tbody>
          @foreach($eqius as $row)
          <tr>
            <td>{{$row['id']}}</td>
            <td>{{$row['equip_id']}}</td>
            <td>{{$row['year']}}</td>
            <td>{{$row['equip_name']}}</td>
            <td>{{$row['jurantee']}}</td>
            <td>{{$row['tooltypes']}}</td>
            <td>{{$row['equip_status']}}</td>
            <td><a href="{{ action('EquipmentController@edit',$row['id']) }}" class="btn btn-warning ">แก้ไข้</a></td>
            <td>
              <form method="post" class="delete_form" action="{{action('EquipmentController@destroy', $row['id'])}}"> {{csrf_field()}}
              <input type="hidden" name="_method" value="DELETE" />
              <button type="submit" class="btn btn-danger">ลบข้อมูล</button> </form>
            </td>
            </tr>
          @endforeach
        </tbody>
      </table>
        {{ $eqius->links() }}
    </div>
  </div>
</div>
<script type="text/javascript">
$(document).ready(function(){ $('.delete_form').on('submit', function(){
	if(confirm("คุณต้องการลบข้อมูลหรือไม่ ?")) {
	return true;
    }
	else {
		return false;
	}
    });
});

</script>
@endsection
