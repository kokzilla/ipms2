<!-- part 1  -->

<script type="text/javascript">
    $(document).ready(function() {
$('#sameAddress').click(function () {
       if (this.checked) {
        $('#address2').val($('#address1').val());
        $('#province_id2').val($('#province_id').val());
        $('#tel2').val($('#tel1').val());
    }
});
    });
</script>

<div class="panel panel-green" id="personal-data">
    <div class="panel-heading">
        ส่วนที่ 1  ข้อมูลส่วนตัว
    </div>
    <div class="panel-body">
        <div class ="row">
            <div class="col-md-9">
                <div class="row">
                    <div class="col-md-2">
                        {!! Form::label('job_app_no', 'เลขที่เอกสาร') !!}
                    </div>
                    <div class="col-md-10">
                        <div class="form-group">

                            {!! Form::text('job_app_no',null, array('class' => 'form-control','disabled')) !!}
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-2">
                        {!! Form::label('pos_id', 'ตำแหน่ง') !!}
                    </div>
                    <div class="col-md-10">
                        <div class="form-group">

                            {!! Form::select('pos_id', $positions, null,array('required','class' => 'form-control')) !!}
                        </div>
                        <div class="form-group">
                            {!! Form::label('salary', 'เงินเดือนที่ต้องการ') !!}
                            {!! Form::text('salary',null, array('class' => 'form-control','data-validation'=>'number')) !!}
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-2">
                        <div class="form-group">
                            <!-- {!! Form::select(null, array('นาย'=>'นาย','นาง'=>'นาง','นางสาว'=>'นางสาว','อื่น ๆ'=>'อื่น ๆ'),'นาย', array('class' => 'form-control')) !!}-->
                            {!! Form::select('prefix', $prefix, null,array('required','class' => 'form-control')) !!}
                        </div>
                    </div>
                    <div class="col-md-10">
                        <div class="form-group">

                            {!! Form::text('first_name',null, array('required','class' => 'form-control','placeholder'=>'ชื่อจริง')) !!}
                            {!! Form::text('last_name',null, array('required','class' => 'form-control','placeholder'=>'นามสกุล')) !!}
                            {!! Form::label('nick_name', 'ชื่อเล่น') !!}
                            {!! Form::text('nick_name',null, array('class' => 'form-control','size' =>'5','maxlength'=>'10')) !!}
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <img src="/uploadfiles/jobapp/images/{{ $personalImagefile }}" class="img-responsive" alt="Responsive image" width="50%" height="50%">
                <div class="form-group">
                    {!! Form::file('pic',null,array('class'=>'form-control')) !!}
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-2">
                {!! Form::label('date_of_birth', 'วันเกิด') !!}
            </div>

            <div class="col-md-10">
                <div class="form-group">
                    <div class='input-group date calendar' id='dtbirthdate'>
                        {!! Form::text('date_of_birth',null, array('class' => 'form-control')) !!}
                        <span class="input-group-addon">
                            <span class="glyphicon glyphicon-calendar"></span>
                        </span>
                    </div>
                </div>
                <div class="form-group">
                    {!! Form::label('race', 'เชื้อชาติ') !!}
                    {!! Form::select('race', $race,null, array('class' => 'form-control')) !!}
                </div>
                <div class="form-group">
                    {!! Form::label('nation', 'สัญชาติ') !!}
                    {!! Form::select('nation', $nation,null, array('class' => 'form-control')) !!}
                </div>
                <div class="form-group">
                    {!! Form::label('religion', 'ศาสนา') !!}
                    {!! Form::select('religion',$religion, null, array('class' => 'form-control')) !!}
                </div>
            </div>
        </div>


        <div class="row">
            <div class="col-md-2">
                {!! Form::label('citizen_id', 'บัตรประชาชน') !!}
            </div>
            <div class="col-md-10">
                <div class="form-group">
                    {!! Form::text('citizen_id',null, array('class' => 'form-control' ,'maxlength'=>'13' ,'placeholder' => 'เลขที่บัตร','data-validation' =>'length alphanumeric','data-validation-length'=>'13')) !!}

                </div>
                <div class="form-group">

                    <div class='input-group date calendar' id='dtidexiry'>

                        {!! Form::text('expiry_date',null, array('class' => 'form-control','placeholder' => 'บัตรหมดอายุ')) !!}
                        <span class="input-group-addon">
                            <span class="glyphicon glyphicon-calendar"></span>
                        </span>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-2">
                {!! Form::label('address1', 'ที่อยู่ตามบัตร ฯ') !!}
            </div>
            <div class="col-md-10">
                <div class="form-group">

                    {!! Form::text('address1',null, array('class' => 'form-control fulladdress')) !!}
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-2">
                {!! Form::label('province_id', 'จังหวัด') !!}
            </div>
            <div class="col-md-10">
                <div class="form-group">

                    {!! Form::select('province_id',$province, null, array('class' => 'form-control')) !!}
                </div>
                <div class="form-group">
                    {!! Form::label('tel1', 'โทรศัพท์') !!}
                    {!! Form::text('tel1',null, array('class' => 'form-control')) !!}
                </div>
            </div>
        </div>
        <div class="row">

            <div class="col-md-12">
                <div class="form-group">

                    {!! Form::checkbox('sameAddress','1',false,array('class' => 'form-control','id'=>'sameAddress')) !!}
                    {!! Form::label('sameAddress', 'ที่อยู่ปัจจุบันตรงกับที่อยู่ในบัตรประชาชน') !!}
                    <div id="txtAge" style="display:none">Age is something</div>​

                </div>

            </div>
        </div>
        <div class="row">
            <div class="col-md-2">
                {!! Form::label('address2', 'ที่อยู่ปัจจุบัน') !!}
            </div>
            <div class="col-md-10">
                <div class="form-group">

                    {!! Form::text('address2',null, array('class' => 'form-control fulladdress')) !!}
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-2">
                {!! Form::label('province_id2', 'จังหวัด') !!}
            </div>
            <div class="col-md-10">
                <div class="form-group">

                    {!! Form::select('province_id2',$province, null, array('class' => 'form-control')) !!}
                </div>
                <div class="form-group">
                    {!! Form::label('tel2', 'โทรศัพท์') !!}
                    {!! Form::text('tel2',null, array('class' => 'form-control')) !!}
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-2">
                {!! Form::label('', 'เพศ') !!}
            </div>

            <div class="col-md-10">
                <div class="form-group">

                </div>

            </div>
        </div>
        <div class="row">
            <div class="col-md-2">
                {!! Form::label('marriage_status', 'สถานภาพ') !!}
            </div>
            <div class="col-md-10">
                <div class="form-group">
                    {!! Form::select('marriage_status', $marriages,null, array('class' => 'form-control')) !!}
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-2">
                {!! Form::label('spouse_name', 'ชื่อสามี-ภรรยา') !!}
            </div>
            <div class="col-md-10">
                <div class="form-group">

                    {!! Form::text('spouse_name',null, array('class' => 'form-control fullname')) !!}
                </div>
                <div class="form-group">
                    {!! Form::label('spouse_age', 'อายุ') !!}
                    {!! Form::text('spouse_age',null, array('class' => 'form-control age')) !!}
                </div>
                <div class="form-group">
                    {!! Form::label('spouse_race', 'เชื้อชาติ') !!}
                    {!! Form::select('spouse_race', $race,null, array('class' => 'form-control')) !!}

                </div>
                <div class="form-group">
                    {!! Form::label('spouse_nation', 'สัญชาติ') !!}
                    {!! Form::select('spouse_nation', $nation,null, array('class' => 'form-control')) !!}
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-2">
                {!! Form::label('spouse_job', 'อาชีพ') !!}
            </div>
            <div class="col-md-10">
                <div class="form-group">

                    {!! Form::text('spouse_job',null, array('class' => 'form-control')) !!}
                </div>
                <div class="form-group">
                    {!! Form::label('spouse_workplace', 'ที่ทำงาน') !!}
                    {!! Form::text('spouse_workplace',null, array('class' => 'form-control')) !!}
                </div>
                <div class="form-group">
                    {!! Form::label('spouse_tel', 'โทร') !!}
                    {!! Form::text('spouse_tel',null, array('class' => 'form-control')) !!}
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-2">
                {!! Form::label('child_tot', 'จำนวนบุตร') !!}
            </div>
            <div class="col-md-10">
                <div class="form-group">

                    {!! Form::text('child_tot',null, array('class' => 'form-control num')) !!}
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-2">

            </div>
            <div class="col-md-10">
                <div class="form-group">
                    1. {!! Form::label('childname1', 'ชื่อ') !!}
                    {!! Form::text('childname1',null, array('class' => 'form-control fullname')) !!}
                </div>
                <div class="form-group">
                    {!! Form::label('childage1', 'อายุ') !!}
                    {!! Form::text('childage1',null, array('class' => 'form-control age')) !!}
                    ปี
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-2">

            </div>
            <div class="col-md-10">
                <div class="form-group">
                    2. {!! Form::label('childname2', 'ชื่อ') !!}
                    {!! Form::text('childname2',null, array('class' => 'form-control fullname')) !!}

                </div>
                <div class="form-group">
                    {!! Form::label('childage2', 'อายุ') !!}
                    {!! Form::text('childage2',null, array('class' => 'form-control age')) !!}
                    ปี
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-2">

            </div>
            <div class="col-md-10">
                <div class="form-group">
                    3. {!! Form::label('childname3', 'ชื่อ') !!}
                    {!! Form::text('childname3',null, array('class' => 'form-control fullname')) !!}

                </div>
                <div class="form-group">
                    {!! Form::label('childage3', 'อายุ') !!}
                    {!! Form::text('childage3',null, array('class' => 'form-control age')) !!}
                    ปี
                </div>
            </div>
        </div>


    </div>
