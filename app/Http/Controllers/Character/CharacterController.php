<?php

namespace App\Http\Controllers\Character;

use App\Http\Controllers\Controller;
use Inertia\Inertia;

class CharacterController extends Controller
{
    public function index() {
        return Inertia::render("character/Index", [
            'characters' => $this->characterRepository->all()
        ]);
    }

    public function show() {

    }
}
