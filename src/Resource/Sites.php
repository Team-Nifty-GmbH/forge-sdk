<?php

namespace TeamNifty\Forge\Resource;

use Saloon\Exceptions\Request\FatalRequestException;
use Saloon\Exceptions\Request\RequestException;
use Saloon\Http\BaseResource;
use Saloon\Http\Response;
use TeamNifty\Forge\Enums\OrganizationsserverssitesdomainsindexFilterstatus;
use TeamNifty\Forge\Enums\OrganizationsserverssitesdomainsindexFiltertype;
use TeamNifty\Forge\Requests\Sites\OrganizationsServersSitesComposerCredentialsDestroyRequest;
use TeamNifty\Forge\Requests\Sites\OrganizationsServersSitesComposerCredentialsIndexRequest;
use TeamNifty\Forge\Requests\Sites\OrganizationsServersSitesComposerCredentialsShowRequest;
use TeamNifty\Forge\Requests\Sites\OrganizationsServersSitesComposerCredentialsStoreRequest;
use TeamNifty\Forge\Requests\Sites\OrganizationsServersSitesComposerCredentialsUpdateRequest;
use TeamNifty\Forge\Requests\Sites\OrganizationsServersSitesDestroyRequest;
use TeamNifty\Forge\Requests\Sites\OrganizationsServersSitesDomainsActionsStoreRequest;
use TeamNifty\Forge\Requests\Sites\OrganizationsServersSitesDomainsCertificateDestroyRequest;
use TeamNifty\Forge\Requests\Sites\OrganizationsServersSitesDomainsCertificateShowRequest;
use TeamNifty\Forge\Requests\Sites\OrganizationsServersSitesDomainsCertificateStoreRequest;
use TeamNifty\Forge\Requests\Sites\OrganizationsServersSitesDomainsConfigurationsRequest;
use TeamNifty\Forge\Requests\Sites\OrganizationsServersSitesDomainsDestroyRequest;
use TeamNifty\Forge\Requests\Sites\OrganizationsServersSitesDomainsIndexRequest;
use TeamNifty\Forge\Requests\Sites\OrganizationsServersSitesDomainsShowRequest;
use TeamNifty\Forge\Requests\Sites\OrganizationsServersSitesDomainsStoreRequest;
use TeamNifty\Forge\Requests\Sites\OrganizationsServersSitesDomainsUpdateRequest;
use TeamNifty\Forge\Requests\Sites\OrganizationsServersSitesEnvironmentShowRequest;
use TeamNifty\Forge\Requests\Sites\OrganizationsServersSitesEnvironmentUpdateRequest;
use TeamNifty\Forge\Requests\Sites\OrganizationsServersSitesHealthcheckShowRequest;
use TeamNifty\Forge\Requests\Sites\OrganizationsServersSitesHealthcheckUpdateRequest;
use TeamNifty\Forge\Requests\Sites\OrganizationsServersSitesHeartbeatsDestroyRequest;
use TeamNifty\Forge\Requests\Sites\OrganizationsServersSitesHeartbeatsIndexRequest;
use TeamNifty\Forge\Requests\Sites\OrganizationsServersSitesHeartbeatsShowRequest;
use TeamNifty\Forge\Requests\Sites\OrganizationsServersSitesHeartbeatsStoreRequest;
use TeamNifty\Forge\Requests\Sites\OrganizationsServersSitesHeartbeatsUpdateRequest;
use TeamNifty\Forge\Requests\Sites\OrganizationsServersSitesIndexRequest;
use TeamNifty\Forge\Requests\Sites\OrganizationsServersSitesLoadBalancingNodesIndexRequest;
use TeamNifty\Forge\Requests\Sites\OrganizationsServersSitesLoadBalancingNodesUpdateRequest;
use TeamNifty\Forge\Requests\Sites\OrganizationsServersSitesLogsApplicationDestroyRequest;
use TeamNifty\Forge\Requests\Sites\OrganizationsServersSitesLogsApplicationShowRequest;
use TeamNifty\Forge\Requests\Sites\OrganizationsServersSitesLogsNginxAccessDestroyRequest;
use TeamNifty\Forge\Requests\Sites\OrganizationsServersSitesLogsNginxAccessShowRequest;
use TeamNifty\Forge\Requests\Sites\OrganizationsServersSitesLogsNginxErrorDestroyRequest;
use TeamNifty\Forge\Requests\Sites\OrganizationsServersSitesLogsNginxErrorShowRequest;
use TeamNifty\Forge\Requests\Sites\OrganizationsServersSitesNginxShowRequest;
use TeamNifty\Forge\Requests\Sites\OrganizationsServersSitesNginxUpdateRequest;
use TeamNifty\Forge\Requests\Sites\OrganizationsServersSitesStoreRequest;
use TeamNifty\Forge\Requests\Sites\OrganizationsServersSitesUpdateRequest;
use TeamNifty\Forge\Requests\Sites\OrganizationsSitesIndexRequest;
use TeamNifty\Forge\Requests\Sites\OrganizationsSitesShowRequest;
use TeamNifty\Forge\Requests\Sites\SitesIndexRequest;

