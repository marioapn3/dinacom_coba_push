<?php

namespace App\View\Components;

use Illuminate\View\Component;
use App\Models\DeadlinePendaftaran;

class Auth extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    { $dateDaftar = DeadlinePendaftaran::find(1);
        $tgl = now()->isBefore($dateDaftar->deadline_register_event);
        return view('components.auth',['tgl'=>$tgl]);
    }
}
