<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Song;
use App\Models\Singer;
class SongController extends Controller
{
    public function add_song()
    {
        $song = new Song();
        $song->title = 'Rupali Gitter';
        $song->save();
    }

    //get song based on Singer Id
    public function show_song($id)
    {
        $song = Singer::find($id)->songs;
        return $song;
    }

}
