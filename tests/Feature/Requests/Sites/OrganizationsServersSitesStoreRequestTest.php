<?php

use Saloon\Enums\Method;
use TeamNifty\Forge\Requests\Sites\OrganizationsServersSitesStoreRequest;

it('can be instantiated', function (): void {
    $request = new OrganizationsServersSitesStoreRequest(organization: 'test-value', server: 1, domainMode: null, name: 'test-value', wwwRedirectType: 'test-value', allowWildcardSubdomains: 'test-value', webDirectory: null, isIsolated: true, isolatedUser: 'test-value', zeroDowntimeDeployments: true, nginxTemplateId: 1, repository: null, branch: null, databaseId: null, databaseUserId: 'test-value', statamicSetup: 'test-value', statamicStarterKit: 'test-value', statamicSuperUserEmail: 'test-value', statamicSuperUserPassword: 'test-value', installComposerDependencies: true, generateDeployKey: true, publicDeployKey: 'test-value', privateDeployKey: 'test-value', nuxtNextMode: 'test-value', nuxtNextBuildCommand: 'test-value', nuxtNextPort: 1, pushToDeploy: true, tags: null, sharedPaths: ['test' => 'value']);

    expect($request)->toBeInstanceOf(OrganizationsServersSitesStoreRequest::class);
});

it('has correct HTTP method', function (): void {
    $request = new OrganizationsServersSitesStoreRequest(organization: 'test-value', server: 1, domainMode: null, name: 'test-value', wwwRedirectType: 'test-value', allowWildcardSubdomains: 'test-value', webDirectory: null, isIsolated: true, isolatedUser: 'test-value', zeroDowntimeDeployments: true, nginxTemplateId: 1, repository: null, branch: null, databaseId: null, databaseUserId: 'test-value', statamicSetup: 'test-value', statamicStarterKit: 'test-value', statamicSuperUserEmail: 'test-value', statamicSuperUserPassword: 'test-value', installComposerDependencies: true, generateDeployKey: true, publicDeployKey: 'test-value', privateDeployKey: 'test-value', nuxtNextMode: 'test-value', nuxtNextBuildCommand: 'test-value', nuxtNextPort: 1, pushToDeploy: true, tags: null, sharedPaths: ['test' => 'value']);

    expect($request->getMethod())->toBe(Method::POST);
});

it('resolves endpoint correctly', function (): void {
    $request = new OrganizationsServersSitesStoreRequest(organization: 'test-value', server: 1, domainMode: null, name: 'test-value', wwwRedirectType: 'test-value', allowWildcardSubdomains: 'test-value', webDirectory: null, isIsolated: true, isolatedUser: 'test-value', zeroDowntimeDeployments: true, nginxTemplateId: 1, repository: null, branch: null, databaseId: null, databaseUserId: 'test-value', statamicSetup: 'test-value', statamicStarterKit: 'test-value', statamicSuperUserEmail: 'test-value', statamicSuperUserPassword: 'test-value', installComposerDependencies: true, generateDeployKey: true, publicDeployKey: 'test-value', privateDeployKey: 'test-value', nuxtNextMode: 'test-value', nuxtNextBuildCommand: 'test-value', nuxtNextPort: 1, pushToDeploy: true, tags: null, sharedPaths: ['test' => 'value']);

    expect($request->resolveEndpoint())->toBeString();
});

it('has correct body structure', function (): void {
    $request = new OrganizationsServersSitesStoreRequest(organization: 'test-value', server: 1, domainMode: null, name: 'test-value', wwwRedirectType: 'test-value', allowWildcardSubdomains: 'test-value', webDirectory: null, isIsolated: true, isolatedUser: 'test-value', zeroDowntimeDeployments: true, nginxTemplateId: 1, repository: null, branch: null, databaseId: null, databaseUserId: 'test-value', statamicSetup: 'test-value', statamicStarterKit: 'test-value', statamicSuperUserEmail: 'test-value', statamicSuperUserPassword: 'test-value', installComposerDependencies: true, generateDeployKey: true, publicDeployKey: 'test-value', privateDeployKey: 'test-value', nuxtNextMode: 'test-value', nuxtNextBuildCommand: 'test-value', nuxtNextPort: 1, pushToDeploy: true, tags: null, sharedPaths: ['test' => 'value']);

    expect($request->body()->all())->toBeArray();
});
