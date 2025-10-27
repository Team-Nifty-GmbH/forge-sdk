<?php

namespace TeamNifty\Forge\Concerns;

use Illuminate\Support\Collection;
use Saloon\Http\Response;
use Saloon\PaginationPlugin\Paginator;
use TeamNifty\Forge\Forge;

trait CanBeSent
{
    public function collect(string|int|null $key = null): Collection
    {
        return $this->send()->collect($key);
    }

    public function json(): mixed
    {
        return $this->send()->json();
    }

    public function paginate(): Paginator
    {
        return app(Forge::class)->paginate($this);
    }

    public function send(): Response
    {
        return app(Forge::class)->send($this);
    }
}
