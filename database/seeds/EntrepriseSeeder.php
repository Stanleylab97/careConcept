<?php

use App\User;
use App\Entreprise;
use Illuminate\Database\Seeder;

class EntrepriseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Entreprise::truncate();

        $user1=User::find(1);
        $user2=User::find(2);

        $user1->entreprises()->save(factory(Entreprise::class)->make());
        $user2->entreprises()->save(factory(Entreprise::class)->make());
        $user1->entreprises()->save(factory(Entreprise::class)->make());
        $user1->entreprises()->save(factory(Entreprise::class)->make());
        $user2->entreprises()->save(factory(Entreprise::class)->make());
        $user1->entreprises()->save(factory(Entreprise::class)->make());

    }
}
