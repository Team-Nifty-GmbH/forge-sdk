<?php

namespace TeamNifty\Forge\Requests\Sites;

use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * organizations.servers.sites.store
 *
 * Add a new site to the server.
 *
 * Processing mode: <small><code>async</code></small>
 */
class OrganizationsServersSitesStoreRequest extends Request implements HasBody
{
    use HasJsonBody;

    protected Method $method = Method::POST;

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
     */
    public function __construct(
        protected string $organization,
        protected int $server,
        protected mixed $domainMode = null,
        protected ?string $name = null,
        protected ?string $wwwRedirectType = null,
        protected ?string $allowWildcardSubdomains = null,
        protected mixed $webDirectory = null,
        protected ?bool $isIsolated = null,
        protected ?string $isolatedUser = null,
        protected ?bool $zeroDowntimeDeployments = null,
        protected ?int $nginxTemplateId = null,
        protected mixed $repository = null,
        protected mixed $branch = null,
        protected mixed $databaseId = null,
        protected ?string $databaseUserId = null,
        protected ?string $statamicSetup = null,
        protected ?string $statamicStarterKit = null,
        protected ?string $statamicSuperUserEmail = null,
        protected ?string $statamicSuperUserPassword = null,
        protected ?bool $installComposerDependencies = null,
        protected ?bool $generateDeployKey = null,
        protected ?string $publicDeployKey = null,
        protected ?string $privateDeployKey = null,
        protected ?string $nuxtNextMode = null,
        protected ?string $nuxtNextBuildCommand = null,
        protected ?int $nuxtNextPort = null,
        protected ?bool $pushToDeploy = null,
        protected mixed $tags = null,
        protected ?array $sharedPaths = null,
    ) {}

    public function defaultBody(): array
    {
        return array_filter([
            'domain_mode' => $this->domainMode,
            'name' => $this->name,
            'www_redirect_type' => $this->wwwRedirectType,
            'allow_wildcard_subdomains' => $this->allowWildcardSubdomains,
            'web_directory' => $this->webDirectory,
            'is_isolated' => $this->isIsolated,
            'isolated_user' => $this->isolatedUser,
            'zero_downtime_deployments' => $this->zeroDowntimeDeployments,
            'nginx_template_id' => $this->nginxTemplateId,
            'repository' => $this->repository,
            'branch' => $this->branch,
            'database_id' => $this->databaseId,
            'database_user_id' => $this->databaseUserId,
            'statamic_setup' => $this->statamicSetup,
            'statamic_starter_kit' => $this->statamicStarterKit,
            'statamic_super_user_email' => $this->statamicSuperUserEmail,
            'statamic_super_user_password' => $this->statamicSuperUserPassword,
            'install_composer_dependencies' => $this->installComposerDependencies,
            'generate_deploy_key' => $this->generateDeployKey,
            'public_deploy_key' => $this->publicDeployKey,
            'private_deploy_key' => $this->privateDeployKey,
            'nuxt_next_mode' => $this->nuxtNextMode,
            'nuxt_next_build_command' => $this->nuxtNextBuildCommand,
            'nuxt_next_port' => $this->nuxtNextPort,
            'push_to_deploy' => $this->pushToDeploy,
            'tags' => $this->tags,
            'shared_paths' => $this->sharedPaths,
        ]);
    }

    public function resolveEndpoint(): string
    {
        return "/orgs/{$this->organization}/servers/{$this->server}/sites";
    }
}
