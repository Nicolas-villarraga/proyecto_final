<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Quality extends Model
{
    use HasFactory;
    protected $table ='qualities';
    protected $primarykey='id';


    protected $fillable = [
        'formatname',
        'date',
        'campus',
    ];
}
