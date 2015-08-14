<!DOCTYPE html>
<html lang="en">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
        <link href="css/custom.css" rel="stylesheet" type="text/css" />
        <title>ใบสมัครงาน</title>

    </head>
    <body>
        <img src="/images/po-oil-logo.jpg"></img>
        <h3>ใบสมัครงาน</h3>
        <div class="test" align="center">{{$jobapp->job_app_no}}</div>
        <p style="color:red">ทดสอบ - Test</p>
        <img src="/images/noimage.png"></img>

        <div>
            <span>สมัครงานในตำแหน่ง {{$jobapp->first_name}}</span>
            <span>เงินเดือน {{$jobapp->salary}}</span>
        </div>
        <div>
            <span>ชื่อ {{$jobapp->prefix}}{{$jobapp->first_name}} {{$jobapp->last_name}}</span><span>ชื่อเล่น</span>
        </div>
        <div>
            <span>วันเกิด</span> <span>เชื้อชาติ</span> <span>สัญชาติ</span> <span>ศาสนา</span>
        </div>
		<div><span>บัตรประจำตัวประชาชน</div>
		</div>

    </body>
</html>
