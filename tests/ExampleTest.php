<?php

namespace Thekavish\LaravelModernFcm\Tests;

use Orchestra\Testbench\TestCase;
use Thekavish\LaravelModernFcm\LaravelModernFcmServiceProvider;

class ExampleTest extends TestCase
{

    protected function getPackageProviders($app)
    {
        return [LaravelModernFcmServiceProvider::class];
    }
    
    /** @test */
    public function true_is_true()
    {
        $this->assertTrue(true);
    }
}
