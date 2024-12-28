<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class HeaderContentDashboard extends Component
{
    public $head;

    public function __construct($head)
    {
        $this->head = $head;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.header-content-dashboard');
    }
}
