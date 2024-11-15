<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class carduser extends Component
{
    public $barangs;

    public function __construct($barangs)
    {
        $this->barangs = $barangs;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.carduser');
    }
}