</div>
<!-- part 2  -->
<div class="panel panel-green" id="family-data">
    <div class="panel-heading">

        ส่วนที่ 2 ข้อมูลครอบครัว

    </div>
    <div class="panel-body">
        <div class="row">
            <div class="col-md-2">
                {!! Form::label('father_name', 'ชื่อบิดา') !!}
            </div>
            <div class="col-md-10">
                <div class="form-group">

                    {!! Form::text('father_name',null, array('class' => 'form-control fullname')) !!}
                </div>
                <div class="form-group">
                    {!! Form::label('father_age', 'อายุ') !!}
                    {!! Form::text('father_age',null, array('class' => 'form-control age')) !!}
                </div>
                <div class="form-group">
                    {!! Form::label('father_job', 'อาชีพ') !!}
                    {!! Form::text('father_job',null, array('class' => 'form-control')) !!}
                </div>
                <div class="form-group">
                    {!! Form::label('father_race', 'เชื้อชาติ') !!}
                    {!! Form::select('father_race', $race,null, array('class' => 'form-control')) !!}
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-2">
                {!! Form::label('father_nation', 'สัญชาติ') !!}
            </div>
            <div class="col-md-10">
                <div class="form-group">
                    {!! Form::select('father_nation', $race,null, array('class' => 'form-control')) !!}
                </div>
                <div class="form-group">
                    {!! Form::label('father_tel', 'โทรศัพท์') !!}
                    {!! Form::text('father_tel',null, array('class' => 'form-control')) !!}
                </div>
                <div class="form-group">
                    <label class="checkbox-inline">
                        {!! Form::radio('father_alive', 1,null,array('class' => 'form-control','id'=>'father_alive1')) !!} {!! Form::label('father_alive1', 'ยังมีชีวิตอยู่') !!}
                    </label>
                    <label class="checkbox-inline">
                        {!! Form::radio('father_alive', 0,null,array('class' => 'form-control','id'=>'father_alive2')) !!} {!! Form::label('father_alive2', 'เสียชีวิตแล้ว') !!}
                    </label>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-2">
                {!! Form::label('mother_name', 'ชื่อมารดา') !!}
            </div>
            <div class="col-md-10">
                <div class="form-group">

                    {!! Form::text('mother_name',null, array('class' => 'form-control fullname')) !!}
                </div>
                <div class="form-group">
                    {!! Form::label('mother_age', 'อายุ') !!}
                    {!! Form::text('mother_age',null, array('class' => 'form-control age')) !!}
                </div>
                <div class="form-group">
                    {!! Form::label('mother_job', 'อาชีพ') !!}
                    {!! Form::text('mother_job',null, array('class' => 'form-control')) !!}
                </div>
                <div class="form-group">
                    {!! Form::label('mother_race', 'เชื้อชาติ') !!}
                    {!! Form::select('mother_race', $nation,null, array('class' => 'form-control')) !!}
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-2">
                {!! Form::label('mother_nation', 'สัญชาติ') !!}
            </div>
            <div class="col-md-10">
                <div class="form-group">
                    {!! Form::select('mother_nation', $nation,null, array('class' => 'form-control')) !!}
                </div>
                <div class="form-group">
                    {!! Form::label('mother_tel', 'โทรศัพท์') !!}
                    {!! Form::text('mother_tel',null, array('class' => 'form-control')) !!}
                </div>
                <div class="form-group">
                    <label class="checkbox-inline">
                        {!! Form::radio('mother_alive', 1,null,array('class' => 'form-control','id'=>'father_alive1')) !!} {!! Form::label('father_alive1', 'ยังมีชีวิตอยู่') !!}
                    </label>
                    <label class="checkbox-inline">
                        {!! Form::radio('mother_alive', 0,null,array('class' => 'form-control','id'=>'father_alive2')) !!} {!! Form::label('father_alive2', 'เสียชีวิตแล้ว') !!}
                    </label>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-2">
                {!! Form::label('dependents_tot', 'มีพี่น้อง') !!}
            </div>
            <div class="col-md-10">
                <div class="form-group">

                    {!! Form::text('dependents_tot',null, array('class' => 'form-control num')) !!}
                </div>
                <div class="form-group">
                    {!! Form::label('dep_male', 'ชาย') !!}
                    {!! Form::text('dep_male',null, array('class' => 'form-control num')) !!}
                </div>
                <div class="form-group">
                    {!! Form::label('dep_female', 'หญิง') !!}
                    {!! Form::text('dep_female',null, array('class' => 'form-control num')) !!}
                </div>
                <div class="form-group">
                    {!! Form::label('dependents_no', 'เป็นบุตรคนที่') !!}
                    {!! Form::text('dependents_no',null, array('class' => 'form-control num')) !!}
                </div>
            </div>
        </div>
    </div>
</div>
<!-- part 3-->
<div class="panel panel-green" id="edu-data">
    <div class="panel-heading">

        ส่วนที่ 3  การศึกษา

    </div>
    <div class="panel-body">
        <div class="row">
            <div class="col-md-2">
                {!! Form::label('education', 'วุฒิการศึกษาจบชั้น') !!}
            </div>
            <div class="col-md-10">
                <div class="form-group">

                    {!! Form::select('edu_id', $education,null, array('class' => 'form-control')) !!}
                </div>
                <div class="form-group">
                    {!! Form::label('subject', 'สาขาวิชา') !!}
                    {!! Form::text('subject',null, array('class' => 'form-control')) !!}
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-2">
                {!! Form::label('graduated_from', 'จบสถานศึกษา') !!}
            </div>
            <div class="col-md-10">
                <div class="form-group">

                    {!! Form::text('graduated_from',null, array('class' => 'form-control')) !!}
                </div>
                <div class="form-group">
                    {!! Form::label('graduated_year', 'เมื่อปี พ.ศ.') !!}
                    {!! Form::text('graduated_year',null, array('class' => 'form-control')) !!}
                </div>
            </div>
        </div>
    </div>
</div>
