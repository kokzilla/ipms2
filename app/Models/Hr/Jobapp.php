<?php

namespace App\Models\Hr;

use App\Models\Hr\Position;
use Illuminate\Database\Eloquent\Model;

class Jobapp extends Model {

    protected $table = 'po_job_app';
    protected $guarded = ['job_app_no','pic','file_citizen','file_home','file_education','file_pic','file_driving4','file_gasemp'];
    public $primaryKey = 'job_app_id';
    
    public function position(){
         return $this->belongsTo('App\Models\Hr\Position','pos_id','pos_id');
    }
    
    public function marrigaeStatus(){
        return $this->belongsTo('App\Models\Hr\Marriage', 'marriage_status', 'status_id');
    }
    
    public function education(){
         return $this->belongsTo('App\Models\Hr\Education', 'edu_id', 'edu_id');
    }

}
