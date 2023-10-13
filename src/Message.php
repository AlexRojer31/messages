<?php

namespace Messages;

/**
 * Объект сообщения
 */
class Message
{
    /**
     * Текст сообщения
     *
     * @var string
     */
    private $message;

    /**
     * Тип сообщения
     *
     * @var string
     */
    private $type;

    public function __construct(string $message, string $type)
    {
        $this->message = $message;
        $this->type = $type;
    }

    /**
     * Получить сообщение
     *
     * @return string
     */
    public function getMessage(): string
    {
        return $this->message;
    }

    /**
     * Получить тип сообщения
     *
     * @return string
     */
    public function getType(): string
    {
        return $this->type;
    }

    public function __toString(): string
    {
        return $this->type . ': ' . $this->message;
    }

    public function toArray(): array
    {
        return [
            'type' => $this->type,
            'message' => $this->message,
        ];

    }
}
