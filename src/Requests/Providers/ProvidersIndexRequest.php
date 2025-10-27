<?php

namespace TeamNifty\Forge\Requests\Providers;

use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\PaginationPlugin\Contracts\Paginatable;
use TeamNifty\Forge\Concerns\CanBeSent;

/**
 * providers.index
 *
 * Show all providers
 *
 * Processing mode: <small><code>sync</code></small>
 */
class ProvidersIndexRequest extends Request implements Paginatable
{
    use CanBeSent;

    protected Method $method = Method::GET;

    /**
     * @param  null|int  $pagesize  The number of results that will be returned per page.
     * @param  null|string  $pagecursor  The cursor to start the pagination from.
     */
    public function __construct(
        protected ?int $pagesize = null,
        protected ?string $pagecursor = null,
    ) {}

    public function defaultQuery(): array
    {
        return array_filter(['page[size]' => $this->pagesize, 'page[cursor]' => $this->pagecursor]);
    }

    public function resolveEndpoint(): string
    {
        return '/providers';
    }
}
