<?php

namespace Database\Seeders;

use App\Models\Museums;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use PSpell\Config;

class MuseumsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $array_Museums = Config('paintings.museums');
        // dd($array_Museums);

        foreach($array_Museums as $Museum_item){
            
            $new_Museums = new Museums();
            $new_Museums->name = $Museum_item['name'];
            $new_Museums->slug = Museums::generateSlug($new_Museums->name);
            $new_Museums->nation = $Museum_item['nation'];
            $new_Museums->save();
        }
    }
}
