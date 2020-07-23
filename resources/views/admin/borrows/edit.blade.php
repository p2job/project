@extends('admin.borrows.master')
@section('title', 'แก้ไขการยืม')
@section('content')
<br>
  <div class="container">
    <div class="row">
      <div class="col-md-12">
      <h3 align="center">แก้ไข้การยืม</h3>
      @if(count($errors) > 0)
        <div class="alert alert-danger">
        <ul> @foreach($errors->all() as $error)
        <li>{{$error}}</li>
        @endforeach
        </ul>
        </div>
        @endif
      <br/>
      <form method="post" action="{{action('BorrowaController@update',$id)}}">
        <input type="hidden" name="_method" value="PUT">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        {{csrf_field()}}
        <div class="form-row">
                <div class="form-group col-md-6">
                  <label for="inputequp">รหัสผู้ยืม</label>
                  <input type="text" class="form-control" id="inputEmail4" name="user_id" value="{{ $borrows->user_id }}">
                </div>
                <div class="col-sm-4">
                  <label for="intputyes">วันที่ยืม</label>
                 <div class="form-group">
                     <div class="input-group date" id="datepicker4" data-target-input="nearest">
                         <input type="text" class="form-control datepicker-input" data-target="#datepicker4" name="comedate" value="{{ $borrows->comedate }}"/>
                         <div class="input-group-append" data-target="#datepicker4" data-toggle="datepicker">
                             <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                         </div>
                     </div>
                 </div>
               </div>
                <div class="form-group col-md-6">
                  <label for="inputEqupname">รหัสอุปกรณ์</label>
                  <input type="text" class="form-control" id="inputPassword4" name="equip_id" value="{{ $borrows->equip_id }}">
                </div>
                <div class="col-sm-4">
                  <label for="intputyes">วันที่คืน</label>
                 <div class="form-group">
                     <div class="input-group date" id="datepicker5" data-target-input="nearest">
                         <input type="text" class="form-control datepicker-input" data-target="#datepicker5" name="Return_date" value="{{ $borrows->Return_date }}"/>
                         <div class="input-group-append" data-target="#datepicker5" data-toggle="datepicker">
                             <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                         </div>
                     </div>
                 </div>
               </div>
               <div class="form-group col-md-2">
                      <label for="inputEqupname">สถานะ</label>
                      <select id="inputState" class="form-control" name="borrow_status" value="{{ $borrows->borrow_status}}">
                            <option value="ยืม">ยืม</option>
                            <option value="คืน">คืน</option>
                          </select>
                    </div>
              </div>
        <div class="form-group"> <input type="submit" class="btn btn-primary"  value="อัพเดท"/>
      </form>
      </div>
    </div>
  </div>

@endsection
