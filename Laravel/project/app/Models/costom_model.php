<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class costom_model extends Model
{
    // if we not follow orm rules then add all custome conficuration in model file
    public $table="custom";   
    public $primarykey="cust_id"; 

    public $timestamps=false; 

    use HasFactory;
}
