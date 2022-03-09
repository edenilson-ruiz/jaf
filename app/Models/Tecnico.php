<?php 

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tecnico extends Model
{
	use HasFactory;
	
    public $timestamps = true;

    protected $table = 'tecnicos';

    protected $fillable = ['nombres','apellidos','institucion'];
	
}
