<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\Core\Configure;
use Cake\Core\Configure\Engine\PhpConfig;

class IndexController extends AppController
{
    public function input()
    {
        Configure::load("myconfig.php");
        $pref = Configure::read("prefecture");
        $cit = Configure::read("checkin");
    }

    public function confirm()
    {
    }

    public function register()
    {

    }

    public function complete()
    {
    }
}
