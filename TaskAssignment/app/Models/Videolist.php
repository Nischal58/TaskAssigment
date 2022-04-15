<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Videolist extends Model
{
    protected $table='videolists';

    protected $primaryKey='id';
    protected $fillable=['name','link'];
    public function videos(){
        return $this->belongsTo(Videos::class);

    }


}
