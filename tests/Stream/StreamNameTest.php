<?php
/**
 * This file is part of the prooph/service-bus.
 * (c) 2014-2016 prooph software GmbH <contact@prooph.de>
 * (c) 2015-2016 Sascha-Oliver Prolic <saschaprolic@googlemail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace ProophTest\EventStore\Stream;

use PHPUnit_Framework_TestCase as TestCase;
use Prooph\EventStore\Stream\StreamName;

/**
 * Class StreamNameTest
 * @package ProophTest\EventStore\Stream
 */
final class StreamNameTest extends TestCase
{
    /**
     * @test
     */
    public function it_delegates_to_string()
    {
        $streamName = new StreamName('foo');
        $this->assertEquals('foo', (string) $streamName);
    }
}
