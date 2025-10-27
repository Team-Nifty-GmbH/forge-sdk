<?php

namespace TeamNifty\Forge;

use Saloon\Contracts\Authenticator;
use Saloon\Helpers\OAuth2\OAuthConfig;
use Saloon\Http\Auth\TokenAuthenticator;
use Saloon\Http\Connector;
use Saloon\Http\Request;
use Saloon\Http\Response;
use Saloon\PaginationPlugin\Contracts\HasPagination;
use Saloon\PaginationPlugin\Paginator;
use Saloon\PaginationPlugin\Paginators\CursorPaginator;
use Saloon\Traits\Makeable;
use Saloon\Traits\OAuth2\AuthorizationCodeGrant;
use SensitiveParameter;
use TeamNifty\Forge\Resource\BackgroundProcesses;
use TeamNifty\Forge\Resource\Commands;
use TeamNifty\Forge\Resource\Databases;
use TeamNifty\Forge\Resource\Deployments;
use TeamNifty\Forge\Resource\FirewallRules;
use TeamNifty\Forge\Resource\Integrations;
use TeamNifty\Forge\Resource\Logs;
use TeamNifty\Forge\Resource\Monitors;
use TeamNifty\Forge\Resource\Nginx;
use TeamNifty\Forge\Resource\Organizations;
use TeamNifty\Forge\Resource\Providers;
use TeamNifty\Forge\Resource\Recipes;
use TeamNifty\Forge\Resource\RedirectRules;
use TeamNifty\Forge\Resource\Roles;
use TeamNifty\Forge\Resource\ScheduledJobs;
use TeamNifty\Forge\Resource\SecurityRules;
use TeamNifty\Forge\Resource\ServerCredentials;
use TeamNifty\Forge\Resource\Servers;
use TeamNifty\Forge\Resource\Sites;
use TeamNifty\Forge\Resource\SshKeys;
use TeamNifty\Forge\Resource\Teams;
use TeamNifty\Forge\Resource\User;
use TeamNifty\Forge\Resource\Users;

/**
 * Forge
 *
 * Laravel Forge - API Documentation
 */
class Forge extends Connector implements HasPagination
{
    use AuthorizationCodeGrant;
    use Makeable;

    /**
     * @param  string  $bearerToken  The API token for authentication
     */
    public function __construct(
        protected string $bearerToken,
        #[SensitiveParameter]
        protected ?string $clientId = null,
        #[SensitiveParameter]
        protected ?string $clientSecret = null,
        protected ?string $authorizationUrl = 'https://forge.laravel.com/oauth/authorize',
        protected ?string $tokenUrl = 'https://forge.laravel.com/oauth/token',
        protected ?string $refreshUrl = null,
        protected ?array $scopes = [
            'organization:view' => 'Allow members to view the organization',
            'organization:manage' => 'Allow members to manage the organization',
            'organization:delete' => 'Allow members to delete the organization',
            'server:view' => 'Allow members to view servers',
            'server:create' => 'Allow members to create servers',
            'server:delete' => 'Allow members to delete servers',
            'server:archive' => 'Allow members to archive servers',
            'server:transfer' => 'Allow members to transfer servers to another Forge account',
            'server:manage-meta' => 'Allow members to change server settings such as name and IP address',
            'server:manage-packages' => 'Allow members to configure and remove server and site package authentication',
            'server:manage-php' => 'Allow members to install and change PHP installations',
            'server:manage-logs' => 'Allow members to clear server and site logs',
            'server:manage-network' => 'Allow members to change the server‘s firewall',
            'server:manage-nginx-templates' => 'Allow members to manage Nginx templates',
            'server:manage-services' => 'Allow members to start, stop and restart services',
            'server:create-keys' => 'Allow members to add SSH keys to servers',
            'server:delete-keys' => 'Allow members to remove SSH keys from servers',
            'server:create-monitors' => 'Allow members to create server monitors',
            'server:delete-monitors' => 'Allow members to delete server monitors',
            'server:create-databases' => 'Allow members to create databases and database users',
            'server:delete-databases' => 'Allow members to delete databases and database users',
            'server:create-backups' => 'Allow members to create database backup configurations',
            'server:delete-backups' => 'Allow members to delete database backup configurations',
            'server:create-daemons' => 'Allow members to create daemons',
            'server:delete-daemons' => 'Allow members to delete daemons',
            'server:create-schedulers' => 'Allow members to create scheduled jobs',
            'server:delete-schedulers' => 'Allow members to delete scheduled jobs',
            'server:web-terminal' => 'Allow members to start web terminal sessions',
            'site:create' => 'Allow members to create sites',
            'site:delete' => 'Allow members to delete sites',
            'site:meta' => 'Allow members to update site meta data such as domain name and aliases',
            'site:manage-commands' => 'Allow members to run arbitrary commands from the site‘s root directory',
            'site:manage-deploys' => 'Allow members to deploy the site and update the deployment script',
            'site:manage-nginx' => 'Allow members to manage the site‘s Nginx configuration file',
            'site:manage-project' => 'Allow members to install Git repositories, phpMyAdmin and WordPress applications',
            'site:manage-environment' => 'Allow members to update the site‘s environment file',
            'site:manage-notifications' => 'Allow members to configure deployment notifications',
            'site:manage-queues' => 'Allow members to configure queue workers',
            'site:manage-redirects' => 'Allow members to configure URL redirects',
            'site:manage-security' => 'Allow members to configure HTTP Basic Authentication',
            'site:manage-ssl' => 'Allow members to configure SSL and Let‘s Encrypt certificates',
            'site:manage-integrations' => 'Allow members to manage site integrations',
            'site:manage-heartbeats' => 'Allow members to manage heartbeats',
            'credential:view' => 'Allow members to view credentials',
            'credential:manage' => 'Allow members to manage credentials',
            'team:view' => 'Allow members to view teams',
            'team:create' => 'Allow members to create teams',
            'team:delete' => 'Allow members to delete teams and team members',
            'recipe:view' => 'Allow members to view recipes',
            'recipe:manage' => 'Allow members to manage recipes',
            'billing:manage' => 'Allow members to manage the organization\'s subscription',
            'integrations:manage' => 'Allow members to manage the organization\'s integrations',
            'user:view' => 'Allow members to view user details',
        ],
    ) {}

