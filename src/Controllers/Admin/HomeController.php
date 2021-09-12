<?php

declare(strict_types=1);

namespace Graboids\Controllers\Admin;

use Graboids\Models\Graboid;
use Jenssegers\Blade\Blade;

class HomeController
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
        $graboids = Graboid::all();

        echo $this->blade->render('admin.graboids', [
            'graboids' => $graboids,
        ]);
    }

    public function edit(int $graboidId)
    {
        $graboid = Graboid::find($graboidId);

        echo $this->blade->render('admin.graboids.edit', [
            'graboid' => $graboid,
        ]);

        echo $graboidId;
    }

    public function update(int $graboidId)
    {
        $requestData = [
            'src' => $_POST['src'],
        ];

        $graboid = Graboid::find($graboidId);
        $graboid->update($requestData);

        header('Location: /admin/graboids');
    }

/*    public function add()
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
    }*/

    public function create()
    {

    }
}
