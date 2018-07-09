<?php

namespace App;

use Nord\Lumen\DynamoDb\Domain\Model\DynamoDbModel;

class Log extends DynamoDbModel
{

    protected $timestamp = 'timestamp';
    protected $table = 'logrpi';

    protected $fillable = ['timestamp', 'logs'];

}