<?php

namespace App\Http\Livewire\Admin;

use App\Models\User;
use Livewire\Component;

class UserIndex extends Component
{
    public function render()
    {

        $usuarios = User::all();

        return view('livewire.admin.user-index', compact('usuarios') );
    }
}
