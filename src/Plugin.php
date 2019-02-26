<?php

namespace Asdfx\Phergie\Plugin\PingPong;

use Phergie\Irc\Bot\React\AbstractPlugin;
use Phergie\Irc\Bot\React\EventQueueInterface;
use Phergie\Irc\Event\UserEventInterface;

class Plugin extends AbstractPlugin
{
    public function getSubscribedEvents()
    {
        return [];
    }

    public function handleCommand(UserEventInterface $event, EventQueueInterface $queue)
    {
    }
}

