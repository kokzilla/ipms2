<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Input;
use Redirect;
use App\Models\Hr\Jobapp;
use App\Models\Hr\Position;
use App\Models\Hr\Marriage;
use App\Models\Hr\Province;
use App\Models\Hr\Education;
use App\Models\Hr\Department;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Jenssegers\Date\Date;
use App\Utils\JobappUtil;
use Knp\Snapp\Pdf;
use Symfony\Component\HttpFoundation\File\UploadedFile;

//use PDF; //use for tcpdf//

class JobappsController extends Controller {

    /**
     * Server side validate
     */
    protected $rules = [
        'first_name' => ['required'],
        'salary' => ['required'],
    ];
    private $file_suffix_citizen = '_citizen_';
    private $file_suffix_home = '_home_';
    private $file_suffix_education = '_education_';
    private $file_suffix_pic = '_pic_';
    private $file_suffix_driving4 = '_driving4_';
    private $file_suffix_gasemp = '_gasemp_';
    private $upload_dir_imgages = '/uploadfiles/jobapp/images/';
    private $upload_dir_files = '/uploadfiles/jobapp/files/';
    private $default_personal_file = 'noimage.png';
    private $prefix;
    private $race;
    private $nation;
    private $religion;
    private $positions;
    private $province;
    private $marriages;
    private $education;
    private $department;

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index() {
        Date::setLocale('th');

        $jobapps = Jobapp::all();
        return view('hr.jobapps.index', compact('jobapps'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create() {

        $prefix = JobappUtil::prefixList();
        $race = JobappUtil::raceList();
        $nation = JobappUtil::nationList();
        $religion = JobappUtil::religionList();
        $positions = Position::lists('detail', 'pos_id');
        $province = Province::lists('province_name', 'province_id');
        $marriages = Marriage::lists('status_name', 'status_id');
        $education = Education::lists('detail', 'edu_id');
        $department = Department::lists('detail', 'dept_id');

        //-- default personal file 
        $personalImagefile = $this->default_personal_file;
        
        return view('hr.jobapps.create', compact('positions', 'marriages', 'prefix', 'race', 'nation', 'religion', 'province', 'education', 'department', 'personalImagefile'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  Request  $request
     * @return Response
     */
    public function store(Request $request, Jobapp $jobapp) {
        $this->validate($request, $this->rules);

        // -- file upload operation
        $this->fileUpload($request, $jobapp);
        /*
          $input = Input::all();

          Jobapp::create($input);

          return Redirect::route('jobapps.index')->with('message', 'บันทึกข้อมูลการสมัครเรียบร้อย');
         * 
         */
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show() {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit(Jobapp $jobapp) {

        $prefix = JobappUtil::prefixList();
        $race = JobappUtil::raceList();
        $nation = JobappUtil::nationList();
        $religion = JobappUtil::religionList();
        $positions = Position::lists('detail', 'pos_id');
        $province = Province::lists('province_name', 'province_id');
        $marriages = Marriage::lists('status_name', 'status_id');
        $education = Education::lists('detail', 'edu_id');
        $department = Department::lists('detail', 'dept_id');

        //-- recruit image file
        if ($jobapp->pic === null || $jobapp->pic == '') {
            $personalImagefile = $this->default_personal_file;
        } else {
            $personalImagefile = $jobapp->pic;
        }

        // -- defaul_jobapp_upload_path
        $upload_jobapp_files =  '/uploadfiles/jobapp/files/';
        $upload_jobapp_images = '/uploadfiles/jobapp/images/';
        return view('hr.jobapps.edit', compact('jobapp', 'positions', 'marriages', 'prefix', 'race', 'nation', 'religion', 'province', 'education', 'department', 'personalImagefile','upload_jobapp_files','upload_jobapp_images'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  Request  $request
     * @param  int  $id
     * @return Response
     */
    public function update(Jobapp $jobapp, Request $request) {

        // -- _method value 
        $input = array_except(Input::all(), '_method');

        // -- file upload operation
        $this->fileUpload($request, $jobapp);



        $jobapp->update($input);
        return Redirect::route('jobapps.index')->with('message', 'บันทึกข้อมูลการสมัครเรียบร้อย');
        //return $jobapp->file_citizen;
    }

    public function search() {
        return view('hr.jobapps.list');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id) {
        
    }

    /**
     * print pdf.
     *
     * @return Response
     */
    public function pdf(Jobapp $jobapp) {
        /* -- DomPdf
          $view =  \View::make('hr.jobapps.pdf', compact('jobapp'))->render();
          $pdf = \App::make('dompdf.wrapper');
          //$pdf->set_base_path(APPLICATION_PATH."/../public/css/");
          $pdf->loadHTML($view);
          return $pdf->stream();
         */

        // TCPdf
        /*
          $view = \View::make('hr.jobapps.pdf', compact('jobapp'))->render();
          PDF::SetTitle('ทดสอบ');

          PDF::AddPage();
          PDF::SetFont('freeserif', '', 10);
          PDF::writeHTML($view, true, 0, true, 0);
          //PDF::Write(0, '<p style="font-family:courier">Hello World ทดสอบ ที่นี้ </p>');

          //PDF::Output('hello_world.pdf');
         */


        /* -- wkhtmltopdf snappy  , by wraaper */

        //$view =  \View::make('hr.jobapps.pdf', compact('jobapp'))->render();
        //  $pdf = \App::make('snappy.pdf.wrapper');
        //$pdf->loadHTML($view);
        //return $pdf->stream();
        //return \View::make('hr.jobapps.pdf', compact('jobapp'))->render();
        // -- snappy
        $snappy = \App::make('snappy.pdf');
        //$snappy = new Pdf();
        //header('Content-Type: application/pdf');
        //header('Content-Disposition: attachment; filename="file.pdf"');
        //return $snappy->getOutput('http://www.github.com');
        //$snappy->generate('http://www.github.com', '/tmp/github.pdf');
        //$snappy->loadHTML('<h1>Test</h1>');
        $snappy->generateFromHtml('<h1>Bill</h1><p>You owe me money, dude.</p>', '/tmp/bill-123.pdf');
    }

    private function fileUpload(Request $request, Jobapp &$jobapp) {
        // -- if user upload file set file then new file name and upload to project storage
        if ($request->hasFile('pic')) {

            $pic = $request->file('pic');

            //-- change file name
            $jobapp->pic = $jobapp->job_app_id . '.jpg';

            //-- move file to storage
            // -- reserve Input::file('pic')

            $path = base_path() . '/public' . $this->upload_dir_imgages;
            $pic->move($path, $jobapp->pic);
        }

        // -- upload citizen file
        if ($request->hasFile('file_citizen')) {

            //-- move file to storage
            // -- reserve Input::file('pic')
            $file = $request->file('file_citizen');

            //-- change file name
            $jobapp->file_citizen = $jobapp->job_app_id . $this->file_suffix_citizen . '.' . $file->getClientOriginalExtension();

            $path = base_path() . '/public' . $this->upload_dir_files;
            $file->move($path, $jobapp->file_citizen);
        }

        // -- upload file home
        if ($request->hasFile('file_home')) {

            //-- move file to storage
            // -- reserve Input::file('pic')
            $file = $request->file('file_home');

            //-- change file name
            $jobapp->file_home = $jobapp->job_app_id . $this->file_suffix_home . '.' . $file->getClientOriginalExtension();

            $path = base_path() . '/public' . $this->upload_dir_files;
            $file->move($path, $jobapp->file_home);
        }

        // -- upload file education
        if ($request->hasFile('file_education')) {

            //-- move file to storage

            $file = $request->file('file_education');

            //-- change file name
            $jobapp->file_education = $jobapp->job_app_id . $this->file_suffix_education . '.' . $file->getClientOriginalExtension();

            $path = base_path() . '/public' . $this->upload_dir_files;
            $file->move($path, $jobapp->file_education);
        }

        // -- upload file pic
        if ($request->hasFile('file_pic')) {

            //-- move file to storage

            $file = $request->file('file_pic');

            //-- change file name
            $jobapp->file_pic = $jobapp->job_app_id . $this->file_suffix_pic . '.' . $file->getClientOriginalExtension();

            $path = base_path() . '/public' . $this->upload_dir_files;
            $file->move($path, $jobapp->file_pic);
        }

        if ($request->hasFile('file_driving4')) {

            //-- move file to storage

            $file = $request->file('file_driving4');

            //-- change file name
            $jobapp->file_driving4 = $jobapp->job_app_id . $this->file_suffix_driving4 . '.' . $file->getClientOriginalExtension();

            $path = base_path() . '/public' . $this->upload_dir_files;
            $file->move($path, $jobapp->file_driving4);
        }

        // -- upload file pic
        if ($request->hasFile('file_gaspump')) {

            //-- move file to storage

            $file = $request->file('file_gaspump');

            //-- change file name
            $jobapp->file_gaspump = $jobapp->job_app_id . $this->file_suffix_gaspump . '.' . $file->getClientOriginalExtension();

            $path = base_path() . '/public' . $this->upload_dir_files;
            $file->move($path, $jobapp->file_gaspump);
        }
    }

}
