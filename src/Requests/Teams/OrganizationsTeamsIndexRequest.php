<?php

namespace TeamNifty\Forge\Requests\Teams;

use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\PaginationPlugin\Contracts\Paginatable;
use TeamNifty\Forge\Concerns\CanBeSent;

/**
 * organizations.teams.index
 *
 * Show all teams for the organization.
 *
 * Processing mode: <small><code>sync</code></small>
 */
class OrganizationsTeamsIndexRequest extends Request implements Paginatable
{
    use CanBeSent;

    protected Method $method = Method::GET;

    /**
     * @param  string  $organization  The organization slug
     * @param  null|int  $pagesize  The number of results that will be returned per page.
     * @param  null|string  $pagecursor  The cursor to start the pagination from.
     */
    public function __construct(
        protected string $organization,
        protected ?int $pagesize = null,
        protected ?string $pagecursor = null,
    ) {}

    public function defaultQuery(): array
    {
        return array_filter(['page[size]' => $this->pagesize, 'page[cursor]' => $this->pagecursor]);
    }

    public function resolveEndpoint(): string
    {
        return "/orgs/{$this->organization}/teams";
    }
}
