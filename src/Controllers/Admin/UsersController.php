<?php

declare(strict_types=1);

namespace Graboids\Controllers\Admin;

use Graboids\Models\User;
use Jenssegers\Blade\Blade;

class UsersController
{
    /**
     * @var Blade
     */
    private $blade;

    public function __construct()
    {
        $this->blade = new Blade('views', 'cache');
    }

    public function index()
    {
        $users = User::all();

        echo $this->blade->render('admin.users', [
            'users' => $users,
        ]);
    }
    public function edit(int $usersId)
    {
        $user = User::find($usersId);

        echo $this->blade->render('admin.users.edit', [
            'user' => $user,
        ]);

        echo $usersId;
    }
}