<div class="row">
    <div class="col-lg-12">
        <h3 class="page-header">{!! $header_text !!}</h3> 
    </div>
    <!-- /.col-lg-12 -->
</div>
<div class="row">
    <div class="col-lg-12">
        <div class="panel-body">
            <!-- Nav tabs -->
            <ul class="nav nav-pills green">
                <li class="active"><a href="#profile-pills" data-toggle="tab">ข้อมูลหลัก</a>
                </li>
                <li><a href="#option-pills" data-toggle="tab">ข้อมูลเพิ่มเติม</a>
                </li>
                <li><a href="#approe-pills" data-toggle="tab">การพิจารณา</a>
                </li>                
            </ul>
            <!-- Tab panes -->
            <div class="tab-content">
                <div class="tab-pane fade in active" id="profile-pills">
                    @include('hr/jobapps/_formTab1')
                </div>
                <div class="tab-pane fade" id="option-pills">
                    @include('hr/jobapps/_formTab2')
                </div>
                <div class="tab-pane fade" id="approe-pills">
                    @include('hr/jobapps/_formApv')
                </div>
            </div>
        </div>
        <div class="form-group">
            {!! Form::submit($submit_text, ['class'=>'btn btn-success ']) !!}
            <a href="/jobapps" type="button" class="btn btn-success"> ยกเลิก</a>
        </div>
    </div>
    <script type="text/javascript">
        $(function () {

            $('.calendar').datetimepicker({
                showClear: true,
                format: 'DD/MM/YYYY',
                locale: 'th',
                useCurrent: false
            });

        });
    </script>
</div>

