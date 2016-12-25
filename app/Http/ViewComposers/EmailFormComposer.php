<?php

namespace App\Http\ViewComposers;

use Illuminate\View\View;
use App\Repositories\AdminRepository;

class EmailFormComposer
{

    protected $admin;

    public function __construct(AdminRepository $admins)
    {
        // Dependencies automatically resolved by service container...
        $this->admin = $admins->getCurrent();
    }

    public function compose(View $view)
    {
        $view->with('admin', $this->admin);
    }
}