    public function backgroundProcesses(): BackgroundProcesses
    {
        return new BackgroundProcesses($this);
    }

    public function commands(): Commands
    {
        return new Commands($this);
    }

    public function databases(): Databases
    {
        return new Databases($this);
    }

    public function defaultAuth(): Authenticator
    {
        return new TokenAuthenticator($this->bearerToken, 'Bearer');
    }

    public function defaultOauthConfig(): OAuthConfig
    {
        return OAuthConfig::make()
            ->setClientId($this->clientId ?? '')
            ->setClientSecret($this->clientSecret ?? '')
            ->setDefaultScopes($this->scopes)
            ->setAuthorizeEndpoint($this->authorizationUrl)
            ->setTokenEndpoint($this->tokenUrl);
    }

    public function deployments(): Deployments
    {
        return new Deployments($this);
    }

    public function firewallRules(): FirewallRules
    {
        return new FirewallRules($this);
    }

    public function integrations(): Integrations
    {
        return new Integrations($this);
    }

    public function logs(): Logs
    {
        return new Logs($this);
    }

    public function monitors(): Monitors
    {
        return new Monitors($this);
    }

    public function nginx(): Nginx
    {
        return new Nginx($this);
    }

    public function organizations(): Organizations
    {
        return new Organizations($this);
    }

    public function paginate(Request $request): Paginator
    {
        return new class(connector: $this, request: $request) extends CursorPaginator
        {
            protected function isLastPage(Response $response): bool
            {
                $data = $response->json();

                return ! isset($data['meta']['cursor']['next']);
            }

            protected function getPageItems(Response $response, Request $request): array
            {
                return $response->json('data') ?? [];
            }

            protected function getNextCursor(Response $response): ?string
            {
                return $response->json('meta.cursor.next');
            }

            protected function applyPagination(Request $request): Request
            {
                if ($this->currentResponse instanceof Response) {
                    $cursor = $this->getNextCursor($this->currentResponse);

                    if ($cursor !== null) {
                        $request->query()->add('page[cursor]', $cursor);
                    }
                }

                return $request;
            }
        };
    }

    public function providers(): Providers
    {
        return new Providers($this);
    }

    public function recipes(): Recipes
    {
        return new Recipes($this);
    }

    public function redirectRules(): RedirectRules
    {
        return new RedirectRules($this);
    }

    public function resolveBaseUrl(): string
    {
        return 'https://forge.laravel.com/api';
    }

    public function roles(): Roles
    {
        return new Roles($this);
    }

    public function scheduledJobs(): ScheduledJobs
    {
        return new ScheduledJobs($this);
    }

    public function securityRules(): SecurityRules
    {
        return new SecurityRules($this);
    }

    public function serverCredentials(): ServerCredentials
    {
        return new ServerCredentials($this);
    }

    public function servers(): Servers
    {
        return new Servers($this);
    }

    public function sites(): Sites
    {
        return new Sites($this);
    }

    public function sshKeys(): SshKeys
    {
        return new SshKeys($this);
    }

    public function teams(): Teams
    {
        return new Teams($this);
    }

    public function user(): User
    {
        return new User($this);
    }

    public function users(): Users
    {
        return new Users($this);
    }
}
