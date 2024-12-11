<?php

namespace App\Http\Controllers;

use App\Models\Receivehook as ModelsReceivehook;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Receivehook extends Controller
{
    public function receivehook(Request $request)
    {
        $jobs = ModelsReceivehook::get();
        ds(' dados controller', $jobs);
  //      return view('receivehook', ['jobs' => $jobs]);
        return view('livewire.receivehook')
            ->with('jobs', $jobs);
    }
}
