<?php

namespace App\Repositories;

use App\Models\Caller;
use App\Models\Message;

class MessageRepository extends AbstractRepository {
    public function createFromCaller(Caller $caller) : Message {
        return new Message($caller->what);
    }
}