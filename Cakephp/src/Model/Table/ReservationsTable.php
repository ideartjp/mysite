<?php

namespace App\Model\Table;

use Cake\ORM\Table;

class ReservationsTable extends Table
{
    public function initialize(array $config)
    {
        $this->addBehavior('Timestamp');
    }
}
