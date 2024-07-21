<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

    /**
     *  Schema::create('tareas', function (Blueprint $table) {
      *     $table->id();
      *     $table->string('nombre');
      *     $table->text('descripción')->nullable();
      *     $table->enum('estado', ['Pendiente', 'Completada'])->default('Pendiente');
      *     $table->string('imagen')->nullable();
      *     $table->date('fecha_limite')->nullable();
      *     $table->timestamps();
      * });
     * Define the model's default state.
     **/

class Tarea extends Model
{
    use HasFactory;

    protected $table = 'tareas';

    protected $fillable = [
        'nombre',
        'descripcion',
        'estado',
        'imagen',
        'fecha_limite',
    ];
}