class Sites extends BaseResource
{
    /**
     * @param  string  $organization  The organization slug
     * @param  int  $server  The server ID
     * @param  int  $site  The site ID
     *
     * @throws FatalRequestException
     * @throws RequestException
     */
    public function organizationsServersSitesComposerCredentialsDestroyRequest(
        string $organization,
        int $server,
        int $site,
        string $repository,
    ): Response {
        return $this->connector->send(new OrganizationsServersSitesComposerCredentialsDestroyRequest($organization, $server, $site, $repository));
    }

    /**
     * @param  string  $organization  The organization slug
     * @param  int  $server  The server ID
     * @param  int  $site  The site ID
     *
     * @throws FatalRequestException
     * @throws RequestException
     */
    public function organizationsServersSitesComposerCredentialsIndexRequest(
        string $organization,
        int $server,
        int $site,
    ): Response {
        return $this->connector->send(new OrganizationsServersSitesComposerCredentialsIndexRequest($organization, $server, $site));
    }

    /**
     * @param  string  $organization  The organization slug
     * @param  int  $server  The server ID
     * @param  int  $site  The site ID
     *
     * @throws FatalRequestException
     * @throws RequestException
     */
    public function organizationsServersSitesComposerCredentialsShowRequest(
        string $organization,
        int $server,
        int $site,
        string $repository,
    ): Response {
        return $this->connector->send(new OrganizationsServersSitesComposerCredentialsShowRequest($organization, $server, $site, $repository));
    }

    /**
     * @param  string  $organization  The organization slug
     * @param  int  $server  The server ID
     * @param  int  $site  The site ID
     *
     * @throws FatalRequestException
     * @throws RequestException
     */
    public function organizationsServersSitesComposerCredentialsStoreRequest(
        string $organization,
        int $server,
        int $site,
        string $repository,
        string $username,
        string $password,
    ): Response {
        return $this->connector->send(new OrganizationsServersSitesComposerCredentialsStoreRequest($organization, $server, $site, $repository, $username, $password));
    }

    /**
     * @param  string  $organization  The organization slug
     * @param  int  $server  The server ID
     * @param  int  $site  The site ID
     *
     * @throws FatalRequestException
     * @throws RequestException
     */
    public function organizationsServersSitesComposerCredentialsUpdateRequest(
        string $organization,
        int $server,
        int $site,
        string $repository,
        string $username,
        string $password,
    ): Response {
        return $this->connector->send(new OrganizationsServersSitesComposerCredentialsUpdateRequest($organization, $server, $site, $repository, $repository, $username, $password));
    }

    /**
     * @param  string  $organization  The organization slug
     * @param  int  $server  The server ID
     * @param  int  $site  The site ID
     *
     * @throws FatalRequestException
     * @throws RequestException
     */
    public function organizationsServersSitesDestroyRequest(string $organization, int $server, int $site): Response
    {
        return $this->connector->send(new OrganizationsServersSitesDestroyRequest($organization, $server, $site));
    }

