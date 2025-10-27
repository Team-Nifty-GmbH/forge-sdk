<?php

namespace TeamNifty\Forge\Resource;

use Saloon\Exceptions\Request\FatalRequestException;
use Saloon\Exceptions\Request\RequestException;
use Saloon\Http\BaseResource;
use Saloon\Http\Response;
use TeamNifty\Forge\Requests\RedirectRules\OrganizationsServersSitesRedirectRulesDestroyRequest;
use TeamNifty\Forge\Requests\RedirectRules\OrganizationsServersSitesRedirectRulesIndexRequest;
use TeamNifty\Forge\Requests\RedirectRules\OrganizationsServersSitesRedirectRulesShowRequest;
use TeamNifty\Forge\Requests\RedirectRules\OrganizationsServersSitesRedirectRulesStoreRequest;

class RedirectRules extends BaseResource
{
    /**
     * @param  string  $organization  The organization slug
     * @param  int  $server  The server ID
     * @param  int  $site  The site ID
     * @param  int  $redirectRule  The redirect rule ID
     *
     * @throws FatalRequestException
     * @throws RequestException
     */
    public function organizationsServersSitesRedirectRulesDestroyRequest(
        string $organization,
        int $server,
        int $site,
        int $redirectRule,
    ): Response {
        return $this->connector->send(new OrganizationsServersSitesRedirectRulesDestroyRequest($organization, $server, $site, $redirectRule));
    }

    /**
     * @param  string  $organization  The organization slug
     * @param  int  $server  The server ID
     * @param  int  $site  The site ID
     * @param  null|string  $sort  Available sorts are `created_at`, `updated_at`. You can sort by multiple options by separating them with a comma. To sort in descending order, use `-` sign in front of the sort, for example: `-created_at`.
     * @param  null|int  $pagesize  The number of results that will be returned per page.
     * @param  null|string  $pagecursor  The cursor to start the pagination from.
     * @param  null|string  $filterfrom  The source URL path for the redirect rule.
     * @param  null|string  $filterto  The destination URL path for the redirect rule.
     * @param  null|string  $filtertype  The type of the redirect rule.
     * @param  null|string  $filterstatus  The status of the redirect rule.
     *
     * @throws FatalRequestException
     * @throws RequestException
     */
    public function organizationsServersSitesRedirectRulesIndexRequest(
        string $organization,
        int $server,
        int $site,
        ?string $sort = null,
        ?int $pagesize = null,
        ?string $pagecursor = null,
        ?string $filterfrom = null,
        ?string $filterto = null,
        ?string $filtertype = null,
        ?string $filterstatus = null,
    ): Response {
        return $this->connector->send(new OrganizationsServersSitesRedirectRulesIndexRequest($organization, $server, $site, $sort, $pagesize, $pagecursor, $filterfrom, $filterto, $filtertype, $filterstatus));
    }

    /**
     * @param  string  $organization  The organization slug
     * @param  int  $server  The server ID
     * @param  int  $site  The site ID
     * @param  int  $redirectRule  The redirect rule ID
     *
     * @throws FatalRequestException
     * @throws RequestException
     */
    public function organizationsServersSitesRedirectRulesShowRequest(
        string $organization,
        int $server,
        int $site,
        int $redirectRule,
    ): Response {
        return $this->connector->send(new OrganizationsServersSitesRedirectRulesShowRequest($organization, $server, $site, $redirectRule));
    }

    /**
     * @param  string  $organization  The organization slug
     * @param  int  $server  The server ID
     * @param  int  $site  The site ID
     * @param  string  $from  The source URL path for the redirect rule.
     * @param  string  $to  The destination URL path for the redirect rule.
     *
     * @throws FatalRequestException
     * @throws RequestException
     */
    public function organizationsServersSitesRedirectRulesStoreRequest(
        string $organization,
        int $server,
        int $site,
        string $from,
        string $to,
    ): Response {
        return $this->connector->send(new OrganizationsServersSitesRedirectRulesStoreRequest($organization, $server, $site, $from, $to));
    }
}
