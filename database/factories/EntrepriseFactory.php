<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Entreprise;
use Faker\Generator as Faker;

$factory->define(Entreprise::class, function (Faker $faker) {
    return [
       'libelle'=>$faker->company,
       'description'=>$faker->paragraph($nbSentences = 3, $variableNbSentences = true),
       'slogan'=>$faker->sentence($nbWords = 4, $variableNbWords = true),
       'tel'=>$faker->e164PhoneNumber,
       'email'=>$faker->companyEmail,
       'site'=>$faker->url
    ];
});