    /**
     * @param  string  $organization  The organization slug
     * @param  int  $server  The server ID
     * @param  int  $site  The site ID
     * @param  int  $domainRecord  The domain record ID
     *
     * @throws FatalRequestException
     * @throws RequestException
     */
    public function organizationsServersSitesDomainsActionsStoreRequest(
        string $organization,
        int $server,
        int $site,
        int $domainRecord,
    ): Response {
        return $this->connector->send(new OrganizationsServersSitesDomainsActionsStoreRequest($organization, $server, $site, $domainRecord));
    }

    /**
     * @param  string  $organization  The organization slug
     * @param  int  $server  The server ID
     * @param  int  $site  The site ID
     * @param  int  $domainRecord  The domain record ID
     *
     * @throws FatalRequestException
     * @throws RequestException
     */
    public function organizationsServersSitesDomainsCertificateDestroyRequest(
        string $organization,
        int $server,
        int $site,
        int $domainRecord,
    ): Response {
        return $this->connector->send(new OrganizationsServersSitesDomainsCertificateDestroyRequest($organization, $server, $site, $domainRecord));
    }

    /**
     * @param  string  $organization  The organization slug
     * @param  int  $server  The server ID
     * @param  int  $site  The site ID
     * @param  int  $domainRecord  The domain record ID
     *
     * @throws FatalRequestException
     * @throws RequestException
     */
    public function organizationsServersSitesDomainsCertificateShowRequest(
        string $organization,
        int $server,
        int $site,
        int $domainRecord,
    ): Response {
        return $this->connector->send(new OrganizationsServersSitesDomainsCertificateShowRequest($organization, $server, $site, $domainRecord));
    }

    /**
     * @param  string  $organization  The organization slug
     * @param  int  $server  The server ID
     * @param  int  $site  The site ID
     * @param  int  $domainRecord  The domain record ID
     * @param  null|array  $letsencrypt  The configuration for a Let's Encrypt certificate.
     * @param  null|array  $existing  The configuration for an existing certificate.
     * @param  null|array  $csr  The configuration for a CSR (Certificate Signing Request).
     *
     * @throws FatalRequestException
     * @throws RequestException
     */
    public function organizationsServersSitesDomainsCertificateStoreRequest(
        string $organization,
        int $server,
        int $site,
        int $domainRecord,
        ?array $letsencrypt = null,
        ?array $existing = null,
        ?array $csr = null,
    ): Response {
        return $this->connector->send(new OrganizationsServersSitesDomainsCertificateStoreRequest($organization, $server, $site, $domainRecord, $letsencrypt, $existing, $csr));
    }

    /**
     * @param  string  $organization  The organization slug
     * @param  int  $server  The server ID
     * @param  int  $site  The site ID
     * @param  int  $domainRecord  The domain record ID
     *
     * @throws FatalRequestException
     * @throws RequestException
     */
    public function organizationsServersSitesDomainsConfigurationsRequest(
        string $organization,
        int $server,
        int $site,
        int $domainRecord,
    ): Response {
        return $this->connector->send(new OrganizationsServersSitesDomainsConfigurationsRequest($organization, $server, $site, $domainRecord));
    }

    /**
     * @param  string  $organization  The organization slug
     * @param  int  $server  The server ID
     * @param  int  $site  The site ID
     * @param  int  $domainRecord  The domain record ID
     *
     * @throws FatalRequestException
     * @throws RequestException
     */
    public function organizationsServersSitesDomainsDestroyRequest(
        string $organization,
        int $server,
        int $site,
        int $domainRecord,
    ): Response {
        return $this->connector->send(new OrganizationsServersSitesDomainsDestroyRequest($organization, $server, $site, $domainRecord));
    }

