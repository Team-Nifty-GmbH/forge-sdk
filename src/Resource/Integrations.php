<?php

namespace TeamNifty\Forge\Resource;

use Saloon\Exceptions\Request\FatalRequestException;
use Saloon\Exceptions\Request\RequestException;
use Saloon\Http\BaseResource;
use Saloon\Http\Response;
use TeamNifty\Forge\Requests\Integrations\OrganizationsServersSitesIntegrationsHorizonDestroyRequest;
use TeamNifty\Forge\Requests\Integrations\OrganizationsServersSitesIntegrationsHorizonShowRequest;
use TeamNifty\Forge\Requests\Integrations\OrganizationsServersSitesIntegrationsHorizonStoreRequest;
use TeamNifty\Forge\Requests\Integrations\OrganizationsServersSitesIntegrationsInertiaShowRequest;
use TeamNifty\Forge\Requests\Integrations\OrganizationsServersSitesIntegrationsInertiaStoreRequest;
use TeamNifty\Forge\Requests\Integrations\OrganizationsServersSitesIntegrationsLaravelMaintenanceDestroyRequest;
use TeamNifty\Forge\Requests\Integrations\OrganizationsServersSitesIntegrationsLaravelMaintenanceShowRequest;
use TeamNifty\Forge\Requests\Integrations\OrganizationsServersSitesIntegrationsLaravelMaintenanceStoreRequest;
use TeamNifty\Forge\Requests\Integrations\OrganizationsServersSitesIntegrationsLaravelSchedulerDestroyRequest;
use TeamNifty\Forge\Requests\Integrations\OrganizationsServersSitesIntegrationsLaravelSchedulerShowRequest;
use TeamNifty\Forge\Requests\Integrations\OrganizationsServersSitesIntegrationsLaravelSchedulerStoreRequest;
use TeamNifty\Forge\Requests\Integrations\OrganizationsServersSitesIntegrationsOctaneDestroyRequest;
use TeamNifty\Forge\Requests\Integrations\OrganizationsServersSitesIntegrationsOctaneShowRequest;
use TeamNifty\Forge\Requests\Integrations\OrganizationsServersSitesIntegrationsOctaneStoreRequest;
use TeamNifty\Forge\Requests\Integrations\OrganizationsServersSitesIntegrationsPulseDestroyRequest;
use TeamNifty\Forge\Requests\Integrations\OrganizationsServersSitesIntegrationsPulseShowRequest;
use TeamNifty\Forge\Requests\Integrations\OrganizationsServersSitesIntegrationsPulseStoreRequest;
use TeamNifty\Forge\Requests\Integrations\OrganizationsServersSitesIntegrationsReverbDestroyRequest;
use TeamNifty\Forge\Requests\Integrations\OrganizationsServersSitesIntegrationsReverbShowRequest;
use TeamNifty\Forge\Requests\Integrations\OrganizationsServersSitesIntegrationsReverbStoreRequest;

class Integrations extends BaseResource
{
    /**
     * @param  string  $organization  The organization slug
     * @param  int  $server  The server ID
     * @param  int  $site  The site ID
     *
     * @throws FatalRequestException
     * @throws RequestException
     */
    public function organizationsServersSitesIntegrationsHorizonDestroyRequest(
        string $organization,
        int $server,
        int $site,
    ): Response {
        return $this->connector->send(new OrganizationsServersSitesIntegrationsHorizonDestroyRequest($organization, $server, $site));
    }

    /**
     * @param  string  $organization  The organization slug
     * @param  int  $server  The server ID
     * @param  int  $site  The site ID
     *
     * @throws FatalRequestException
     * @throws RequestException
     */
    public function organizationsServersSitesIntegrationsHorizonShowRequest(
        string $organization,
        int $server,
        int $site,
    ): Response {
        return $this->connector->send(new OrganizationsServersSitesIntegrationsHorizonShowRequest($organization, $server, $site));
    }

    /**
     * @param  string  $organization  The organization slug
     * @param  int  $server  The server ID
     * @param  int  $site  The site ID
     *
     * @throws FatalRequestException
     * @throws RequestException
     */
    public function organizationsServersSitesIntegrationsHorizonStoreRequest(
        string $organization,
        int $server,
        int $site,
    ): Response {
        return $this->connector->send(new OrganizationsServersSitesIntegrationsHorizonStoreRequest($organization, $server, $site));
    }

