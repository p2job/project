@extends('admin.equip.master')
@section('title', 'เพิ่มข้อมูลวัสดุอุปกรณ์')
@section('content')
<br>
  <div class="container">
    <div class="row">
      <div class="col-md-12">
      <h3 align="center">เพิ่มข้อมูลวัสดุอุปกรณ์</h3>
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
      <form method="post" action="{{url('equip')}}">
        {{ csrf_field() }}
        <div class="form-row">
          <div class="form-group col-md-6">
            <label for="inputequp">รหัสวัสดุอุปกรณ์</label>
            <input type="text" class="form-control" id="inputEmail4" name="equip_id" placeholder="รหัสวัสดุอุปกรณ์">
          </div>
          <div class="col-sm-4">
            <label for="intputyes">ปีที่รับ</label>
           <div class="form-group">
               <div class="input-group datepicker" id="datepicker4" data-target-input="nearest">
                   <input type="datetime-local" class="form-control datepicker-input" data-target="#datepicker4" name="year"/>
               </div>
           </div>
         </div>
          <div class="form-group col-md-6">
            <label for="inputEqupname">ชื่อ/รายละเอียดวัสดุอุปกรณ์</label>
            <input type="text" class="form-control" id="inputPassword4" name="equip_name" placeholder="ชื่อ/รายละเอียดวัสดุอุปกรณ">
          </div>
          <div class="col-sm-4">
            <label for="intputyes">อายุประกัน</label>
           <div class="form-group">
               <div class="input-group datepicker" id="datepicker5" data-target-input="nearest">
                   <input type="text" class="form-control datepicker-input" data-target="#datepicker5" name="jurantee"/>
               </div>
           </div>
         </div>
        </div>
        <div class="form-row">
          <div class="form-group col-md-2">
            <label for="inputtype">ประเภทวัสดุอุปกรณ์</label>
            <select class="form-control" name="tooltypes">
              <option value="พัสดุ">พัสดุ</option>
              <option value="อุปกรณ์">อุปกรณ์</option>
            </select>
          </div>
          <div class="form-group col-md-2">
            <label for="inputstatus">สถานะ</label>
            <select class="form-control" name="equip_status">
              <option value="ว่าง">ว่าง</option>
              <option value="ไม่ว่าง">ไม่ว่าง</option>
            </select>
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
