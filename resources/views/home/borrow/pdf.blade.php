<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>รายการยืม</title>
</head>
<body>
    <h2 align="center">รายระเอียดการยืม</h2>
    <br>
    <h3>รหัสผู้ยืม : {{ $borrow->user_id }}
        วันที่ยืม : {{ $borrow->comedate }}
        วันที่คืน : {{ $borrow->Return_date }}
    </h3>
    <hr>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">ลำดับ</th>
                <th scope="col">รายการยืม</th>
                <th scope="col">จำนวน</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>1</td>
                <td>{{ $borrow->equipment->equip_name }}</td>
                <td>1</td>
            </tr>
        </tbody>
    </table>
    <br>
    <br>
    <p align="right">ลงชื่อผู้เจ้าหน้าที่</p>
    <p align="right">ลงชื่อ............................</p>
    <p align="right">..............................</p>
</body>
</html>
