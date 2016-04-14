<?php
namespace ProcessStream\Tests;

use ProcessStream\PopenStream;

class PopenStreamTest extends \PHPUnit_Framework_TestCase
{
    public function testGetSize()
    {
        $stream = new PopenStream('echo "foo"', 'r');
        $this->assertNull($stream->getSize());
    }

    public function testIsReadable()
    {
        $stream = new PopenStream('echo "foo"', 'r');
        $this->assertTrue($stream->isReadable());
    }
}
