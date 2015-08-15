<!-- part 4  -->
<div class="panel panel-green" id="job-history-data">
    <div class="panel-heading">
        ส่วนที่ 4   ประวัติการทำงาน
    </div>
    <div class="panel-body">
        <div class="row">
            <div class="col-md-3">
                <div class="form-group">
                    {!! Form::label('job_ex', 'ประวัติการทำงาน/สถานที่เคยทำงาน') !!}
                </div>
            </div>                
            <div class="col-md-9">                        
                <div class="form-group">                            
                    {!! Form::text('job_ex',null, array('class' => 'form-control')) !!}
                </div>
                <div class="form-group">        
                    {!! Form::label('job_ex_year', 'เมื่อปี') !!}
                    {!! Form::text('job_ex_year',null, array('class' => 'form-control')) !!}
                </div>
            </div>

        </div>
        <div class="row">               
            <div class="col-md-3">
                <div class="form-group">
                    {!! Form::label('job_ex_pos_id', 'ตำแหน่ง') !!}
                </div>
            </div>
            <div class="col-md-9">
                <div class="form-group">                            
                    {!! Form::text('job_ex_pos_id',null, array('class' => 'form-control')) !!}
                </div>
                <div class="form-group">        
                    {!! Form::label('job_ex_reason', 'สาเหตุที่ออก') !!}
                    {!! Form::text('job_ex_reason',null, array('class' => 'form-control')) !!}
                </div>
            </div>
        </div>
    </div>
</div>
<!-- part 5  -->
<div class="panel panel-green" id="skill-data">
    <div class="panel-heading">
        ส่วนที่ 5 ความสามารถพิเศษ   
    </div>
    <div class="panel-body">
        <div class="row">               
            <div class="col-md-2">
                <div class="form-group"> 
                    {!! Form::label(null, 'คอมพิวเตอร์') !!}

                </div>
            </div>
            <div class="col-md-3">
                <div class="form-group">
                    <label class="checkbox-inline">
                        {!! Form::radio('skill_com', 1,null,array('class' => 'form-control','id'=>'skill_com1')) !!} {!! Form::label('skill_com1', 'ได้') !!}
                    </label>
                    <label class="checkbox-inline">
                        {!! Form::radio('skill_com', 0,null,array('class' => 'form-control','id'=>'skill_com2')) !!} {!! Form::label('skill_com2', 'ไม่ได้') !!}
                    </label>
                </div>
            </div>
            <div class="col-md-7">
                <div class="form-group">
                    {!! Form::label('skill_com_detail', 'โปรแกรม ') !!}
                    {!! Form::text('skill_com_detail',null, array('class' => 'form-control')) !!}
                </div>

            </div>

        </div>
        <div class="row">               
            <div class="col-md-2">
                <div class="form-group"> 
                    {!! Form::label(null, 'ขับรถยนต์') !!}

                </div>
            </div>
            <div class="col-md-10">
                <div class="form-group">
                    <label class="checkbox-inline">
                        {!! Form::radio('skill_drive', 1,null,array('class' => 'form-control','id'=>'skill_drive1')) !!} {!! Form::label('skill_drive1', 'ได้') !!}
                    </label>
                    <label class="checkbox-inline">
                        {!! Form::radio('skill_drive', 0,null,array('class' => 'form-control','id'=>'skill_drive2')) !!} {!! Form::label('skill_drive2', 'ไม่ได้') !!}
                    </label>
                </div>
            </div>
        </div>
        <div class="row">               
            <div class="col-md-2">
                <div class="form-group"> 
                    {!! Form::label('driving_license', 'ใบขับขี่เลขที่') !!}
                </div>
            </div>
            <div class="col-md-10">
                <div class="form-group">
                    {!! Form::text('driving_license',null, array('class' => 'form-control')) !!}
                    {!! Form::label('driving_expiry_date', 'หมดอายุวันที่') !!}
                    <div class='input-group date calendar' id='dtdrivingexpiry'>
                        {!! Form::text('driving_expiry_date',null, array('class' => 'form-control')) !!}
                        <span class="input-group-addon">
                            <span class="glyphicon glyphicon-calendar"></span>
                        </span>
                    </div>
                    {!! Form::label('driving_detail', 'อื่น ๆ ') !!}
                    {!! Form::text('driving_detail',null, array('class' => 'form-control')) !!}

                </div>
            </div>               
        </div>

        <div class="row">               
            <div class="col-md-2">
                <div class="form-group"> 
                    {!! Form::label(null, 'สามารถไปปฏิบัติงานต่างอำเภอ') !!}
                </div>
            </div>
            <div class="col-md-3">
                <div class="form-group">
                    <label class="checkbox-inline">
                        {!! Form::radio('beout', 1,null,array('class' => 'form-control','id'=>'beout1')) !!} {!! Form::label('beout1', 'ได้') !!}
                    </label>
                    <label class="checkbox-inline">
                        {!! Form::radio('beout', 0,null,array('class' => 'form-control','id'=>'beout2')) !!} {!! Form::label('beout2', 'ไม่ได้') !!}
                    </label>
                </div>
            </div>
            <div class="col-md-7">
                <div class="form-group">
                    {!! Form::label('beout_detail', 'อื่น ๆ ') !!}
                    {!! Form::text('beout_detail',null, array('class' => 'form-control')) !!}
                </div>

            </div>              
        </div>

        <div class="row">               
            <div class="col-md-2">
                <div class="form-group"> 
                    {!! Form::label(null, 'เคยสมัครงานกับบริษัทมาก่อน') !!}
                </div>
            </div>
            <div class="col-md-3">
                <div class="form-group">
                    <label class="checkbox-inline">
                        {!! Form::radio('exemployee', 1,null,array('class' => 'form-control','id'=>'exemployee1')) !!} {!! Form::label('exemployee1', 'เคย') !!}
                    </label>
                    <label class="checkbox-inline">
                        {!! Form::radio('exemployee', 0,null,array('class' => 'form-control','id'=>'exemployee2')) !!} {!! Form::label('exemployee2', 'ไม่เคย') !!}
                    </label>
                </div>
            </div>
            <div class="col-md-7">
                <div class="form-group">
                    {!! Form::label('exemployee_period', 'เมื่อไหร่') !!}
                    {!! Form::text('exemployee_period',null, array('class' => 'form-control')) !!}
                </div>

            </div>              
        </div>
    </div>
