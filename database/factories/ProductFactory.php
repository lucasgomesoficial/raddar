<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Product;
use Faker\Generator as Faker;

$factory->define(Product::class, function (Faker $faker) {
    return [
        'plan_action' => $faker->plan_action,
        'gere_group' => $faker->gere_group,
        'meta_realizado' => $faker->meta_realizado,
        'indi_comer' => $faker->indi_comer,
        'indi_vd' => $faker->indi_vd,
        'storage_map' => $faker->storage_map,
    ];
});
