<?php

namespace TeamNifty\Forge\Resource;

use Saloon\Exceptions\Request\FatalRequestException;
use Saloon\Exceptions\Request\RequestException;
use Saloon\Http\BaseResource;
use Saloon\Http\Response;
use TeamNifty\Forge\Requests\SecurityRules\OrganizationsServersSitesSecurityRulesDestroyRequest;
use TeamNifty\Forge\Requests\SecurityRules\OrganizationsServersSitesSecurityRulesIndexRequest;
use TeamNifty\Forge\Requests\SecurityRules\OrganizationsServersSitesSecurityRulesShowRequest;
use TeamNifty\Forge\Requests\SecurityRules\OrganizationsServersSitesSecurityRulesStoreRequest;
use TeamNifty\Forge\Requests\SecurityRules\OrganizationsServersSitesSecurityRulesUpdateRequest;

class SecurityRules extends BaseResource
{
    /**
     * @param  string  $organization  The organization slug
     * @param  int  $server  The server ID
     * @param  int  $site  The site ID
     * @param  int  $securityRule  The security rule ID
     *
     * @throws FatalRequestException
     * @throws RequestException
     */
    public function organizationsServersSitesSecurityRulesDestroyRequest(
        string $organization,
        int $server,
        int $site,
        int $securityRule,
    ): Response {
        return $this->connector->send(new OrganizationsServersSitesSecurityRulesDestroyRequest($organization, $server, $site, $securityRule));
    }

    /**
     * @param  string  $organization  The organization slug
     * @param  int  $server  The server ID
     * @param  int  $site  The site ID
     * @param  null|string  $sort  Available sorts are `path`, `status`, `created_at`, `updated_at`. You can sort by multiple options by separating them with a comma. To sort in descending order, use `-` sign in front of the sort, for example: `-path`.
     * @param  null|int  $pagesize  The number of results that will be returned per page.
     * @param  null|string  $pagecursor  The cursor to start the pagination from.
     * @param  null|string  $filterpath  The path for the security rule.
     * @param  null|string  $filterstatus  The status of the security rule.
     *
     * @throws FatalRequestException
     * @throws RequestException
     */
    public function organizationsServersSitesSecurityRulesIndexRequest(
        string $organization,
        int $server,
        int $site,
        ?string $sort = null,
        ?int $pagesize = null,
        ?string $pagecursor = null,
        ?string $filterpath = null,
        ?string $filterstatus = null,
    ): Response {
        return $this->connector->send(new OrganizationsServersSitesSecurityRulesIndexRequest($organization, $server, $site, $sort, $pagesize, $pagecursor, $filterpath, $filterstatus));
    }

    /**
     * @param  string  $organization  The organization slug
     * @param  int  $server  The server ID
     * @param  int  $site  The site ID
     * @param  int  $securityRule  The security rule ID
     *
     * @throws FatalRequestException
     * @throws RequestException
     */
    public function organizationsServersSitesSecurityRulesShowRequest(
        string $organization,
        int $server,
        int $site,
        int $securityRule,
    ): Response {
        return $this->connector->send(new OrganizationsServersSitesSecurityRulesShowRequest($organization, $server, $site, $securityRule));
    }

    /**
     * @param  string  $organization  The organization slug
     * @param  int  $server  The server ID
     * @param  int  $site  The site ID
     * @param  string  $name  The name of the security rule.
     * @param  null|string  $path  The path for the security rule.
     * @param  array  $credentials  The credentials for the security rule.
     *
     * @throws FatalRequestException
     * @throws RequestException
     */
    public function organizationsServersSitesSecurityRulesStoreRequest(
        string $organization,
        int $server,
        int $site,
        string $name,
        ?string $path,
        array $credentials,
    ): Response {
        return $this->connector->send(new OrganizationsServersSitesSecurityRulesStoreRequest($organization, $server, $site, $name, $path, $credentials));
    }

    /**
     * @param  string  $organization  The organization slug
     * @param  int  $server  The server ID
     * @param  int  $site  The site ID
     * @param  int  $securityRule  The security rule ID
     * @param  string  $name  The name of the security rule.
     * @param  null|mixed  $path  The path for the security rule.
     * @param  array  $credentials  The credentials for the security rule.
     *
     * @throws FatalRequestException
     * @throws RequestException
     */
    public function organizationsServersSitesSecurityRulesUpdateRequest(
        string $organization,
        int $server,
        int $site,
        int $securityRule,
        string $name,
        mixed $path = null,
        array $credentials,
    ): Response {
        return $this->connector->send(new OrganizationsServersSitesSecurityRulesUpdateRequest($organization, $server, $site, $securityRule, $name, $path, $credentials));
    }
}
