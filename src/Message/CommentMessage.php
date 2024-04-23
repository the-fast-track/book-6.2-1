<?php

namespace App\Message;

class CommentMessage
{
    public function __construct(
        private int $id,
        private array $context = [],
    ) {
    }

    public function getId(): int
    {
        return $this->id;
    }

    public function getContext(): array
    {
        return $this->context;
    }
}
