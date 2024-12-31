<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class SidebarOnRole extends Component
{
    public $role;
    public $links;
    public $images;

    public function __construct($role, $links, $images)
    {
        $this->role = $role;
        $this->links = $links;
        $this->images = $images;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.sidebar-on-role');
    }
}
