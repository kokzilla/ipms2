<?php

namespace App\Models\Hr;

use Illuminate\Database\Eloquent\Model;

class Department extends Model {

    protected $table = 'po_dept';
    protected $guarded = [''];
    public $primarykey = 'dept_id';

}
