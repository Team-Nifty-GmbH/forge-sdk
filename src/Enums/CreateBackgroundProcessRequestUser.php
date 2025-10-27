<?php

declare(strict_types=1);

namespace TeamNifty\Forge\Enums;

enum CreateBackgroundProcessRequestUser: string
{
    case FORGE = 'forge';
    case ROOT = 'root';
}
