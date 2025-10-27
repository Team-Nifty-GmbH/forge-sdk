<?php

namespace TeamNifty\Forge\Resource;

use Saloon\Exceptions\Request\FatalRequestException;
use Saloon\Exceptions\Request\RequestException;
use Saloon\Http\BaseResource;
use Saloon\Http\Response;
use TeamNifty\Forge\Requests\Deployments\OrganizationsServersSitesDeploymentsDeployHookShowRequest;
use TeamNifty\Forge\Requests\Deployments\OrganizationsServersSitesDeploymentsDeployHookUpdateRequest;
use TeamNifty\Forge\Requests\Deployments\OrganizationsServersSitesDeploymentsIndexRequest;
use TeamNifty\Forge\Requests\Deployments\OrganizationsServersSitesDeploymentsLogShowRequest;
use TeamNifty\Forge\Requests\Deployments\OrganizationsServersSitesDeploymentsPushToDeployDestroyRequest;
use TeamNifty\Forge\Requests\Deployments\OrganizationsServersSitesDeploymentsPushToDeployStoreRequest;
use TeamNifty\Forge\Requests\Deployments\OrganizationsServersSitesDeploymentsScriptShowRequest;
use TeamNifty\Forge\Requests\Deployments\OrganizationsServersSitesDeploymentsScriptUpdateRequest;
use TeamNifty\Forge\Requests\Deployments\OrganizationsServersSitesDeploymentsShowRequest;
use TeamNifty\Forge\Requests\Deployments\OrganizationsServersSitesDeploymentsStatusDestroyRequest;
use TeamNifty\Forge\Requests\Deployments\OrganizationsServersSitesDeploymentsStatusShowRequest;
use TeamNifty\Forge\Requests\Deployments\OrganizationsServersSitesDeploymentsStoreRequest;
use TeamNifty\Forge\Requests\Deployments\OrganizationsServersSitesWebhooksDestroyRequest;
use TeamNifty\Forge\Requests\Deployments\OrganizationsServersSitesWebhooksIndexRequest;
use TeamNifty\Forge\Requests\Deployments\OrganizationsServersSitesWebhooksShowRequest;
use TeamNifty\Forge\Requests\Deployments\OrganizationsServersSitesWebhooksStoreRequest;

class Deployments extends BaseResource
{
    /**
     * @param  string  $organization  The organization slug
     * @param  int  $server  The server ID
     * @param  int  $site  The site ID
     *
     * @throws FatalRequestException
     * @throws RequestException
     */
    public function organizationsServersSitesDeploymentsDeployHookShowRequest(
        string $organization,
        int $server,
        int $site,
    ): Response {
        return $this->connector->send(new OrganizationsServersSitesDeploymentsDeployHookShowRequest($organization, $server, $site));
    }

    /**
     * @param  string  $organization  The organization slug
     * @param  int  $server  The server ID
     * @param  int  $site  The site ID
     *
     * @throws FatalRequestException
     * @throws RequestException
     */
    public function organizationsServersSitesDeploymentsDeployHookUpdateRequest(
        string $organization,
        int $server,
        int $site,
    ): Response {
        return $this->connector->send(new OrganizationsServersSitesDeploymentsDeployHookUpdateRequest($organization, $server, $site));
    }

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
     *
     * @throws FatalRequestException
     * @throws RequestException
     */
    public function organizationsServersSitesDeploymentsIndexRequest(
        string $organization,
        int $server,
        int $site,
        ?string $sort = null,
        ?int $pagesize = null,
        ?string $pagecursor = null,
        ?string $filtercommitHash = null,
        ?string $filtercommitMessage = null,
        ?string $filtercommitAuthor = null,
    ): Response {
        return $this->connector->send(new OrganizationsServersSitesDeploymentsIndexRequest($organization, $server, $site, $sort, $pagesize, $pagecursor, $filtercommitHash, $filtercommitMessage, $filtercommitAuthor));
    }

    /**
     * @param  string  $organization  The organization slug
     * @param  int  $server  The server ID
     * @param  int  $site  The site ID
     * @param  int  $deployment  The deployment ID
     *
     * @throws FatalRequestException
     * @throws RequestException
     */
    public function organizationsServersSitesDeploymentsLogShowRequest(
        string $organization,
        int $server,
        int $site,
        int $deployment,
    ): Response {
        return $this->connector->send(new OrganizationsServersSitesDeploymentsLogShowRequest($organization, $server, $site, $deployment));
    }

    /**
     * @param  string  $organization  The organization slug
     * @param  int  $server  The server ID
     * @param  int  $site  The site ID
     *
     * @throws FatalRequestException
     * @throws RequestException
     */
    public function organizationsServersSitesDeploymentsPushToDeployDestroyRequest(
        string $organization,
        int $server,
        int $site,
    ): Response {
        return $this->connector->send(new OrganizationsServersSitesDeploymentsPushToDeployDestroyRequest($organization, $server, $site));
    }

    /**
     * @param  string  $organization  The organization slug
     * @param  int  $server  The server ID
     * @param  int  $site  The site ID
     *
     * @throws FatalRequestException
     * @throws RequestException
     */
    public function organizationsServersSitesDeploymentsPushToDeployStoreRequest(
        string $organization,
        int $server,
        int $site,
    ): Response {
        return $this->connector->send(new OrganizationsServersSitesDeploymentsPushToDeployStoreRequest($organization, $server, $site));
    }

