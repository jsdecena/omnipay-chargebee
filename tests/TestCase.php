<?php

namespace Omnipay\Chargebee\Tests;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Application;

abstract class TestCase extends \Orchestra\Testbench\TestCase
{
    use DatabaseMigrations;

    /**
     * Set up
     */
    protected function setUp(): void
    {
        parent::setUp();
    }

    /**
     * Define environment setup.
     *
     * @param  Application $app
     * @return void
     */
    protected function getEnvironmentSetUp($app)
    {
//        $app['config']->set('chargebee.site_name', '');
//        $app['config']->set('chargebee.site_api_key', '');
    }

    /**
     * @param Application $app
     * @return array
     */
    protected function getPackageProviders($app)
    {
        return ['Jsdecena\OmnipayChargebee\ChargebeeServiceProvider'];
    }
}
