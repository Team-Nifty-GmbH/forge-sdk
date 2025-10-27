<?php

namespace TeamNifty\Forge\Requests\Sites;

use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\PaginationPlugin\Contracts\Paginatable;
use TeamNifty\Forge\Concerns\CanBeSent;
use TeamNifty\Forge\Enums\OrganizationsserverssitesdomainsindexFilterstatus;
use TeamNifty\Forge\Enums\OrganizationsserverssitesdomainsindexFiltertype;

/**
 * organizations.servers.sites.domains.index
 *
 * Show all domains for the site.
 *
 * Processing mode: <small><code>sync</code></small>
 */
class OrganizationsServersSitesDomainsIndexRequest extends Request implements Paginatable
{
    use CanBeSent;

    protected Method $method = Method::GET;

    /**
     * @param  string  $organization  The organization slug
     * @param  int  $server  The server ID
     * @param  int  $site  The site ID
     * @param  null|string  $sort  Available sorts are `name`, `created_at`. You can sort by multiple options by separating them with a comma. To sort in descending order, use `-` sign in front of the sort, for example: `-name`.
     * @param  null|int  $pagesize  The number of results that will be returned per page.
     * @param  null|string  $pagecursor  The cursor to start the pagination from.
     * @param  null|OrganizationsserverssitesdomainsindexFilterstatus  $filterstatus  The status of the domain.
     * @param  null|OrganizationsserverssitesdomainsindexFiltertype  $filtertype  The type of domain.
     */
    public function __construct(
        protected string $organization,
        protected int $server,
        protected int $site,
        protected ?string $sort = null,
        protected ?int $pagesize = null,
        protected ?string $pagecursor = null,
        protected ?OrganizationsserverssitesdomainsindexFilterstatus $filterstatus = null,
        protected ?OrganizationsserverssitesdomainsindexFiltertype $filtertype = null,
    ) {}

    public function defaultQuery(): array
    {
        return array_filter([
            'sort' => $this->sort,
            'page[size]' => $this->pagesize,
            'page[cursor]' => $this->pagecursor,
            'filter[status]' => $this->filterstatus?->value,
            'filter[type]' => $this->filtertype?->value,
        ]);
    }

    public function resolveEndpoint(): string
    {
        return "/orgs/{$this->organization}/servers/{$this->server}/sites/{$this->site}/domains";
    }
}
