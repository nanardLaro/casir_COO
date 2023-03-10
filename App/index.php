<?php

namespace App;

require __DIR__.'/autoload.php';

use App\Models\Caller;
use App\Services\MessageService;
use App\Core\Tools;

\App\Core\Tools::init();

$caller = new Caller(); // booh, use a repository !

echo $caller;

$messageService = new MessageService();

$message1 = $messageService->parse($caller);
$message2 = $messageService->parse($caller);

$messageService->persistAll([$message1, $message2]);