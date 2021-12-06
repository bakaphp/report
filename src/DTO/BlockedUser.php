<?php

declare(strict_types=1);

namespace Kanvas\Moderation\DTO;

class BlockedUser
{
    public int $id;
    public string $display_name;
    public int $is_blocked = 0;
    public string $firstname;
    public string $lastname;
    public array $photo = [];
    public string $created_at;
}
