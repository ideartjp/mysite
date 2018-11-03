<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\Core\Configure;
use Cake\Core\Configure\Engine\PhpConfig;

class IndexController extends AppController
{
    public function input()
    {
	$this->set('color', 'pink');
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
