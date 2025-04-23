<?php 

// Define el espacio de nombres del modelo
namespace App\Models;

// Importa la clase base para modelos de Eloquent
use Illuminate\Database\Eloquent\Model;

class Computadora extends Model
{
    protected $table = 'computadora'; // Define la tabla en la base de datos
    protected $primaryKey = 'pk_computadora'; // Especifica la clave primaria
    public $timestamps = false; // Desactiva los timestamps automáticos

    protected $fillable = ['nombre']; // Campos permitidos para asignación masiva
}