</div>
<!-- part 6  -->
<div class="panel panel-green" id="ref-person-data">
    <div class="panel-heading">
        ส่วนที่ 6 บุคคลอ้างอิง   
    </div>
    <div class="panel-body">
        <div class="row">               
            <div class="col-md-2">
                <div class="form-group"> 
                    {!! Form::label(null, 'บุคคลอ้างอิง') !!}
                </div>
            </div>
            <div class="col-md-2">
                <div class="form-group">
                    <label class="checkbox-inline">
                        {!! Form::radio('ref_people', 1,null,array('class' => 'form-control','id'=>'ref_people1')) !!} {!! Form::label('ref_people1', 'มี') !!}
                    </label>
                    <label class="checkbox-inline">
                        {!! Form::radio('ref_people', 0,null,array('class' => 'form-control','id'=>'ref_people1')) !!} {!! Form::label('ref_people2', 'ไม่มี') !!}
                    </label>
                </div>
            </div>
            <div class="col-md-8">
                <p>บุคคลรู้จักที่ทำงานอยู่ที่ บริษัท พี โอ ออยล์ จำกัด</p>
            </div>                              
        </div>

        <div class="row">
            <div class="col-md-12">
                <div class="form-group">
                    1.
                    {!! Form::label('ref_people1', 'ชื่อ') !!}
                    {!! Form::text('ref_people1',null, array('class' => 'form-control')) !!}

                </div>		
                <div class="form-group">						
                    {!! Form::label('ref_people1_status', 'เกี่ยวข้องเป็น') !!}
                    {!! Form::text('ref_people1_status',null, array('class' => 'form-control')) !!}
                    
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="form-group">
                    2.
                    {!! Form::label('ref_people2', 'ชื่อ') !!}
                    {!! Form::text('ref_people2',null, array('class' => 'form-control')) !!}

                </div>		
                <div class="form-group">						
                    {!! Form::label('ref_people2_status', 'เกี่ยวข้องเป็น') !!}
                    {!! Form::text('ref_people2_status',null, array('class' => 'form-control')) !!}
                    
                </div>	
            </div>
        </div>

        <div class="row">

            <div class="col-md-3">
                <div class="form-group"> 
                    {!! Form::label(null, 'สามารถเข้ามาทำงานตั้งแต่วันที่') !!}
                </div>
            </div>
            <div class="col-md-9">
                <div class="form-group">
                    <div class='input-group date calendar' id='dtstartdate-emp'>
                        {!! Form::text('start_work_date',null, array('class' => 'form-control')) !!}
                        <span class="input-group-addon">
                            <span class="glyphicon glyphicon-calendar"></span>
                        </span>
                    </div>

                </div>
            </div>

        </div>
        <div class="row">
            <div class="col-md-5">

                <strong>หากข้าพเจ้าไม่ปฏิบัติตามเงื่อนไข ขอบริจาคเงินให้กับ</strong>

            </div>
            <div class="col-md-7">
                <div class="form-group">
                    <label class="checkbox-inline">
                        {!! Form::radio('donate', 'วัด',null,array('class' => 'form-control','id'=>'donate1')) !!} {!! Form::label('donate1', 'วัด') !!}
                    </label>
                    <label class="checkbox-inline">
                        {!! Form::radio('donate', 'โรงเรียน',null,array('class' => 'form-control','id'=>'donate2')) !!} {!! Form::label('donate2', 'โรงเรียน') !!}
                    </label>
                    <label class="checkbox-inline">
                        {!! Form::radio('donate', 'สถานสงเคราะห์เด็ก',null,array('class' => 'form-control','id'=>'donate3')) !!} {!! Form::label('donate3', 'สถานสงเคราะห์เด็ก') !!}
                    </label>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-3">
                <div class="form-group"> 
                    {!! Form::label(null, 'วันที่สมัคร') !!}
                </div>
            </div>
            <div class="col-md-9">
              <div class="form-group">
                    <div class='input-group date calendar' id='dtapply'>
                        {!! Form::text('apply_date',null, array('class' => 'form-control')) !!}
                        <span class="input-group-addon">
                            <span class="glyphicon glyphicon-calendar"></span>
                        </span>
                    </div>

                </div>  
            </div>
                
            
        </div>
    </div>
