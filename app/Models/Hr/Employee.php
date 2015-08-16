<?php

namespace App\Models\Hr;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model {

    protected $table = 'po_emp';
    protected $guarded = [''];
    public $primaryKey = 'emp_id';

}
