<?php

namespace App\View\Components;

use Illuminate\View\Component;

class DashboardBreadcrumb extends Component
{
    public $title, $section;
    public function __construct($title, $section)
    {
        $this->title = $title;
        $this->section = $section;
    }


    public function render()
    {
        return view('components.dashboard-breadcrumb');
    }
}
