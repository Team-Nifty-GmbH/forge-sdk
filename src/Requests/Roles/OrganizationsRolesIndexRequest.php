<?php

namespace TeamNifty\Forge\Requests\Roles;

use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\PaginationPlugin\Contracts\Paginatable;
use TeamNifty\Forge\Concerns\CanBeSent;

/**
 * organizations.roles.index
 *
 * Show all roles for the organization.
 *
 * Processing mode: <small><code>sync</code></small>
 */
class OrganizationsRolesIndexRequest extends Request implements Paginatable
{
    use CanBeSent;

    protected Method $method = Method::GET;

    /**
     * @param  string  $organization  The organization slug
     * @param  null|string  $include  Available includes are `permissions`, `permissionsCount`, `permissionsExists`. You can include multiple options by separating them with a comma.
     * @param  null|int  $pagesize  The number of results that will be returned per page.
     * @param  null|string  $pagecursor  The cursor to start the pagination from.
     */
    public function __construct(
        protected string $organization,
        protected ?string $include = null,
        protected ?int $pagesize = null,
        protected ?string $pagecursor = null,
        protected ?string $filtername = null,
        protected ?string $filterpermissionsName = null,
    ) {}

    public function defaultQuery(): array
    {
        return array_filter([
            'include' => $this->include,
            'page[size]' => $this->pagesize,
            'page[cursor]' => $this->pagecursor,
            'filter[name]' => $this->filtername,
            'filter[permissions.name]' => $this->filterpermissionsName,
        ]);
    }

    public function resolveEndpoint(): string
    {
        return "/orgs/{$this->organization}/roles";
    }
}
