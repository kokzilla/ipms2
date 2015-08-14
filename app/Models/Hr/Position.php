<?php

namespace App\Models\Hr;

use Illuminate\Database\Eloquent\Model;

class Position extends Model {

    protected $table = 'po_pos';
    protected $guarded = [];
    
    public $primaryKey = 'pos_id';
    
   

}