    /**
     * @param  string  $organization  The organization slug
     * @param  int  $server  The server ID
     * @param  int  $site  The site ID
     * @param  null|string  $sort  Available sorts are `name`, `created_at`. You can sort by multiple options by separating them with a comma. To sort in descending order, use `-` sign in front of the sort, for example: `-name`.
     * @param  null|int  $pagesize  The number of results that will be returned per page.
     * @param  null|string  $pagecursor  The cursor to start the pagination from.
     * @param  null|OrganizationsserverssitesdomainsindexFilterstatus  $filterstatus  The status of the domain.
     * @param  null|OrganizationsserverssitesdomainsindexFiltertype  $filtertype  The type of domain.
     *
     * @throws FatalRequestException
     * @throws RequestException
     */
    public function organizationsServersSitesDomainsIndexRequest(
        string $organization,
        int $server,
        int $site,
        ?string $sort = null,
        ?int $pagesize = null,
        ?string $pagecursor = null,
        ?OrganizationsserverssitesdomainsindexFilterstatus $filterstatus = null,
        ?OrganizationsserverssitesdomainsindexFiltertype $filtertype = null,
    ): Response {
        return $this->connector->send(new OrganizationsServersSitesDomainsIndexRequest($organization, $server, $site, $sort, $pagesize, $pagecursor, $filterstatus, $filtertype));
    }

    /**
     * @param  string  $organization  The organization slug
     * @param  int  $server  The server ID
     * @param  int  $site  The site ID
     * @param  int  $domainRecord  The domain record ID
     *
     * @throws FatalRequestException
     * @throws RequestException
     */
    public function organizationsServersSitesDomainsShowRequest(
        string $organization,
        int $server,
        int $site,
        int $domainRecord,
    ): Response {
        return $this->connector->send(new OrganizationsServersSitesDomainsShowRequest($organization, $server, $site, $domainRecord));
    }

    /**
     * @param  string  $organization  The organization slug
     * @param  int  $server  The server ID
     * @param  int  $site  The site ID
     * @param  string  $name  The name of the domain.
     * @param  bool  $allowWildcardSubdomains  Whether to allow wildcard subdomains for the domain.
     *
     * @throws FatalRequestException
     * @throws RequestException
     */
    public function organizationsServersSitesDomainsStoreRequest(
        string $organization,
        int $server,
        int $site,
        string $name,
        bool $allowWildcardSubdomains,
    ): Response {
        return $this->connector->send(new OrganizationsServersSitesDomainsStoreRequest($organization, $server, $site, $name, $allowWildcardSubdomains));
    }

    /**
     * @param  string  $organization  The organization slug
     * @param  int  $server  The server ID
     * @param  int  $site  The site ID
     * @param  int  $domainRecord  The domain record ID
     * @param  null|mixed  $allowWildcardSubdomains  Whether to allow wildcard subdomains for the domain.
     *
     * @throws FatalRequestException
     * @throws RequestException
     */
    public function organizationsServersSitesDomainsUpdateRequest(
        string $organization,
        int $server,
        int $site,
        int $domainRecord,
        mixed $allowWildcardSubdomains = null,
    ): Response {
        return $this->connector->send(new OrganizationsServersSitesDomainsUpdateRequest($organization, $server, $site, $domainRecord, $allowWildcardSubdomains));
    }

    /**
     * @param  string  $organization  The organization slug
     * @param  int  $server  The server ID
     * @param  int  $site  The site ID
     *
     * @throws FatalRequestException
     * @throws RequestException
     */
    public function organizationsServersSitesEnvironmentShowRequest(
        string $organization,
        int $server,
        int $site,
    ): Response {
        return $this->connector->send(new OrganizationsServersSitesEnvironmentShowRequest($organization, $server, $site));
    }

    /**
     * @param  string  $organization  The organization slug
     * @param  int  $server  The server ID
     * @param  int  $site  The site ID
     *
     * @throws FatalRequestException
     * @throws RequestException
     */
    public function organizationsServersSitesEnvironmentUpdateRequest(
        string $organization,
        int $server,
        int $site,
        string $environment,
        ?bool $cache = null,
        ?bool $queues = null,
        mixed $encryptionKey = null,
    ): Response {
        return $this->connector->send(new OrganizationsServersSitesEnvironmentUpdateRequest($organization, $server, $site, $environment, $cache, $queues, $encryptionKey));
    }

