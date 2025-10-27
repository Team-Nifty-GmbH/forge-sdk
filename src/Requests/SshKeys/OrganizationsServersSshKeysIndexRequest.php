<?php

namespace TeamNifty\Forge\Requests\SshKeys;

use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\PaginationPlugin\Contracts\Paginatable;
use TeamNifty\Forge\Concerns\CanBeSent;

/**
 * organizations.servers.ssh-keys.index
 *
 * List all SSH keys associated with the server.
 *
 * Processing mode: <small><code>sync</code></small>
 */
class OrganizationsServersSshKeysIndexRequest extends Request implements Paginatable
{
    use CanBeSent;

    protected Method $method = Method::GET;

    /**
     * @param  string  $organization  The organization slug
     * @param  int  $server  The server ID
     * @param  null|int  $pagesize  The number of results that will be returned per page.
     * @param  null|string  $pagecursor  The cursor to start the pagination from.
     */
    public function __construct(
        protected string $organization,
        protected int $server,
        protected ?int $pagesize = null,
        protected ?string $pagecursor = null,
        protected ?string $filtername = null,
        protected ?string $filteruser = null,
    ) {}

    public function defaultQuery(): array
    {
        return array_filter([
            'page[size]' => $this->pagesize,
            'page[cursor]' => $this->pagecursor,
            'filter[name]' => $this->filtername,
            'filter[user]' => $this->filteruser,
        ]);
    }

    public function resolveEndpoint(): string
    {
        return "/orgs/{$this->organization}/servers/{$this->server}/ssh-keys";
    }
}
