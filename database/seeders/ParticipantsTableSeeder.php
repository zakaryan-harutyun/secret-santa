<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Participant;
use Faker\Factory as Faker;

class ParticipantsTableSeeder extends Seeder
{
    public function run()
    {
        $faker = Faker::create();
        $participants = [];

        for ($i = 0; $i < 10; $i++) {
            $participants[] = Participant::create(['name' => $faker->unique()->name]);
        }

        foreach ($participants as $participant) {
            do {
                $santa = $participants[array_rand($participants)];
            } while ($santa->id === $participant->id || $santa->santa_id);

            $participant->santa_id = $santa->id;
            $santa->ward_id = $participant->id;

            $participant->save();
            $santa->save();
        }
    }
}

