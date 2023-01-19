<?php

namespace App\Models;

use illuminate\support\str;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Museums extends Model
{
    use HasFactory;

    public static function generateSlug($string){
        $slug = Str::slug($string, '-');
        $original_slug = $slug;
        $c = 1;
        $item_exists = Museums::where('slug',$slug)->first();
        while($item_exists){
            $slug = $original_slug . '-' . $c;
            $item_exists = Museums::where('slug',$slug)->first();
            $c++;
        }
        return $slug;
    }

}