</div>
<!-- เอกสารประกอบการสมัคร -->
<div class="panel panel-green" id="doc-data">
    <div class="panel-heading">
        เอกสารประกอบการสมัครงาน
    </div>
    <div class="panel-body">
        <div class="row">
            <div class="col-md-12">
                <label for="file_citizen">1. สำเนาบัตรประชาชน</label> 
                @if ($mode == 'edit')
                <a href="{!! $upload_jobapp_files.$jobapp->file_citizen !!}">Download</a>
                @endif
                {!! Form::file('file_citizen',null,array('class'=>'form-control')) !!}
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <label for="file_home">2. สำเนาทะเบียนบ้าน</label>
                @if ($mode == 'edit')
                <a href="{!! $upload_jobapp_files.$jobapp->file_home !!}">Download</a>
                @endif
                {!! Form::file('file_home',null,array('class'=>'form-control')) !!}
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <label for="file_education">3. สำเนาวุฒิการศึกษา</label>
                @if ($mode == 'edit')
                <a href="{!! $upload_jobapp_files.$jobapp->file_education !!}">Download</a>
                @endif
                {!! Form::file('file_education',null,array('class'=>'form-control')) !!}
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <label for="file_pic">4. รูปถ่าย 1 นิ้ว</label>
                @if ($mode == 'edit')
                <a href="{!! $upload_jobapp_files.$jobapp->file_pic !!}">Download</a>
                @endif
                {!! Form::file('file_pic',null,array('class'=>'form-control')) !!}
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <label for="file_driving4">5. ใบขับขี่ประเภท 4  (กรณีสมัครขับรถน้ำมัน/ก๊าซ)</label>
                @if ($mode == 'edit')
                <a href="{!! $upload_jobapp_files.$jobapp->file_driving4 !!}">Download</a>
                @endif
                {!! Form::file('file_driving4',null,array('class'=>'form-control')) !!}
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <label for="file_gaspump">6. บัตรพนักงานบรรจก๊าซ (กรณีสมัครขับรถก๊าซ)</label>
                @if ($mode == 'edit')
                <a href="{!! $upload_jobapp_files.$jobapp->file_gaspump !!}">Download</a>
                @endif
                {!! Form::file('file_gaspump',null,array('class'=>'form-control')) !!}
            </div>
        </div>
    </div>
</div>
