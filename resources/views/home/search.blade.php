@extends('home.master')
@section('title', 'ค้นหาข้อมูลวัสดุอุปกรณ์')
@section('content')
<br>
<div class="container">
  <div class="row">
    <div class="col-md-12">
      <h3 align="center">ค้นหาข้อมูลวัสดุอุปกรณ์</h3>
      <br>
      <input class="form-control mr-sm-2" name="search" type="text" id="search" placeholder="ค้นหาข้อมูล ชื่ออุปกรณ์">
      <h3 align="center">จำนวนข้อมูล :<span id="total_records"></span></h3>
      <table class="table">
        <thead class="thead-dark">
          <tr>
            <th scope="col">รหัสวัสดุอุปกรณ์</th>
            <th scope="col">ชื่อ/รายละเอียดวัสดุอุปกรณ์</th>
            <th scope="col">ประเภทวัสดุอุปกรณ์</th>
            <th scope="col">สถานะอุปกรณ์</th>
          </tr>
        </thead>
        <tbody></tbody>
      </table>
    </div>
  </div>
</div>
<script type="text/javascript">
  $(document).ready(function(){
      fetch_data();
  });
  $(document).on('keyup', '#search', function(){
     var query = $(this).val();
     fetch_data(query);
   });
   function fetch_data(query = '')
   {
    $.ajax({
     url:"{{ route('admin.action') }}",
     method:'GET',
     data:{query:query},
     dataType:'json',
     success:function(data)
     {
        $('tbody').html(data.table_data);
        $('#total_records').text(data.total_data);
     }
   })
  }

</script>
@endsection
