@extends('hr.layout')
@section('content')

<div class="row">
    <div class="col-lg-12">
        <h3 class="page-header">รายชื่อผู้สมัคร</h3>
        <a class="btn btn-default" href="/jobapps/create">
            <i class="fa fa-user-plus fa-x pull-left"></i> สมัครใหม่
        </a>
    </div>
    <!-- /.col-lg-12 -->
</div>


@if (!$jobapps->count())
@else

<table class="table table-striped table-bordered table-hover" id="jobapps-list">
    <thead>
        <tr>
            <th>No.</th>
            <th>ชื่อ-สกุล</th>
            <th>ตำแหน่ง</th>
            <th>เงินเดือน</th>
            <th>วันที่สมัคร</th>
            <th>แก้ไข</th>
        </tr>
    </thead>
    <tbody>
        @foreach( $jobapps as $jobapp)
        <tr>
            <td>
                {{$jobapp->job_app_no}}
            </td>
            <td>
                {{$jobapp->first_name}} {{$jobapp->last_name}}
            </td>
            <td>
                {{$jobapp->position->detail}}
            </td>
            <td class="text-right">
                {{{ number_format((float) $jobapp->salary, 0) }}}
            </td>
            <td class="text-center">

                {{ $jobapp->created_at->format('d/m/Y')}}

            </td>
            <td class="text-center" >
                {!! link_to_route('hr.jobapps.edit', 'แก้ไข', array($jobapp->job_app_no), array('class' => 'btn btn-warning  btn-xs')) !!}

                {!! link_to_route('hr.jobapps.pdf', 'พิมพ์',['job_app_no'=>$jobapp->job_app_no] , array('class' => 'btn btn-info  btn-xs'))!!}

            </td>
        </tr>
        @endforeach
    </tbody>
</table>
<!-- Page-Level Demo Scripts - Tables - Use for reference  -->
<!-- JobApp List -->
<script>
    $(document).ready(function () {
        $('#jobapps-list').DataTable({
            responsive: true
        });

    });
</script>

@endif
@stop
