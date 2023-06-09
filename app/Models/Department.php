<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Department extends Model
{
    use HasFactory;
    protected $table = 'departments';
    protected $primarykey = 'id';
    protected $fillable = [
        'name',
        'countries_id',
    ];

    public function countries()
    {
        return $this->belongsTo('App\Models\Country', 'countries_id');
    }
}
