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

    public const TYPES = [
        self::SUCCESS => 'Успех',
        self::ERROR => 'Ошибка',
        self::NOTICE => 'Уведомление',
        self::WARNING => 'Предупреждение',
    ];
}
