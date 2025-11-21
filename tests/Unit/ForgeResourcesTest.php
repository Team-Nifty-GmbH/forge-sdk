<?php

use TeamNifty\Forge\Forge;
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

beforeEach(function (): void {
    $this->forge = new Forge(bearerToken: 'test-token');
});

it('creates backgroundProcesses resource', function (): void {
    expect($this->forge->backgroundProcesses())->toBeInstanceOf(BackgroundProcesses::class);
});

it('creates commands resource', function (): void {
    expect($this->forge->commands())->toBeInstanceOf(Commands::class);
});

it('creates databases resource', function (): void {
    expect($this->forge->databases())->toBeInstanceOf(Databases::class);
});

it('creates deployments resource', function (): void {
    expect($this->forge->deployments())->toBeInstanceOf(Deployments::class);
});

it('creates firewallRules resource', function (): void {
    expect($this->forge->firewallRules())->toBeInstanceOf(FirewallRules::class);
});

it('creates integrations resource', function (): void {
    expect($this->forge->integrations())->toBeInstanceOf(Integrations::class);
});

it('creates logs resource', function (): void {
    expect($this->forge->logs())->toBeInstanceOf(Logs::class);
});

it('creates monitors resource', function (): void {
    expect($this->forge->monitors())->toBeInstanceOf(Monitors::class);
});

it('creates nginx resource', function (): void {
    expect($this->forge->nginx())->toBeInstanceOf(Nginx::class);
});

it('creates organizations resource', function (): void {
    expect($this->forge->organizations())->toBeInstanceOf(Organizations::class);
});

it('creates providers resource', function (): void {
    expect($this->forge->providers())->toBeInstanceOf(Providers::class);
});

it('creates recipes resource', function (): void {
    expect($this->forge->recipes())->toBeInstanceOf(Recipes::class);
});

it('creates redirectRules resource', function (): void {
    expect($this->forge->redirectRules())->toBeInstanceOf(RedirectRules::class);
});

it('creates roles resource', function (): void {
    expect($this->forge->roles())->toBeInstanceOf(Roles::class);
});

it('creates scheduledJobs resource', function (): void {
    expect($this->forge->scheduledJobs())->toBeInstanceOf(ScheduledJobs::class);
});

it('creates securityRules resource', function (): void {
    expect($this->forge->securityRules())->toBeInstanceOf(SecurityRules::class);
});

it('creates serverCredentials resource', function (): void {
    expect($this->forge->serverCredentials())->toBeInstanceOf(ServerCredentials::class);
});

it('creates servers resource', function (): void {
    expect($this->forge->servers())->toBeInstanceOf(Servers::class);
});

it('creates sites resource', function (): void {
    expect($this->forge->sites())->toBeInstanceOf(Sites::class);
});

it('creates sshKeys resource', function (): void {
    expect($this->forge->sshKeys())->toBeInstanceOf(SshKeys::class);
});

it('creates teams resource', function (): void {
    expect($this->forge->teams())->toBeInstanceOf(Teams::class);
});

it('creates user resource', function (): void {
    expect($this->forge->user())->toBeInstanceOf(User::class);
});

it('creates users resource', function (): void {
    expect($this->forge->users())->toBeInstanceOf(Users::class);
});