    /**
     * @param  string  $organization  The organization slug
     * @param  int  $server  The server ID
     * @param  int  $site  The site ID
     *
     * @throws FatalRequestException
     * @throws RequestException
     */
    public function organizationsServersSitesHealthcheckShowRequest(
        string $organization,
        int $server,
        int $site,
    ): Response {
        return $this->connector->send(new OrganizationsServersSitesHealthcheckShowRequest($organization, $server, $site));
    }

    /**
     * @param  string  $organization  The organization slug
     * @param  int  $server  The server ID
     * @param  int  $site  The site ID
     * @param  null|mixed  $healthcheckEndpoint  The endpoint / URL that should be used to perform healthchecks.
     *
     * @throws FatalRequestException
     * @throws RequestException
     */
    public function organizationsServersSitesHealthcheckUpdateRequest(
        string $organization,
        int $server,
        int $site,
        mixed $healthcheckEndpoint = null,
    ): Response {
        return $this->connector->send(new OrganizationsServersSitesHealthcheckUpdateRequest($organization, $server, $site, $healthcheckEndpoint));
    }

    /**
     * @param  string  $organization  The organization slug
     * @param  int  $server  The server ID
     * @param  int  $site  The site ID
     * @param  int  $heartbeat  The heartbeat ID
     *
     * @throws FatalRequestException
     * @throws RequestException
     */
    public function organizationsServersSitesHeartbeatsDestroyRequest(
        string $organization,
        int $server,
        int $site,
        int $heartbeat,
    ): Response {
        return $this->connector->send(new OrganizationsServersSitesHeartbeatsDestroyRequest($organization, $server, $site, $heartbeat));
    }

    /**
     * @param  string  $organization  The organization slug
     * @param  int  $server  The server ID
     * @param  int  $site  The site ID
     * @param  null|int  $pagesize  The number of results that will be returned per page.
     * @param  null|string  $pagecursor  The cursor to start the pagination from.
     *
     * @throws FatalRequestException
     * @throws RequestException
     */
    public function organizationsServersSitesHeartbeatsIndexRequest(
        string $organization,
        int $server,
        int $site,
        ?int $pagesize = null,
        ?string $pagecursor = null,
    ): Response {
        return $this->connector->send(new OrganizationsServersSitesHeartbeatsIndexRequest($organization, $server, $site, $pagesize, $pagecursor));
    }

    /**
     * @param  string  $organization  The organization slug
     * @param  int  $server  The server ID
     * @param  int  $site  The site ID
     * @param  int  $heartbeat  The heartbeat ID
     *
     * @throws FatalRequestException
     * @throws RequestException
     */
    public function organizationsServersSitesHeartbeatsShowRequest(
        string $organization,
        int $server,
        int $site,
        int $heartbeat,
    ): Response {
        return $this->connector->send(new OrganizationsServersSitesHeartbeatsShowRequest($organization, $server, $site, $heartbeat));
    }

    /**
     * @param  string  $organization  The organization slug
     * @param  int  $server  The server ID
     * @param  int  $site  The site ID
     * @param  string  $name  The name of the heartbeat.
     * @param  null|string  $customFrequency  A cron expression representing the custom frequency at which the client is expected to send a ping, if the frequency is set to -1.
     *
     * @throws FatalRequestException
     * @throws RequestException
     */
    public function organizationsServersSitesHeartbeatsStoreRequest(
        string $organization,
        int $server,
        int $site,
        string $name,
        ?string $customFrequency = null,
    ): Response {
        return $this->connector->send(new OrganizationsServersSitesHeartbeatsStoreRequest($organization, $server, $site, $name, $customFrequency));
    }

