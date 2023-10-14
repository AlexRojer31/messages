<?php

namespace Messages;

/**
 * Типы сообщений
 */
class MessageType
{
    public const SUCCESS = 'Success';
    public const ERROR = 'Error';
    public const NOTICE = 'Notice';
    public const WARNING = 'Warning';
    public const AUTHORIZATION = 'Authorization';

    public const TYPES = [
        self::SUCCESS => 'Успех',
        self::ERROR => 'Ошибка',
        self::NOTICE => 'Уведомление',
        self::WARNING => 'Предупреждение',
        self::AUTHORIZATION => 'Авторизация',
    ];
}
