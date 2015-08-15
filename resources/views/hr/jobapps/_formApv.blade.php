<div class="panel panel-green" id="doc-data">
    <div class="panel-heading">
        การพิจารณาว่าจ้าง
    </div>
    <div class="panel-body">
        <div class="row">
            <div class="col-md-2">
                <div class="form-group">
                    <label for="pos_apv_id">ตำแหน่ง</label>
                </div>
            </div>
            <div class="col-md-10">
                <div class="form-group"> 

                    {!! Form::select('pos_apv_id', $positions, null,array('required','class' => 'form-control')) !!}
                </div>
                <div class="form-group"> 
                    <label for="dept_id">แผนก</label>
                    {!! Form::select('dept_id', $department, null,array('required','class' => 'form-control')) !!}
                </div>
                <div class="form-group"> 
                    <label for="salary_apv_id">เงินเดือน</label>
                    {!! Form::text('salary_apv_id',null, array('class' => 'form-control')) !!}
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-2">
                <div class="form-group">
                    <label for="">วันที่เริ่มงาน</label>
                </div>
            </div>
            <div class="col-md-10">
                <div class="form-group">
                    <div class='input-group date calendar' id='dtstartdate-apv'>
                        {!! Form::text('start_work_date',null, array('class' => 'form-control')) !!}
                        <span class="input-group-addon">
                            <span class="glyphicon glyphicon-calendar"></span>
                        </span>
                    </div>

                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-2">
                <div class="form-group">
                    <label for="">ผู้อนุมัติ</label>
                </div>
            </div>
            <div class="col-md-10">
                <div class="form-group"> 

                    {!! Form::text(null,null, array('class' => 'form-control')) !!}
                </div>
            </div>
        </div>


    </div>
</div>