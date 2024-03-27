<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\LevelModel;

class LevelController extends Controller
{

    public function tambah()
    {
        // Mendapatkan nilai id lanjutan dari model
        $nextLevelId = LevelModel::getLastLevelId();

        // Mengirimkan nilai id lanjutan ke view
        return view('level.level_tambah', compact('nextLevelId'));
    }
}

