<?php

namespace App\Services;

use App\Models\Caller;
use App\Repositories\MessageRepository;

class MessageService {

    private function repository() : MessageRepository {
        return new MessageRepository();
    }

    public function parse(Caller $caller) {
        return $this->repository()->createFromCaller($caller);
    }

    public function persistAll(array $messages) {
        foreach($messages as $message) {
            $this->repository()->save($message);
        }
    }

}