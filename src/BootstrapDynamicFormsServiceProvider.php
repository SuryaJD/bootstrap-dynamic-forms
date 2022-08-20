<?php

namespace Worthcoding\BootstrapDynamicForms;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use Worthcoding\BootstrapDynamicForms\Commands\BootstrapDynamicFormsCommand;

class BootstrapDynamicFormsServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('bootstrap-dynamic-forms')
            ->hasConfigFile()
            ->hasViews()
            ->hasMigration('create_bootstrap-dynamic-forms_table')
            ->hasCommand(BootstrapDynamicFormsCommand::class);
    }
}
