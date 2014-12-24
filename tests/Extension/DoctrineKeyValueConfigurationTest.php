<?php

/*
 * Copyright (c) Tyler Sommer
 *
 * For the full copyright and license information, please view the LICENSE file
 * that was distributed with this source code.
 */

namespace Nice\Tests\Extension;

use Nice\Extension\DoctrineKeyValueConfiguration;
use Symfony\Component\Config\Definition\Processor;

class DoctrineKeyValueConfigurationTest extends \PHPUnit_Framework_TestCase
{
    public function testDefaultKeyValueConfig()
    {
        $processor = new Processor();
        $config = $processor->processConfiguration(new DoctrineKeyValueConfiguration(), array());

        $this->assertEquals(
            array(
                'cache_driver' => 'default'
            ),
            $config
        );
    }
}
