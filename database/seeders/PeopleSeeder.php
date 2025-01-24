<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Person;
class PeopleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        $ramesh = Person::create(['name' => 'Ramesh']);
        $deepu = Person::create(['name' => 'Deepu']);
        $prem = Person::create(['name' => 'Prem Chopra']);

        $gaurav = Person::create(['name' => 'Gaurav', 'parent_id' => $ramesh->id]);
        $shalu = Person::create(['name' => 'Shalu', 'parent_id' => $ramesh->id]);

        $amit = Person::create(['name' => 'Amit', 'parent_id' => $deepu->id]);
        $sham_lal = Person::create(['name' => 'Sham Lal', 'parent_id' => $amit->id]);
        $kapil = Person::create(['name' => 'Kapil', 'parent_id' => $deepu->id]);
    }
}
