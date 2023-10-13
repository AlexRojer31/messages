<?php

namespace Messages;

use PHPUnit\Framework\TestCase;

class MessagesTest extends TestCase
{
    /**
     * @covers Message->getMessage()
     * @covers Message->getType()
     */
    public function testMessage() : void
    {
        $message = new Message('Hello world', MessageType::NOTICE);
        $this->assertIsString($message->getMessage());
        $this->assertIsString($message->getType());
    }
}

