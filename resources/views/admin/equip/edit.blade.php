@extends('admin.equip.master')
@section('title', 'แก้ไขข้อมูลวัสดุอุปกรณ์')
@section('content')
<br>
  <div class="container">
    <div class="row">
      <div class="col-md-12">
      <h3 align="center">แก้ไข้ข้อมูลวัสดุอุปกรณ์</h3>
      @if(count($errors) > 0)
        <div class="alert alert-danger">
        <ul> @foreach($errors->all() as $error)
        <li>{{$error}}</li>
        @endforeach
        </ul>
        </div>
        @endif
      <br/>
      <form method="post" action="{{action('EquipmentController@update',$id)}}">
        <input type="hidden" name="_method" value="PUT">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        {{csrf_field()}}
        <div class="form-row">
          <div class="form-group col-md-6">
            <label for="inputEmail4">รหัสวัสดุอุปกรณ์</label>
            <input type="text" class="form-control" id="inputEmail4" name="equip_id" value="{{$equi->equip_id}}">
          </div>
          <div class="col-sm-4">
            <label for="intputyes">ปีที่รับ</label>
           <div class="form-group">
               <div class="input-group date" id="datepicker4" data-target-input="nearest">
                   <input type="text" class="form-control datepicker-input" data-target="#datepicker4" name="year" value="{{$equi->year}}"/>
               </div>
           </div>
         </div>
          <div class="form-group col-md-6">
            <label for="inputPassword4">ชื่อ/รายละเอียดวัสดุอุปกรณ์</label>
            <input type="text" class="form-control" id="inputPassword4" name="equip_name" value="{{$equi->equip_name}}">
          </div>
        </div>
             <div class="col-sm-4">
            <label for="intputyes">อายุประกัน</label>
           <div class="form-group">
               <div class="input-group date" id="datepicker5" data-target-input="nearest">
                   <input type="text" class="form-control datepicker-input" data-target="#datepicker5" name="jurantee" value="{{$equi->jurantee}}"/>
               </div>
           </div>
         </div>
        <div class="form-row">
          <div class="form-group col-md-2">
            <label for="inputCity">ประเภทวัสดุอุปกรณ์</label>
            <select class="form-control" name="tooltypes" value="{{$equi->tooltypes}}">
                <option value="พัสดุ">พัสดุ</option>
                <option value="อุปกรณ์">อุปกรณ์</option>
              </select>
          </div>
          <div class="form-group">

          </div>
          <div class="form-group col-md-2">
            <label for="inputState">สถานะอุปกรณ์</label>
            <select id="inputState" class="form-control" name="equip_status" value="{{$equi->equip_status}}">
              <option value="ว่าง">ว่าง</option>
              <option value="ไม่ว่าง">ไม่ว่าง</option>
            </select>
          </div>
        </div>
        <div class="form-group"> <input type="submit" class="btn btn-primary"  value="อัพเดท"/>
      </form>
      </div>
    </div>
  </div>

@endsection
