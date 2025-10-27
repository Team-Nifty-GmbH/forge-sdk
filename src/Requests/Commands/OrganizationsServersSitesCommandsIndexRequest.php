<?php

namespace TeamNifty\Forge\Requests\Commands;

use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\PaginationPlugin\Contracts\Paginatable;
use TeamNifty\Forge\Concerns\CanBeSent;

/**
 * organizations.servers.sites.commands.index
 *
 * List all command runs for the site.
 *
 * Processing mode: <small><code>sync</code></small>
 */
class OrganizationsServersSitesCommandsIndexRequest extends Request implements Paginatable
{
    use CanBeSent;

    protected Method $method = Method::GET;

    /**
     * @param  string  $organization  The organization slug
     * @param  int  $server  The server ID
     * @param  int  $site  The site ID
     * @param  null|string  $sort  Available sorts are `status`, `created_at`, `updated_at`. You can sort by multiple options by separating them with a comma. To sort in descending order, use `-` sign in front of the sort, for example: `-status`.
     * @param  null|int  $pagesize  The number of results that will be returned per page.
     * @param  null|string  $pagecursor  The cursor to start the pagination from.
     * @param  null|string  $filteruserId  The user ID of the command initiator.
     * @param  null|string  $filterstatus  The status of the command.
     * @param  null|string  $filtercommand  The command it ran.
     */
    public function __construct(
        protected string $organization,
        protected int $server,
        protected int $site,
        protected ?string $sort = null,
        protected ?int $pagesize = null,
        protected ?string $pagecursor = null,
        protected ?string $filteruserId = null,
        protected ?string $filterstatus = null,
        protected ?string $filtercommand = null,
    ) {}

    public function defaultQuery(): array
    {
        return array_filter([
            'sort' => $this->sort,
            'page[size]' => $this->pagesize,
            'page[cursor]' => $this->pagecursor,
            'filter[user_id]' => $this->filteruserId,
            'filter[status]' => $this->filterstatus,
            'filter[command]' => $this->filtercommand,
        ]);
    }

    public function resolveEndpoint(): string
    {
        return "/orgs/{$this->organization}/servers/{$this->server}/sites/{$this->site}/commands";
    }
}
