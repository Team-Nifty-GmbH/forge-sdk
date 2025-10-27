<?php

namespace TeamNifty\Forge\Resource;

use Saloon\Exceptions\Request\FatalRequestException;
use Saloon\Exceptions\Request\RequestException;
use Saloon\Http\BaseResource;
use Saloon\Http\Response;
use TeamNifty\Forge\Requests\FirewallRules\OrganizationsServersFirewallRulesDestroyRequest;
use TeamNifty\Forge\Requests\FirewallRules\OrganizationsServersFirewallRulesIndexRequest;
use TeamNifty\Forge\Requests\FirewallRules\OrganizationsServersFirewallRulesShowRequest;
use TeamNifty\Forge\Requests\FirewallRules\OrganizationsServersFirewallRulesStoreRequest;

class FirewallRules extends BaseResource
{
    /**
     * @param  string  $organization  The organization slug
     * @param  int  $server  The server ID
     * @param  int  $rule  The rule ID
     *
     * @throws FatalRequestException
     * @throws RequestException
     */
    public function organizationsServersFirewallRulesDestroyRequest(
        string $organization,
        int $server,
        int $rule,
    ): Response {
        return $this->connector->send(new OrganizationsServersFirewallRulesDestroyRequest($organization, $server, $rule));
    }

    /**
     * @param  string  $organization  The organization slug
     * @param  int  $server  The server ID
     * @param  null|string  $sort  Available sorts are `created_at`, `updated_at`. You can sort by multiple options by separating them with a comma. To sort in descending order, use `-` sign in front of the sort, for example: `-created_at`.
     * @param  null|int  $pagesize  The number of results that will be returned per page.
     * @param  null|string  $pagecursor  The cursor to start the pagination from.
     * @param  null|string  $filtername  The name of the firewall rule.
     * @param  null|string  $filterstatus  The status of the firewall rule.
     * @param  null|string  $filteripAddress  The IP address or subnet for the firewall rule.
     * @param  null|string  $filtertype  The type of the firewall rule.
     * @param  null|string  $filterport  The port or port range for the firewall rule.
     *
     * @throws FatalRequestException
     * @throws RequestException
     */
    public function organizationsServersFirewallRulesIndexRequest(
        string $organization,
        int $server,
        ?string $sort = null,
        ?int $pagesize = null,
        ?string $pagecursor = null,
        ?string $filtername = null,
        ?string $filterstatus = null,
        ?string $filteripAddress = null,
        ?string $filtertype = null,
        ?string $filterport = null,
    ): Response {
        return $this->connector->send(new OrganizationsServersFirewallRulesIndexRequest($organization, $server, $sort, $pagesize, $pagecursor, $filtername, $filterstatus, $filteripAddress, $filtertype, $filterport));
    }

    /**
     * @param  string  $organization  The organization slug
     * @param  int  $server  The server ID
     * @param  int  $rule  The rule ID
     *
     * @throws FatalRequestException
     * @throws RequestException
     */
    public function organizationsServersFirewallRulesShowRequest(string $organization, int $server, int $rule): Response
    {
        return $this->connector->send(new OrganizationsServersFirewallRulesShowRequest($organization, $server, $rule));
    }

    /**
     * @param  string  $organization  The organization slug
     * @param  int  $server  The server ID
     *
     * @throws FatalRequestException
     * @throws RequestException
     */
    public function organizationsServersFirewallRulesStoreRequest(
        string $organization,
        int $server,
        string $name,
        mixed $port = null,
        ?array $ipAddress = null,
    ): Response {
        return $this->connector->send(new OrganizationsServersFirewallRulesStoreRequest($organization, $server, $name, $port, $ipAddress));
    }
}
