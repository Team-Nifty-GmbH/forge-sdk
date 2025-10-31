<?php

use TeamNifty\Forge\Requests\Sites\OrganizationsServersSitesStoreRequest;
use Saloon\Enums\Method;

it('can be instantiated', function () {
    $request = new OrganizationsServersSitesStoreRequest(organization: 'test-value', server: 1, domainMode: NULL, name: 'test-value', wwwRedirectType: 'test-value', allowWildcardSubdomains: 'test-value', webDirectory: NULL, isIsolated: true, isolatedUser: 'test-value', zeroDowntimeDeployments: true, nginxTemplateId: 1, repository: NULL, branch: NULL, databaseId: NULL, databaseUserId: 'test-value', statamicSetup: 'test-value', statamicStarterKit: 'test-value', statamicSuperUserEmail: 'test-value', statamicSuperUserPassword: 'test-value', installComposerDependencies: true, generateDeployKey: true, publicDeployKey: 'test-value', privateDeployKey: 'test-value', nuxtNextMode: 'test-value', nuxtNextBuildCommand: 'test-value', nuxtNextPort: 1, pushToDeploy: true, tags: NULL, sharedPaths: ['test' => 'value']);

    expect($request)->toBeInstanceOf(OrganizationsServersSitesStoreRequest::class);
});

it('has correct HTTP method', function () {
    $request = new OrganizationsServersSitesStoreRequest(organization: 'test-value', server: 1, domainMode: NULL, name: 'test-value', wwwRedirectType: 'test-value', allowWildcardSubdomains: 'test-value', webDirectory: NULL, isIsolated: true, isolatedUser: 'test-value', zeroDowntimeDeployments: true, nginxTemplateId: 1, repository: NULL, branch: NULL, databaseId: NULL, databaseUserId: 'test-value', statamicSetup: 'test-value', statamicStarterKit: 'test-value', statamicSuperUserEmail: 'test-value', statamicSuperUserPassword: 'test-value', installComposerDependencies: true, generateDeployKey: true, publicDeployKey: 'test-value', privateDeployKey: 'test-value', nuxtNextMode: 'test-value', nuxtNextBuildCommand: 'test-value', nuxtNextPort: 1, pushToDeploy: true, tags: NULL, sharedPaths: ['test' => 'value']);

    expect($request->getMethod())->toBe(Method::POST);
});

it('resolves endpoint correctly', function () {
    $request = new OrganizationsServersSitesStoreRequest(organization: 'test-value', server: 1, domainMode: NULL, name: 'test-value', wwwRedirectType: 'test-value', allowWildcardSubdomains: 'test-value', webDirectory: NULL, isIsolated: true, isolatedUser: 'test-value', zeroDowntimeDeployments: true, nginxTemplateId: 1, repository: NULL, branch: NULL, databaseId: NULL, databaseUserId: 'test-value', statamicSetup: 'test-value', statamicStarterKit: 'test-value', statamicSuperUserEmail: 'test-value', statamicSuperUserPassword: 'test-value', installComposerDependencies: true, generateDeployKey: true, publicDeployKey: 'test-value', privateDeployKey: 'test-value', nuxtNextMode: 'test-value', nuxtNextBuildCommand: 'test-value', nuxtNextPort: 1, pushToDeploy: true, tags: NULL, sharedPaths: ['test' => 'value']);

    expect($request->resolveEndpoint())->toBeString();
});

it('has correct body structure', function () {
    $request = new OrganizationsServersSitesStoreRequest(organization: 'test-value', server: 1, domainMode: NULL, name: 'test-value', wwwRedirectType: 'test-value', allowWildcardSubdomains: 'test-value', webDirectory: NULL, isIsolated: true, isolatedUser: 'test-value', zeroDowntimeDeployments: true, nginxTemplateId: 1, repository: NULL, branch: NULL, databaseId: NULL, databaseUserId: 'test-value', statamicSetup: 'test-value', statamicStarterKit: 'test-value', statamicSuperUserEmail: 'test-value', statamicSuperUserPassword: 'test-value', installComposerDependencies: true, generateDeployKey: true, publicDeployKey: 'test-value', privateDeployKey: 'test-value', nuxtNextMode: 'test-value', nuxtNextBuildCommand: 'test-value', nuxtNextPort: 1, pushToDeploy: true, tags: NULL, sharedPaths: ['test' => 'value']);

    expect($request->body()->all())->toBeArray();
});
