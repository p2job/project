@extends('home.borrow.master')
@section('title', 'ยืมวัสดุอุปกรณ์')
@section('content')
<br>
  <div class="container">
    <div class="row">
      <div class="col-md-12">
      <h3 align="center">ยืม</h3>
      @if(count($errors) > 0)
        <div class="alert alert-danger">
        <ul> @foreach($errors->all() as $error)
        <li>{{$error}}</li>
        @endforeach
        </ul>
        </div>
        @endif
        @if(\Session::has('success'))
        <div class="alert alert-success">
        <p>{{ \Session::get('success') }}</p>
        </div>
      @endif
      <br/>
      <form method="post" action="{{url('borrow')}}">
        {{csrf_field()}}
        <div class="form-row">
          <div class="form-group col-md-6">
            <label for="inputequp">รหัสผู้ยืม</label>
            <input type="text" class="form-control" id="inputEmail4" name="user_id" placeholder="รหัสวัสดุอุปกรณ์">
          </div>
          <div class="col-sm-4">
            <label for="intputyes">วันที่ยืม</label>
           <div class="form-group">
               <div class="input-group datepicker" id="datepicker4" data-target-input="nearest">
                   <input type="datepicker" class="form-control datepicker-input" data-target="#datepicker4" name="comedate"/>
                   <div class="input-group-append" data-target="#datepicker4" data-toggle="datepicker">
                       <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                   </div>
               </div>
           </div>
         </div>
          <div class="form-group col-md-6">
            <label for="inputEqupname">ชื่อ/รหัสอุปกรณ์</label>
            <input type="text" class="form-control" id="inputPassword4" name="equip_id" placeholder="ชื่อ/รายละเอียดวัสดุอุปกรณ">
          </div>
          <div class="col-sm-4">
            <label for="intputyes">วันที่คืน</label>
           <div class="form-group">
               <div class="input-group date" id="datepicker5" data-target-input="nearest">
                   <input type="text" class="form-control datepicker-input" data-target="#datepicker5" name="Return_date"/>
                   <div class="input-group-append" data-target="#datepicker5" data-toggle="datepicker">
                       <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                   </div>
               </div>
           </div>
         </div>
         <div class="form-group col-md-2">
                <label for="inputEqupname">สถานะ</label>
                <input type="text" class="form-control" id="inputPassword4" name="borrow_status" value="รออนุมัติ" readonly>
              </div>
        </div>
        <div class="form-group" align="center">
          <button type="submit" class="btn btn-primary">บันทึก</button>
        </div>
      </form>
      </div>
      <script type="text/javascript">
            $(function () {
                $('#datepicker').datepicker({
                    format: 'DD-MM-YYYY',
                });
            });
        </script>
    </div>
  </div>
@endsection