    /**
     * @param  string  $organization  The organization slug
     * @param  int  $server  The server ID
     * @param  int  $site  The site ID
     *
     * @throws FatalRequestException
     * @throws RequestException
     */
    public function organizationsServersSitesIntegrationsInertiaShowRequest(
        string $organization,
        int $server,
        int $site,
    ): Response {
        return $this->connector->send(new OrganizationsServersSitesIntegrationsInertiaShowRequest($organization, $server, $site));
    }

    /**
     * @param  string  $organization  The organization slug
     * @param  int  $server  The server ID
     * @param  int  $site  The site ID
     *
     * @throws FatalRequestException
     * @throws RequestException
     */
    public function organizationsServersSitesIntegrationsInertiaStoreRequest(
        string $organization,
        int $server,
        int $site,
    ): Response {
        return $this->connector->send(new OrganizationsServersSitesIntegrationsInertiaStoreRequest($organization, $server, $site));
    }

    /**
     * @param  string  $organization  The organization slug
     * @param  int  $server  The server ID
     * @param  int  $site  The site ID
     *
     * @throws FatalRequestException
     * @throws RequestException
     */
    public function organizationsServersSitesIntegrationsLaravelMaintenanceDestroyRequest(
        string $organization,
        int $server,
        int $site,
    ): Response {
        return $this->connector->send(new OrganizationsServersSitesIntegrationsLaravelMaintenanceDestroyRequest($organization, $server, $site));
    }

    /**
     * @param  string  $organization  The organization slug
     * @param  int  $server  The server ID
     * @param  int  $site  The site ID
     *
     * @throws FatalRequestException
     * @throws RequestException
     */
    public function organizationsServersSitesIntegrationsLaravelMaintenanceShowRequest(
        string $organization,
        int $server,
        int $site,
    ): Response {
        return $this->connector->send(new OrganizationsServersSitesIntegrationsLaravelMaintenanceShowRequest($organization, $server, $site));
    }

    /**
     * @param  string  $organization  The organization slug
     * @param  int  $server  The server ID
     * @param  int  $site  The site ID
     * @param  null|mixed  $secret  The secret phrase that allows access to the application while in maintenance mode.
     * @param  null|mixed  $redirect  The redirect URL to which all requests should be sent while in maintenance mode.
     *
     * @throws FatalRequestException
     * @throws RequestException
     */
    public function organizationsServersSitesIntegrationsLaravelMaintenanceStoreRequest(
        string $organization,
        int $server,
        int $site,
        mixed $secret = null,
        mixed $redirect = null,
    ): Response {
        return $this->connector->send(new OrganizationsServersSitesIntegrationsLaravelMaintenanceStoreRequest($organization, $server, $site, $secret, $redirect));
    }

    /**
     * @param  string  $organization  The organization slug
     * @param  int  $server  The server ID
     * @param  int  $site  The site ID
     *
     * @throws FatalRequestException
     * @throws RequestException
     */
    public function organizationsServersSitesIntegrationsLaravelSchedulerDestroyRequest(
        string $organization,
        int $server,
        int $site,
    ): Response {
        return $this->connector->send(new OrganizationsServersSitesIntegrationsLaravelSchedulerDestroyRequest($organization, $server, $site));
    }

    /**
     * @param  string  $organization  The organization slug
     * @param  int  $server  The server ID
     * @param  int  $site  The site ID
     *
     * @throws FatalRequestException
     * @throws RequestException
     */
    public function organizationsServersSitesIntegrationsLaravelSchedulerShowRequest(
        string $organization,
        int $server,
        int $site,
    ): Response {
        return $this->connector->send(new OrganizationsServersSitesIntegrationsLaravelSchedulerShowRequest($organization, $server, $site));
    }

    /**
     * @param  string  $organization  The organization slug
     * @param  int  $server  The server ID
     * @param  int  $site  The site ID
     *
     * @throws FatalRequestException
     * @throws RequestException
     */
    public function organizationsServersSitesIntegrationsLaravelSchedulerStoreRequest(
        string $organization,
        int $server,
        int $site,
    ): Response {
        return $this->connector->send(new OrganizationsServersSitesIntegrationsLaravelSchedulerStoreRequest($organization, $server, $site));
    }

