<?php

namespace TeamNifty\Forge\Resource;

use Saloon\Exceptions\Request\FatalRequestException;
use Saloon\Exceptions\Request\RequestException;
use Saloon\Http\BaseResource;
use Saloon\Http\Response;
use TeamNifty\Forge\Requests\Teams\OrganizationsTeamsDestroyRequest;
use TeamNifty\Forge\Requests\Teams\OrganizationsTeamsIndexRequest;
use TeamNifty\Forge\Requests\Teams\OrganizationsTeamsInvitesDestroyRequest;
use TeamNifty\Forge\Requests\Teams\OrganizationsTeamsInvitesIndexRequest;
use TeamNifty\Forge\Requests\Teams\OrganizationsTeamsInvitesShowRequest;
use TeamNifty\Forge\Requests\Teams\OrganizationsTeamsInvitesStoreRequest;
use TeamNifty\Forge\Requests\Teams\OrganizationsTeamsMembersDestroyRequest;
use TeamNifty\Forge\Requests\Teams\OrganizationsTeamsMembersIndexRequest;
use TeamNifty\Forge\Requests\Teams\OrganizationsTeamsMembersShowRequest;
use TeamNifty\Forge\Requests\Teams\OrganizationsTeamsMembersUpdateRequest;
use TeamNifty\Forge\Requests\Teams\OrganizationsTeamsShowRequest;
use TeamNifty\Forge\Requests\Teams\OrganizationsTeamsStoreRequest;
use TeamNifty\Forge\Requests\Teams\OrganizationsTeamsUpdateRequest;

class Teams extends BaseResource
{
    /**
     * @param  string  $organization  The organization slug
     * @param  int  $team  The team ID
     *
     * @throws FatalRequestException
     * @throws RequestException
     */
    public function organizationsTeamsDestroyRequest(string $organization, int $team): Response
    {
        return $this->connector->send(new OrganizationsTeamsDestroyRequest($organization, $team));
    }

    /**
     * @param  string  $organization  The organization slug
     * @param  null|int  $pagesize  The number of results that will be returned per page.
     * @param  null|string  $pagecursor  The cursor to start the pagination from.
     *
     * @throws FatalRequestException
     * @throws RequestException
     */
    public function organizationsTeamsIndexRequest(
        string $organization,
        ?int $pagesize = null,
        ?string $pagecursor = null,
    ): Response {
        return $this->connector->send(new OrganizationsTeamsIndexRequest($organization, $pagesize, $pagecursor));
    }

    /**
     * @param  string  $organization  The organization slug
     * @param  int  $team  The team ID
     * @param  int  $invitation  The invitation ID
     *
     * @throws FatalRequestException
     * @throws RequestException
     */
    public function organizationsTeamsInvitesDestroyRequest(string $organization, int $team, int $invitation): Response
    {
        return $this->connector->send(new OrganizationsTeamsInvitesDestroyRequest($organization, $team, $invitation));
    }

    /**
     * @param  string  $organization  The organization slug
     * @param  int  $team  The team ID
     * @param  null|string  $include  Available includes are `role`, `roleCount`, `roleExists`, `team`, `teamCount`, `teamExists`, `organization`, `organizationCount`, `organizationExists`. You can include multiple options by separating them with a comma.
     * @param  null|int  $pagesize  The number of results that will be returned per page.
     * @param  null|string  $pagecursor  The cursor to start the pagination from.
     *
     * @throws FatalRequestException
     * @throws RequestException
     */
    public function organizationsTeamsInvitesIndexRequest(
        string $organization,
        int $team,
        ?string $include = null,
        ?int $pagesize = null,
        ?string $pagecursor = null,
    ): Response {
        return $this->connector->send(new OrganizationsTeamsInvitesIndexRequest($organization, $team, $include, $pagesize, $pagecursor));
    }

