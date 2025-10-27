<?php

namespace TeamNifty\Forge\Requests\Deployments;

use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\PaginationPlugin\Contracts\Paginatable;
use TeamNifty\Forge\Concerns\CanBeSent;

/**
 * organizations.servers.sites.deployments.index
 *
 * Show all recent deployments for the site.
 *
 * Processing mode: <small><code>sync</code></small>
 */
class OrganizationsServersSitesDeploymentsIndexRequest extends Request implements Paginatable
{
    use CanBeSent;

    protected Method $method = Method::GET;

    /**
     * @param  string  $organization  The organization slug
     * @param  int  $server  The server ID
     * @param  int  $site  The site ID
     * @param  null|string  $sort  Available sorts are `created_at`. You can sort by multiple options by separating them with a comma. To sort in descending order, use `-` sign in front of the sort, for example: `-created_at`.
     * @param  null|int  $pagesize  The number of results that will be returned per page.
     * @param  null|string  $pagecursor  The cursor to start the pagination from.
     * @param  null|string  $filtercommitHash  The commit hash of the deployment.
     * @param  null|string  $filtercommitMessage  The commit message of the deployment.
     * @param  null|string  $filtercommitAuthor  The commit author of the deployment.
     */
    public function __construct(
        protected string $organization,
        protected int $server,
        protected int $site,
        protected ?string $sort = null,
        protected ?int $pagesize = null,
        protected ?string $pagecursor = null,
        protected ?string $filtercommitHash = null,
        protected ?string $filtercommitMessage = null,
        protected ?string $filtercommitAuthor = null,
    ) {}

    public function defaultQuery(): array
    {
        return array_filter([
            'sort' => $this->sort,
            'page[size]' => $this->pagesize,
            'page[cursor]' => $this->pagecursor,
            'filter[commit_hash]' => $this->filtercommitHash,
            'filter[commit_message]' => $this->filtercommitMessage,
            'filter[commit_author]' => $this->filtercommitAuthor,
        ]);
    }

    public function resolveEndpoint(): string
    {
        return "/orgs/{$this->organization}/servers/{$this->server}/sites/{$this->site}/deployments";
    }
}
