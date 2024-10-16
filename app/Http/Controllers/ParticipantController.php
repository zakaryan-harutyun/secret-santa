<?php

namespace App\Http\Controllers;

use App\Models\Participant;
use Illuminate\Http\Request;

class ParticipantController extends Controller
{
    public function show($id)
    {
        $participant = Participant::with('ward')->findOrFail($id);
        return response()->json($participant);
    }
}
