<?php

namespace Database\Factories;

use App\Models\Contact;
use Faker\Generator as Faker;

$factory->define(Contact::class, function (Faker $faker) {
    
    
return [
        
        
        'last_name' => $faker->lastName,
        'first_name' => $faker->firstName,
        
    ];
});