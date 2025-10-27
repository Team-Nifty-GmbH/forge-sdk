<?php

namespace TeamNifty\Forge\Dto;

use Spatie\LaravelData\Attributes\MapName;
use Spatie\LaravelData\Data as SpatieData;

/**
 * CreateSiteRequest
 */
class CreateSiteRequest extends SpatieData
{
    public function __construct(
        public ?SiteType $type = null,
        #[MapName('domain_mode')]
        public mixed $domainMode = null,
        public ?string $name = null,
        #[MapName('www_redirect_type')]
        public ?string $wwwRedirectType = null,
        #[MapName('allow_wildcard_subdomains')]
        public ?string $allowWildcardSubdomains = null,
        #[MapName('web_directory')]
        public ?string $webDirectory = null,
        #[MapName('is_isolated')]
        public ?bool $isIsolated = null,
        #[MapName('isolated_user')]
        public ?string $isolatedUser = null,
        #[MapName('php_version')]
        public ?PhpVersion $phpVersion = null,
        #[MapName('zero_downtime_deployments')]
        public ?bool $zeroDowntimeDeployments = null,
        #[MapName('nginx_template_id')]
        public ?int $nginxTemplateId = null,
        #[MapName('source_control_provider')]
        public ?SourceControlProvider $sourceControlProvider = null,
        public ?string $repository = null,
        public ?string $branch = null,
        #[MapName('database_id')]
        public ?int $databaseId = null,
        #[MapName('database_user_id')]
        public ?string $databaseUserId = null,
        #[MapName('statamic_setup')]
        public ?string $statamicSetup = null,
        #[MapName('statamic_starter_kit')]
        public ?string $statamicStarterKit = null,
        #[MapName('statamic_super_user_email')]
        public ?string $statamicSuperUserEmail = null,
        #[MapName('statamic_super_user_password')]
        public ?string $statamicSuperUserPassword = null,
        #[MapName('install_composer_dependencies')]
        public ?bool $installComposerDependencies = null,
        #[MapName('generate_deploy_key')]
        public ?bool $generateDeployKey = null,
        #[MapName('public_deploy_key')]
        public ?string $publicDeployKey = null,
        #[MapName('private_deploy_key')]
        public ?string $privateDeployKey = null,
        #[MapName('nuxt_next_mode')]
        public ?string $nuxtNextMode = null,
        #[MapName('nuxt_next_build_command')]
        public ?string $nuxtNextBuildCommand = null,
        #[MapName('nuxt_next_port')]
        public ?int $nuxtNextPort = null,
        #[MapName('push_to_deploy')]
        public ?bool $pushToDeploy = null,
        public ?array $tags = null,
        #[MapName('shared_paths')]
        public ?array $sharedPaths = null,
    ) {}
}
