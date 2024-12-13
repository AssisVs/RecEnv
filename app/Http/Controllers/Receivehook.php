<?php

namespace App\Http\Controllers;

use App\Models\Receivehook as ModelsReceivehook;
use App\Models\Url;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Receivehook extends Controller
{
    public function store(Request $request)
    {
        $urls = Url::get();
        $jobs = ModelsReceivehook::get();
        ds(' dados controller', $urls);

        return view('livewire.receivehook')
            ->with('urls', $urls)
            ->with('jobs', $jobs);
    }
}