    /**
     * @param  string  $organization  The organization slug
     * @param  int  $server  The server ID
     * @param  int  $site  The site ID
     *
     * @throws FatalRequestException
     * @throws RequestException
     */
    public function organizationsServersSitesIntegrationsOctaneDestroyRequest(
        string $organization,
        int $server,
        int $site,
    ): Response {
        return $this->connector->send(new OrganizationsServersSitesIntegrationsOctaneDestroyRequest($organization, $server, $site));
    }

    /**
     * @param  string  $organization  The organization slug
     * @param  int  $server  The server ID
     * @param  int  $site  The site ID
     *
     * @throws FatalRequestException
     * @throws RequestException
     */
    public function organizationsServersSitesIntegrationsOctaneShowRequest(
        string $organization,
        int $server,
        int $site,
    ): Response {
        return $this->connector->send(new OrganizationsServersSitesIntegrationsOctaneShowRequest($organization, $server, $site));
    }

    /**
     * @param  string  $organization  The organization slug
     * @param  int  $server  The server ID
     * @param  int  $site  The site ID
     *
     * @throws FatalRequestException
     * @throws RequestException
     */
    public function organizationsServersSitesIntegrationsOctaneStoreRequest(
        string $organization,
        int $server,
        int $site,
        string $port,
    ): Response {
        return $this->connector->send(new OrganizationsServersSitesIntegrationsOctaneStoreRequest($organization, $server, $site, $port));
    }

    /**
     * @param  string  $organization  The organization slug
     * @param  int  $server  The server ID
     * @param  int  $site  The site ID
     *
     * @throws FatalRequestException
     * @throws RequestException
     */
    public function organizationsServersSitesIntegrationsPulseDestroyRequest(
        string $organization,
        int $server,
        int $site,
    ): Response {
        return $this->connector->send(new OrganizationsServersSitesIntegrationsPulseDestroyRequest($organization, $server, $site));
    }

    /**
     * @param  string  $organization  The organization slug
     * @param  int  $server  The server ID
     * @param  int  $site  The site ID
     *
     * @throws FatalRequestException
     * @throws RequestException
     */
    public function organizationsServersSitesIntegrationsPulseShowRequest(
        string $organization,
        int $server,
        int $site,
    ): Response {
        return $this->connector->send(new OrganizationsServersSitesIntegrationsPulseShowRequest($organization, $server, $site));
    }

    /**
     * @param  string  $organization  The organization slug
     * @param  int  $server  The server ID
     * @param  int  $site  The site ID
     *
     * @throws FatalRequestException
     * @throws RequestException
     */
    public function organizationsServersSitesIntegrationsPulseStoreRequest(
        string $organization,
        int $server,
        int $site,
    ): Response {
        return $this->connector->send(new OrganizationsServersSitesIntegrationsPulseStoreRequest($organization, $server, $site));
    }

    /**
     * @param  string  $organization  The organization slug
     * @param  int  $server  The server ID
     * @param  int  $site  The site ID
     *
     * @throws FatalRequestException
     * @throws RequestException
     */
    public function organizationsServersSitesIntegrationsReverbDestroyRequest(
        string $organization,
        int $server,
        int $site,
    ): Response {
        return $this->connector->send(new OrganizationsServersSitesIntegrationsReverbDestroyRequest($organization, $server, $site));
    }

    /**
     * @param  string  $organization  The organization slug
     * @param  int  $server  The server ID
     * @param  int  $site  The site ID
     *
     * @throws FatalRequestException
     * @throws RequestException
     */
    public function organizationsServersSitesIntegrationsReverbShowRequest(
        string $organization,
        int $server,
        int $site,
    ): Response {
        return $this->connector->send(new OrganizationsServersSitesIntegrationsReverbShowRequest($organization, $server, $site));
    }

    /**
     * @param  string  $organization  The organization slug
     * @param  int  $server  The server ID
     * @param  int  $site  The site ID
     *
     * @throws FatalRequestException
     * @throws RequestException
     */
    public function organizationsServersSitesIntegrationsReverbStoreRequest(
        string $organization,
        int $server,
        int $site,
        string $host,
        string $port,
        int $connections,
    ): Response {
        return $this->connector->send(new OrganizationsServersSitesIntegrationsReverbStoreRequest($organization, $server, $site, $host, $port, $connections));
    }
}
