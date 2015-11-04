<?php
namespace App\Model\table;
use Cake\ORM\Table;

class CustomerTable extends Table
{
    public function initialize(array $config)
    {
        $this->addBehavior('Timestamp');
    }
}
?>