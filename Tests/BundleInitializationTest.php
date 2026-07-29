<?php

namespace RedCode\CurrencyRateBundle\Tests;

use PHPUnit\Framework\TestCase;
use RedCode\CurrencyRateBundle\RedCodeCurrencyRateBundle;
use Symfony\Component\DependencyInjection\ContainerBuilder;

/**
 * Basic test to verify the bundle can be instantiated and loaded
 */
class BundleInitializationTest extends TestCase
{
    public function testBundleInstantiation(): void
    {
        $bundle = new RedCodeCurrencyRateBundle();
        $this->assertInstanceOf(RedCodeCurrencyRateBundle::class, $bundle);
    }

    public function testBundleBuild(): void
    {
        $bundle = new RedCodeCurrencyRateBundle();
        $container = new ContainerBuilder();

        // Should not throw any exceptions
        $bundle->build($container);

        $this->assertTrue(true);
    }
}
