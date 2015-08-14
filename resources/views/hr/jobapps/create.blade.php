@extends('hr.layout')

@section('content'  )

{!! Form::model(new App\Models\Hr\Jobapp, array('route' => 'jobapps.store','class'=>'form-inline')) !!}
@include('hr/jobapps/_form', ['submit_text' => 'บันทึกข้อมูล','header_text'=>'สร้างใบสมัครงาน','mode'=>'create'])
{!! Form::close() !!} 

@stop