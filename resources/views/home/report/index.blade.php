@extends('home.report.master')
@section('title', 'รานการยืม-คืนวัสดุอุปกรณ์')
@section('content')
<div class="container">
  <br>
   <h3>รานการยืม-คืนวัสดุอุปกรณ์</h3>
  <table class="table">
        <thead class="thead-dark">
            <tr>
                <th scope="col">รหัสผู้ยืม</th>
                <th scope="col">ชื่อผู้ยืม</th>
                <th scope="col">วันที่ยีืม</th>
                <th scope="col">วันที่คืน</th>
                <th scope="col">รหัสอุปกรณ์</th>
                <th scope="col">ชื่อ/รายละเอียดวัสดุอุปกรณ์</th>
                <th scope="col">สถานะ</th>
            </tr>
        </thead>
        <tbody>
                @foreach ($borrow as $row)
                <tr>
                    <td>{{ $row->user_id }}</td>
                    <td>{{ $row->name }}
                    <td>{{$row->comedate}}</td>
                    <td>{{$row->Return_date}}</td>
                    <td>{{ $row->equip_id }}</td>
                    <td>{{ $row->equip_name }}</td>
                    <td>{{$row->borrow_status}}</td>
                </tr>
                @endforeach
        </tbody>
    </table>
</div>
@endsection
