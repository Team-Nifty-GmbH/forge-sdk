<?php

namespace TeamNifty\Forge\Dto;

use Spatie\LaravelData\Attributes\MapName;
use Spatie\LaravelData\Data as SpatieData;

/**
 * ArchiveRequest
 */
class ArchiveRequest extends SpatieData
{
    public function __construct(
        #[MapName('server_id')]
        public ?int $serverId = null,
    ) {}
}
