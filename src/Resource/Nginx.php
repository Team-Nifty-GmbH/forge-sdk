<?php

namespace TeamNifty\Forge\Resource;

use Saloon\Exceptions\Request\FatalRequestException;
use Saloon\Exceptions\Request\RequestException;
use Saloon\Http\BaseResource;
use Saloon\Http\Response;
use TeamNifty\Forge\Requests\Nginx\OrganizationsServersNginxTemplatesDestroyRequest;
use TeamNifty\Forge\Requests\Nginx\OrganizationsServersNginxTemplatesIndexRequest;
use TeamNifty\Forge\Requests\Nginx\OrganizationsServersNginxTemplatesShowRequest;
use TeamNifty\Forge\Requests\Nginx\OrganizationsServersNginxTemplatesStoreRequest;
use TeamNifty\Forge\Requests\Nginx\OrganizationsServersNginxTemplatesUpdateRequest;

class Nginx extends BaseResource
{
    /**
     * @param  string  $organization  The organization slug
     * @param  int  $server  The server ID
     * @param  int  $nginxTemplate  The nginx template ID
     *
     * @throws FatalRequestException
     * @throws RequestException
     */
    public function organizationsServersNginxTemplatesDestroyRequest(
        string $organization,
        int $server,
        int $nginxTemplate,
    ): Response {
        return $this->connector->send(new OrganizationsServersNginxTemplatesDestroyRequest($organization, $server, $nginxTemplate));
    }

    /**
     * @param  string  $organization  The organization slug
     * @param  int  $server  The server ID
     * @param  null|string  $sort  Available sorts are `created_at`, `updated_at`, `name`. You can sort by multiple options by separating them with a comma. To sort in descending order, use `-` sign in front of the sort, for example: `-created_at`.
     * @param  null|int  $pagesize  The number of results that will be returned per page.
     * @param  null|string  $pagecursor  The cursor to start the pagination from.
     * @param  null|string  $filtername  The name of the template.
     *
     * @throws FatalRequestException
     * @throws RequestException
     */
    public function organizationsServersNginxTemplatesIndexRequest(
        string $organization,
        int $server,
        ?string $sort = null,
        ?int $pagesize = null,
        ?string $pagecursor = null,
        ?string $filtername = null,
    ): Response {
        return $this->connector->send(new OrganizationsServersNginxTemplatesIndexRequest($organization, $server, $sort, $pagesize, $pagecursor, $filtername));
    }

    /**
     * @param  string  $organization  The organization slug
     * @param  int  $server  The server ID
     * @param  int  $nginxTemplate  The nginx template ID
     *
     * @throws FatalRequestException
     * @throws RequestException
     */
    public function organizationsServersNginxTemplatesShowRequest(
        string $organization,
        int $server,
        int $nginxTemplate,
    ): Response {
        return $this->connector->send(new OrganizationsServersNginxTemplatesShowRequest($organization, $server, $nginxTemplate));
    }

    /**
     * @param  string  $organization  The organization slug
     * @param  int  $server  The server ID
     * @param  string  $name  The name of the Nginx template.
     * @param  string  $content  The content of the Nginx template.
     *
     * @throws FatalRequestException
     * @throws RequestException
     */
    public function organizationsServersNginxTemplatesStoreRequest(
        string $organization,
        int $server,
        string $name,
        string $content,
    ): Response {
        return $this->connector->send(new OrganizationsServersNginxTemplatesStoreRequest($organization, $server, $name, $content));
    }

    /**
     * @param  string  $organization  The organization slug
     * @param  int  $server  The server ID
     * @param  int  $nginxTemplate  The nginx template ID
     * @param  string  $name  The name of the nginx template.
     * @param  string  $content  The content of the nginx template.
     *
     * @throws FatalRequestException
     * @throws RequestException
     */
    public function organizationsServersNginxTemplatesUpdateRequest(
        string $organization,
        int $server,
        int $nginxTemplate,
        string $name,
        string $content,
    ): Response {
        return $this->connector->send(new OrganizationsServersNginxTemplatesUpdateRequest($organization, $server, $nginxTemplate, $name, $content));
    }
}