    /**
     * @param  string  $organization  The organization slug
     * @param  int  $server  The server ID
     * @param  int  $site  The site ID
     * @param  int  $heartbeat  The heartbeat ID
     * @param  string  $name  The name of the heartbeat.
     * @param  null|string  $customFrequency  A cron expression representing the custom frequency at which the client is expected to send a ping, if the frequency is set to -1.
     *
     * @throws FatalRequestException
     * @throws RequestException
     */
    public function organizationsServersSitesHeartbeatsUpdateRequest(
        string $organization,
        int $server,
        int $site,
        int $heartbeat,
        string $name,
        ?string $customFrequency = null,
    ): Response {
        return $this->connector->send(new OrganizationsServersSitesHeartbeatsUpdateRequest($organization, $server, $site, $heartbeat, $name, $customFrequency));
    }

    /**
     * @param  string  $organization  The organization slug
     * @param  int  $server  The server ID
     * @param  null|string  $sort  Available sorts are `name`, `created_at`, `updated_at`. You can sort by multiple options by separating them with a comma. To sort in descending order, use `-` sign in front of the sort, for example: `-name`.
     * @param  null|string  $include  Available includes are `tags`, `tagsCount`, `tagsExists`, `latestDeployment`, `latestDeploymentCount`, `latestDeploymentExists`. You can include multiple options by separating them with a comma.
     * @param  null|int  $pagesize  The number of results that will be returned per page.
     * @param  null|string  $pagecursor  The cursor to start the pagination from.
     * @param  null|string  $filtername  The name of the site.
     *
     * @throws FatalRequestException
     * @throws RequestException
     */
    public function organizationsServersSitesIndexRequest(
        string $organization,
        int $server,
        ?string $sort = null,
        ?string $include = null,
        ?int $pagesize = null,
        ?string $pagecursor = null,
        ?string $filtername = null,
    ): Response {
        return $this->connector->send(new OrganizationsServersSitesIndexRequest($organization, $server, $sort, $include, $pagesize, $pagecursor, $filtername));
    }

    /**
     * @param  string  $organization  The organization slug
     * @param  int  $server  The server ID
     * @param  int  $site  The site ID
     * @param  null|string  $sort  Available sorts are `id`. You can sort by multiple options by separating them with a comma. To sort in descending order, use `-` sign in front of the sort, for example: `-id`.
     * @param  null|int  $pagesize  The number of results that will be returned per page.
     * @param  null|string  $pagecursor  The cursor to start the pagination from.
     *
     * @throws FatalRequestException
     * @throws RequestException
     */
    public function organizationsServersSitesLoadBalancingNodesIndexRequest(
        string $organization,
        int $server,
        int $site,
        ?string $sort = null,
        ?int $pagesize = null,
        ?string $pagecursor = null,
    ): Response {
        return $this->connector->send(new OrganizationsServersSitesLoadBalancingNodesIndexRequest($organization, $server, $site, $sort, $pagesize, $pagecursor));
    }

    /**
     * @param  string  $organization  The organization slug
     * @param  int  $server  The server ID
     * @param  int  $site  The site ID
     *
     * @throws FatalRequestException
     * @throws RequestException
     */
    public function organizationsServersSitesLoadBalancingNodesUpdateRequest(
        string $organization,
        int $server,
        int $site,
        array $balancing,
    ): Response {
        return $this->connector->send(new OrganizationsServersSitesLoadBalancingNodesUpdateRequest($organization, $server, $site, $balancing));
    }

    /**
     * @param  string  $organization  The organization slug
     * @param  int  $server  The server ID
     * @param  int  $site  The site ID
     *
     * @throws FatalRequestException
     * @throws RequestException
     */
    public function organizationsServersSitesLogsApplicationDestroyRequest(
        string $organization,
        int $server,
        int $site,
    ): Response {
        return $this->connector->send(new OrganizationsServersSitesLogsApplicationDestroyRequest($organization, $server, $site));
    }

    /**
     * @param  string  $organization  The organization slug
     * @param  int  $server  The server ID
     * @param  int  $site  The site ID
     *
     * @throws FatalRequestException
     * @throws RequestException
     */
    public function organizationsServersSitesLogsApplicationShowRequest(
        string $organization,
        int $server,
        int $site,
    ): Response {
        return $this->connector->send(new OrganizationsServersSitesLogsApplicationShowRequest($organization, $server, $site));
    }

