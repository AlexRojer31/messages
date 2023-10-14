<?php

namespace Messages;

/**
 * Объект сообщения провала авторизации
 */
class AuthorizationFailedMessage extends Message
{
    public function __construct()
    {
        parent::__construct('failed', MessageType::AUTHORIZATION);
    }
}
