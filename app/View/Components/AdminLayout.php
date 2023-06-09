<?php

namespace App\View\Components;

use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Foundation\Application;

class AdminLayout extends DashLayout
{
    /**
     * Get the view / contents that represents the component.
     */
    public function render(): \Illuminate\Contracts\Foundation\Application|Factory|View|Application
    {
        $this->title = 'Admin Dashboard';
        return view('layouts.admin')
            ->with([
                'title' => $this->title,
                'header' => $this->header,
                'subhead' => $this->subheader,
                'description' => $this->description,
            ]);
    }
}
