<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Radio;
use App\Models\Podcast;
use App\Models\Berita;

class SearchController extends Controller
{
    public function search(Request $request)
    {
        $query = $request->input('q');

        $radioResults = Radio::where('name', 'LIKE', "%{$query}%")->get();
        $podcastResults = Podcast::where('name', 'LIKE', "%{$query}%")->get();
        $beritaResults = Berita::where('judul', 'LIKE', "%{$query}%")->get();

        $results = [];

        foreach ($radioResults as $radio) {
            $results[] = [
                'title' => $radio->name,
                'url' => '/radio'
            ];
        }

        foreach ($podcastResults as $podcast) {
            $results[] = [
                'title' => $podcast->name,
                'url' => '/podcast'
            ];
        }

        foreach ($beritaResults as $berita) {
            $results[] = [
                'title' => $berita->judul,
                'url' => route('berita.show', $berita->id)
            ];
        }

        return response()->json($results);
    }
}
