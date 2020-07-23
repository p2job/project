@extends('admin.borrows.master')
@section('title', 'อนุมัติการยืมคืนอุปกรณ์')
@section('content')
<br>
<div class="container">
  <div class="row">
    <div class="col-md-12">
      <h3 align="center">อนุมัติการยืมคืนอุปกรณ์</h3>
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
            <th scope="col">รหัสผู้ยืม</th>
            <th scope="col">ชื่อ/รายละเอียดวัสดุอุปกรณ์</th>
            <th scope="col">วันที่ยืม</th>
            <th scope="col">วันที่คืน</th>
            <th scope="col">สถานะ</th>
            <th scope="col">อนุมัติการยืมคืน</th>
            <th scope="col">ลบข้อมูล</th>
          </tr>
        </thead>
        <tbody>
                @foreach ($borrows as $row)
                <tr>
                    <td>{{ $row->user_id }}</td>
                    <td>{{ $row->equipment->equip_name }}</td>
                    <td>{{$row->comedate}}</td>
                    <td>{{$row->Return_date}}</td>
                    <td>{{$row->borrow_status}}</td>
                    <td>
                        <a href="{{ action('BorrowaController@edit', $row['id']) }}" class="btn btn-primary">อนุมัติการยืมคืน</a>
                    </td>
                    <td>
                      <form method="post" class="delete_form" action="{{action('BorrowaController@destroy', $row['id'])}}"> {{csrf_field()}}
                      <input type="hidden" name="_method" value="DELETE" />
                      <button type="submit" class="btn btn-danger">ลบข้อมูล</button> </form>
                    </td>
                </tr>
                @endforeach
        </tbody>
      </table>
      {{ $borrows->links() }}
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
