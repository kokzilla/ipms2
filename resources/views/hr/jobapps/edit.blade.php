@extends('hr.layout')

@section('content')

{!! Form::model($jobapp, ['method' => 'PATCH', 'route' => ['jobapps.update',$jobapp->job_app_no],'class'=>'form-inline','files'=>true]) !!}
@include('hr/jobapps/_form', ['submit_text' => 'ปรับปรุงข้อมูล','header_text'=>'แก้ไขใบสมัครงาน','mode'=>'edit'])
{!! Form::close() !!}

@endsection

