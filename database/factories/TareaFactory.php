<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Tarea>
 */
class TareaFactory extends Factory
{
    /**
     *         Schema::create('tareas', function (Blueprint $table) {
      *      $table->id();
      *      $table->string('nombre');
      *      $table->text('descripción')->nullable();
      *      $table->enum('estado', ['Pendiente', 'Completada'])->default('Pendiente');
      *     $table->string('imagen')->nullable();
      *      $table->date('fecha_limite')->nullable();
      *      $table->timestamps();
      *  });
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nombre' => $this->faker->name,
            'descripción' => $this->faker->text,
            'estado' => $this->faker->randomElement(['Pendiente', 'Completada']),
            'imagen' => $this->faker->word,
            'fecha_limite' => $this->faker->date(),
        ];
    }
}
