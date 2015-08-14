@extends('hr.layout')

@section('content')
    <h2>แสดงรายชื่อผู้สมัคร</h2>
     
    <p>
        {!! link_to_route('jobapps.create', 'ผู้สมัครใหม่') !!}
    </p>
@stop