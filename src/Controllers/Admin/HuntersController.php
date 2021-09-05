<?php

declare(strict_types=1);

namespace Graboids\Controllers\Admin;

use Graboids\Models\Hunter;
use Jenssegers\Blade\Blade;

class HuntersController
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
        $hunters = Hunter::all();

        echo $this->blade->render('admin.hunters', [
            'hunters' => $hunters,
        ]);
    }

    public function edit(int $hunterId)
    {
        $hunter = Hunter::find($hunterId);

        echo $this->blade->render('admin.hunters.edit', [
            'hunter' => $hunter,
        ]);

        echo $hunterId;
    }

    public function update(int $hunterId)
    {
        $requestData = [
            'src' => $_POST['src'],
            'name' => $_POST['name'],
            'description' => $_POST['description'],
        ];

        $hunter = Hunter::find($hunterId);
        $hunter->update($requestData);

        header('Location: /admin/hunters');
    }

    public function add()
    {
        $blade = new Blade('views', 'cache');

        // here we want to check a request:
        // - we want to check if request has a cookie for us
        // - if yes, we can check if there is a valid(existing) session id in the cookie
        // - if no, we will redirect the user to login page
        if (empty($_COOKIE)) {
            header('Location: /admin/login.php');
        }

        if (empty($_SESSION['is_admin'])) {
            header('Location: /');
        }

        $html = $blade->render('hunters.addHunter');

        echo $html;
    }

    public function create()
    {

    }
}
