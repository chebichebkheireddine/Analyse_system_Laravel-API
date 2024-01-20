<?php

namespace Database\Factories;

use App\Models\Lab;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Analyse>
 */
class AnalyseFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        // // This faker data basses it give in erre
        // $type_analyse = $this->faker->randomElements([
        //     'Hematocrit Test', 
        //     'White Blood Cell Count', 
        //     'Red Blood Cell Count', 
        //     'Platelet Count', 
        //     'Lipid Panel', 
        //     'Coagulation Profile', 
        //     'Blood Glucose Test', 
        //     'Liver Function Tests', 
        //     'Kidney Function Tests', 
        //     'Iron and Total Iron-Binding Capacity', 
        //     'Thyroid Function Tests'
        // ]);
        
        return [
            //
            // 'id_lab'=>Lab::factory(),
            'lab_id'=>Lab::factory(),
            // 'name_analyse'=>$type_analyse,
            'name_analyse' => $this->faker->randomElement([
                'Hematocrit Test', 
                'White Blood Cell Count', 
                'Red Blood Cell Count', 
                'Platelet Count', 
                'Lipid Panel', 
                'Coagulation Profile', 
                'Blood Glucose Test', 
                'Liver Function Tests', 
                'Kidney Function Tests', 
                'Iron and Total Iron-Binding Capacity', 
                'Thyroid Function Tests'
            ]),//This is corect way to run it
            'price'=>$this->faker->numberBetween(10,700),

            

        ];
    }
}