    /**
     * @param  string  $organization  The organization slug
     * @param  int  $server  The server ID
     * @param  int  $site  The site ID
     *
     * @throws FatalRequestException
     * @throws RequestException
     */
    public function organizationsServersSitesLogsNginxAccessDestroyRequest(
        string $organization,
        int $server,
        int $site,
    ): Response {
        return $this->connector->send(new OrganizationsServersSitesLogsNginxAccessDestroyRequest($organization, $server, $site));
    }

    /**
     * @param  string  $organization  The organization slug
     * @param  int  $server  The server ID
     * @param  int  $site  The site ID
     *
     * @throws FatalRequestException
     * @throws RequestException
     */
    public function organizationsServersSitesLogsNginxAccessShowRequest(
        string $organization,
        int $server,
        int $site,
    ): Response {
        return $this->connector->send(new OrganizationsServersSitesLogsNginxAccessShowRequest($organization, $server, $site));
    }

    /**
     * @param  string  $organization  The organization slug
     * @param  int  $server  The server ID
     * @param  int  $site  The site ID
     *
     * @throws FatalRequestException
     * @throws RequestException
     */
    public function organizationsServersSitesLogsNginxErrorDestroyRequest(
        string $organization,
        int $server,
        int $site,
    ): Response {
        return $this->connector->send(new OrganizationsServersSitesLogsNginxErrorDestroyRequest($organization, $server, $site));
    }

    /**
     * @param  string  $organization  The organization slug
     * @param  int  $server  The server ID
     * @param  int  $site  The site ID
     *
     * @throws FatalRequestException
     * @throws RequestException
     */
    public function organizationsServersSitesLogsNginxErrorShowRequest(
        string $organization,
        int $server,
        int $site,
    ): Response {
        return $this->connector->send(new OrganizationsServersSitesLogsNginxErrorShowRequest($organization, $server, $site));
    }

    /**
     * @param  string  $organization  The organization slug
     * @param  int  $server  The server ID
     * @param  int  $site  The site ID
     *
     * @throws FatalRequestException
     * @throws RequestException
     */
    public function organizationsServersSitesNginxShowRequest(string $organization, int $server, int $site): Response
    {
        return $this->connector->send(new OrganizationsServersSitesNginxShowRequest($organization, $server, $site));
    }

    /**
     * @param  string  $organization  The organization slug
     * @param  int  $server  The server ID
     * @param  int  $site  The site ID
     *
     * @throws FatalRequestException
     * @throws RequestException
     */
    public function organizationsServersSitesNginxUpdateRequest(
        string $organization,
        int $server,
        int $site,
        string $config,
    ): Response {
        return $this->connector->send(new OrganizationsServersSitesNginxUpdateRequest($organization, $server, $site, $config));
    }

