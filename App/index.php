<?php

namespace App;

require __DIR__ . '/../vendor/autoload.php';
require __DIR__ . '/Core/tools.php';
require __DIR__ . '/Models/AbstractModel.php';
require __DIR__ . '/Models/Caller.php';
require __DIR__ . '/Models/Message.php';
require __DIR__ . '/Repositories/AbstractRepository.php';
require __DIR__ . '/Repositories/MessageRepository.php';
require __DIR__ . '/Services/MessageService.php';

use App\Services\MessageService;
use App\Core\Tools;

\App\Core\Tools::init();

echo \App\Core\Tools::$caller;

$messageService = new MessageService();

$message1 = $messageService->parse(Tools::$caller);
$message2 = $messageService->parse(Tools::$caller);

$messageService->persistAll([$message2, $message1]);