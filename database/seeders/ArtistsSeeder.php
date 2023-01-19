<?php

namespace Database\Seeders;

use App\Models\Artists;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ArtistsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $array_artists = config('paintings.artists');

        foreach($array_artists as $artist){
            $new_artist = new Artists();
            $new_artist->name = $artist['name'];
            $new_artist->slug = Artists::generateSlug($new_artist->name);
            $new_artist->save();
        }
    }
}
