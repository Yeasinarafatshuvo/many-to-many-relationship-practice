<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Song;
use App\Models\Singer;
class SingerController extends Controller
{
    public function add_singer()
    {
        $singer = new Singer();
        $singer->name = 'LRB2';
        $singer->save();

        $songsId = [6];
        $singer->songs()->attach($songsId);

    }

    //get singer based on Song Id
    public function show_singer($id)
    {
        $singer = Song::find($id)->singers;
        return $singer;
    }


}