    /**
     * @param  string  $organization  The organization slug
     * @param  int  $team  The team ID
     * @param  int  $invitation  The invitation ID
     *
     * @throws FatalRequestException
     * @throws RequestException
     */
    public function organizationsTeamsInvitesShowRequest(string $organization, int $team, int $invitation): Response
    {
        return $this->connector->send(new OrganizationsTeamsInvitesShowRequest($organization, $team, $invitation));
    }

    /**
     * @param  string  $organization  The organization slug
     * @param  int  $team  The team ID
     *
     * @throws FatalRequestException
     * @throws RequestException
     */
    public function organizationsTeamsInvitesStoreRequest(
        string $organization,
        int $team,
        int $roleId,
        string $email,
    ): Response {
        return $this->connector->send(new OrganizationsTeamsInvitesStoreRequest($organization, $team, $roleId, $email));
    }

    /**
     * @param  string  $organization  The organization slug
     * @param  int  $team  The team ID
     * @param  int  $user  The user ID
     *
     * @throws FatalRequestException
     * @throws RequestException
     */
    public function organizationsTeamsMembersDestroyRequest(string $organization, int $team, int $user): Response
    {
        return $this->connector->send(new OrganizationsTeamsMembersDestroyRequest($organization, $team, $user));
    }

    /**
     * @param  string  $organization  The organization slug
     * @param  int  $team  The team ID
     * @param  null|int  $pagesize  The number of results that will be returned per page.
     * @param  null|string  $pagecursor  The cursor to start the pagination from.
     *
     * @throws FatalRequestException
     * @throws RequestException
     */
    public function organizationsTeamsMembersIndexRequest(
        string $organization,
        int $team,
        ?int $pagesize = null,
        ?string $pagecursor = null,
    ): Response {
        return $this->connector->send(new OrganizationsTeamsMembersIndexRequest($organization, $team, $pagesize, $pagecursor));
    }

    /**
     * @param  string  $organization  The organization slug
     * @param  int  $team  The team ID
     * @param  int  $user  The user ID
     *
     * @throws FatalRequestException
     * @throws RequestException
     */
    public function organizationsTeamsMembersShowRequest(string $organization, int $team, int $user): Response
    {
        return $this->connector->send(new OrganizationsTeamsMembersShowRequest($organization, $team, $user));
    }

    /**
     * @param  string  $organization  The organization slug
     * @param  int  $team  The team ID
     * @param  int  $user  The user ID
     * @param  int  $roleId  The ID of the role to assign to the team member.
     *
     * @throws FatalRequestException
     * @throws RequestException
     */
    public function organizationsTeamsMembersUpdateRequest(
        string $organization,
        int $team,
        int $user,
        int $roleId,
    ): Response {
        return $this->connector->send(new OrganizationsTeamsMembersUpdateRequest($organization, $team, $user, $roleId));
    }

    /**
     * @param  string  $organization  The organization slug
     * @param  int  $team  The team ID
     *
     * @throws FatalRequestException
     * @throws RequestException
     */
    public function organizationsTeamsShowRequest(string $organization, int $team): Response
    {
        return $this->connector->send(new OrganizationsTeamsShowRequest($organization, $team));
    }

    /**
     * @param  string  $organization  The organization slug
     *
     * @throws FatalRequestException
     * @throws RequestException
     */
    public function organizationsTeamsStoreRequest(
        string $organization,
        string $name,
        ?array $users = null,
        ?array $invites = null,
    ): Response {
        return $this->connector->send(new OrganizationsTeamsStoreRequest($organization, $name, $users, $invites));
    }

    /**
     * @param  string  $organization  The organization slug
     * @param  int  $team  The team ID
     *
     * @throws FatalRequestException
     * @throws RequestException
     */
    public function organizationsTeamsUpdateRequest(
        string $organization,
        int $team,
        string $name,
        ?array $users = null,
    ): Response {
        return $this->connector->send(new OrganizationsTeamsUpdateRequest($organization, $team, $name, $users));
    }
}
