<?php
// Person.php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Person extends Model
{
    use HasFactory;

    protected $table = 'personas';

    protected $fillable = [
        'nombre_persona', 
        'apellido_persona', 
        'documento_persona', 
        'telefono_persona', 
        'correo_persona', 
        'tipo_documento', 
        'nacionalidad', 
        'tipo_persona',
    ]; 

    // public function users()
    // {
    //     return $this->hasMany(User::class);
    // }
}