    /**
     * @param  string  $organization  The organization slug
     * @param  int  $server  The server ID
     * @param  null|string  $statamicSetup  The type of setup for Statmic apps.
     * @param  null|string  $statamicStarterKit  The starter kit for the Statamic app.
     * @param  null|string  $nuxtNextMode  The render mode for Next/Nuxt applications.
     * @param  null|string  $nuxtNextBuildCommand  The build command for Next/Nuxt applications.
     * @param  null|int  $nuxtNextPort  The port used for Next/Nuxt applications.
     * @param  null|bool  $pushToDeploy  Automatically trigger a new deployment when changes are pushed to the environment's Git branch.
     * @param  null|array  $sharedPaths  A list of files or directories to be shared between releases for zero-downtime deployments.
     *
     * @throws FatalRequestException
     * @throws RequestException
     */
    public function organizationsServersSitesStoreRequest(
        string $organization,
        int $server,
        mixed $domainMode = null,
        ?string $name = null,
        ?string $wwwRedirectType = null,
        ?string $allowWildcardSubdomains = null,
        mixed $webDirectory = null,
        ?bool $isIsolated = null,
        ?string $isolatedUser = null,
        ?bool $zeroDowntimeDeployments = null,
        ?int $nginxTemplateId = null,
        mixed $repository = null,
        mixed $branch = null,
        mixed $databaseId = null,
        ?string $databaseUserId = null,
        ?string $statamicSetup = null,
        ?string $statamicStarterKit = null,
        ?string $statamicSuperUserEmail = null,
        ?string $statamicSuperUserPassword = null,
        ?bool $installComposerDependencies = null,
        ?bool $generateDeployKey = null,
        ?string $publicDeployKey = null,
        ?string $privateDeployKey = null,
        ?string $nuxtNextMode = null,
        ?string $nuxtNextBuildCommand = null,
        ?int $nuxtNextPort = null,
        ?bool $pushToDeploy = null,
        mixed $tags = null,
        ?array $sharedPaths = null,
    ): Response {
        return $this->connector->send(new OrganizationsServersSitesStoreRequest($organization, $server, $domainMode, $name, $wwwRedirectType, $allowWildcardSubdomains, $webDirectory, $isIsolated, $isolatedUser, $zeroDowntimeDeployments, $nginxTemplateId, $repository, $branch, $databaseId, $databaseUserId, $statamicSetup, $statamicStarterKit, $statamicSuperUserEmail, $statamicSuperUserPassword, $installComposerDependencies, $generateDeployKey, $publicDeployKey, $privateDeployKey, $nuxtNextMode, $nuxtNextBuildCommand, $nuxtNextPort, $pushToDeploy, $tags, $sharedPaths));
    }

    /**
     * @param  string  $organization  The organization slug
     * @param  int  $server  The server ID
     * @param  int  $site  The site ID
     * @param  null|bool  $pushToDeploy  Automatically trigger a new deployment when changes are pushed to the environment's Git branch.
     *
     * @throws FatalRequestException
     * @throws RequestException
     */
    public function organizationsServersSitesUpdateRequest(
        string $organization,
        int $server,
        int $site,
        mixed $directory = null,
        ?bool $pushToDeploy = null,
        mixed $repositoryBranch = null,
    ): Response {
        return $this->connector->send(new OrganizationsServersSitesUpdateRequest($organization, $server, $site, $directory, $pushToDeploy, $repositoryBranch));
    }

    /**
     * @param  string  $organization  The organization slug
     * @param  null|string  $include  Available includes are `tags`, `tagsCount`, `tagsExists`, `latestDeployment`, `latestDeploymentCount`, `latestDeploymentExists`. You can include multiple options by separating them with a comma.
     * @param  null|int  $pagesize  The number of results that will be returned per page.
     * @param  null|string  $pagecursor  The cursor to start the pagination from.
     *
     * @throws FatalRequestException
     * @throws RequestException
     */
    public function organizationsSitesIndexRequest(
        string $organization,
        ?string $include = null,
        ?int $pagesize = null,
        ?string $pagecursor = null,
        ?string $filtername = null,
    ): Response {
        return $this->connector->send(new OrganizationsSitesIndexRequest($organization, $include, $pagesize, $pagecursor, $filtername));
    }

    /**
     * @param  string  $organization  The organization slug
     * @param  int  $site  The site ID
     *
     * @throws FatalRequestException
     * @throws RequestException
     */
    public function organizationsSitesShowRequest(string $organization, int $site): Response
    {
        return $this->connector->send(new OrganizationsSitesShowRequest($organization, $site));
    }

    /**
     * @param  null|string  $include  Available includes are `tags`, `tagsCount`, `tagsExists`, `latestDeployment`, `latestDeploymentCount`, `latestDeploymentExists`. You can include multiple options by separating them with a comma.
     * @param  null|int  $pagesize  The number of results that will be returned per page.
     * @param  null|string  $pagecursor  The cursor to start the pagination from.
     *
     * @throws FatalRequestException
     * @throws RequestException
     */
    public function sitesIndexRequest(
        ?string $include = null,
        ?int $pagesize = null,
        ?string $pagecursor = null,
        ?string $filtername = null,
    ): Response {
        return $this->connector->send(new SitesIndexRequest($include, $pagesize, $pagecursor, $filtername));
    }
}