    /**
     * @param  string  $organization  The organization slug
     * @param  int  $server  The server ID
     * @param  int  $site  The site ID
     *
     * @throws FatalRequestException
     * @throws RequestException
     */
    public function organizationsServersSitesDeploymentsScriptShowRequest(
        string $organization,
        int $server,
        int $site,
    ): Response {
        return $this->connector->send(new OrganizationsServersSitesDeploymentsScriptShowRequest($organization, $server, $site));
    }

    /**
     * @param  string  $organization  The organization slug
     * @param  int  $server  The server ID
     * @param  int  $site  The site ID
     *
     * @throws FatalRequestException
     * @throws RequestException
     */
    public function organizationsServersSitesDeploymentsScriptUpdateRequest(
        string $organization,
        int $server,
        int $site,
        string $content,
        mixed $autoSource = null,
    ): Response {
        return $this->connector->send(new OrganizationsServersSitesDeploymentsScriptUpdateRequest($organization, $server, $site, $content, $autoSource));
    }

    /**
     * @param  string  $organization  The organization slug
     * @param  int  $server  The server ID
     * @param  int  $site  The site ID
     * @param  int  $deployment  The deployment ID
     *
     * @throws FatalRequestException
     * @throws RequestException
     */
    public function organizationsServersSitesDeploymentsShowRequest(
        string $organization,
        int $server,
        int $site,
        int $deployment,
    ): Response {
        return $this->connector->send(new OrganizationsServersSitesDeploymentsShowRequest($organization, $server, $site, $deployment));
    }

    /**
     * @param  string  $organization  The organization slug
     * @param  int  $server  The server ID
     * @param  int  $site  The site ID
     *
     * @throws FatalRequestException
     * @throws RequestException
     */
    public function organizationsServersSitesDeploymentsStatusDestroyRequest(
        string $organization,
        int $server,
        int $site,
    ): Response {
        return $this->connector->send(new OrganizationsServersSitesDeploymentsStatusDestroyRequest($organization, $server, $site));
    }

    /**
     * @param  string  $organization  The organization slug
     * @param  int  $server  The server ID
     * @param  int  $site  The site ID
     *
     * @throws FatalRequestException
     * @throws RequestException
     */
    public function organizationsServersSitesDeploymentsStatusShowRequest(
        string $organization,
        int $server,
        int $site,
    ): Response {
        return $this->connector->send(new OrganizationsServersSitesDeploymentsStatusShowRequest($organization, $server, $site));
    }

    /**
     * @param  string  $organization  The organization slug
     * @param  int  $server  The server ID
     * @param  int  $site  The site ID
     *
     * @throws FatalRequestException
     * @throws RequestException
     */
    public function organizationsServersSitesDeploymentsStoreRequest(
        string $organization,
        int $server,
        int $site,
    ): Response {
        return $this->connector->send(new OrganizationsServersSitesDeploymentsStoreRequest($organization, $server, $site));
    }

    /**
     * @param  string  $organization  The organization slug
     * @param  int  $server  The server ID
     * @param  int  $site  The site ID
     * @param  int  $deploymentWebhook  The deployment webhook ID
     *
     * @throws FatalRequestException
     * @throws RequestException
     */
    public function organizationsServersSitesWebhooksDestroyRequest(
        string $organization,
        int $server,
        int $site,
        int $deploymentWebhook,
    ): Response {
        return $this->connector->send(new OrganizationsServersSitesWebhooksDestroyRequest($organization, $server, $site, $deploymentWebhook));
    }

    /**
     * @param  string  $organization  The organization slug
     * @param  int  $server  The server ID
     * @param  int  $site  The site ID
     * @param  null|string  $sort  Available sorts are `created_at`, `updated_at`. You can sort by multiple options by separating them with a comma. To sort in descending order, use `-` sign in front of the sort, for example: `-created_at`.
     * @param  null|int  $pagesize  The number of results that will be returned per page.
     * @param  null|string  $pagecursor  The cursor to start the pagination from.
     *
     * @throws FatalRequestException
     * @throws RequestException
     */
    public function organizationsServersSitesWebhooksIndexRequest(
        string $organization,
        int $server,
        int $site,
        ?string $sort = null,
        ?int $pagesize = null,
        ?string $pagecursor = null,
    ): Response {
        return $this->connector->send(new OrganizationsServersSitesWebhooksIndexRequest($organization, $server, $site, $sort, $pagesize, $pagecursor));
    }

    /**
     * @param  string  $organization  The organization slug
     * @param  int  $server  The server ID
     * @param  int  $site  The site ID
     * @param  int  $deploymentWebhook  The deployment webhook ID
     *
     * @throws FatalRequestException
     * @throws RequestException
     */
    public function organizationsServersSitesWebhooksShowRequest(
        string $organization,
        int $server,
        int $site,
        int $deploymentWebhook,
    ): Response {
        return $this->connector->send(new OrganizationsServersSitesWebhooksShowRequest($organization, $server, $site, $deploymentWebhook));
    }

    /**
     * @param  string  $organization  The organization slug
     * @param  int  $server  The server ID
     * @param  int  $site  The site ID
     *
     * @throws FatalRequestException
     * @throws RequestException
     */
    public function organizationsServersSitesWebhooksStoreRequest(
        string $organization,
        int $server,
        int $site,
        string $url,
    ): Response {
        return $this->connector->send(new OrganizationsServersSitesWebhooksStoreRequest($organization, $server, $site, $url));
    }
}
