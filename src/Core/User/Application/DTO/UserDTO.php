<?php

namespace App\Core\User\Application\DTO;

use DateTimeImmutable;

class UserDTO
{
    public function __construct(
        public readonly int $id,
        public readonly string $email,
        public readonly ?DateTimeImmutable $activatedAt,
    ) {}
}
