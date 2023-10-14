<?php

namespace Messages;

/**
 * Типы сообщений
 */
class MessageType
{
    public const SUCCESS = 'success';
    public const ERROR = 'error';
    public const NOTICE = 'notice';
    public const WARNING = 'warning';
    public const AUTHORIZATION = 'authorization';

    public const TYPES = [
        self::SUCCESS => 'успех',
        self::ERROR => 'ошибка',
        self::NOTICE => 'уведомление',
        self::WARNING => 'предупреждение',
        self::AUTHORIZATION => 'авторизация',
    ];
}
