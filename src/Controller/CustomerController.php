<?php
namespace App\Controller;
use App\Controller\AppController;

class CustomerController extends AppController
{
    public function index()
    {
        $customers=$this->Customer->find('all');//between "customer" is the table name in database
        $this->set(compact('customers'));
    }
}
?>
