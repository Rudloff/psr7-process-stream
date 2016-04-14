<?php

use ProcessStream\PopenStream;

class PopenStreamTest extends PHPUnit_Framework_TestCase
{
    public function testGetSize() {
        $stream = new PopenStream('echo "foo"', 'r');
        $this->assertNull($stream->getSize());
    }

    public function testIsReadable() {
        $stream = new PopenStream('echo "foo"', 'r');
        $this->assertTrue($stream->isReadable());
    }

    /*public function testClose()
    {
        $stream = new PopenStream('ls', 'r');
        $stream->close();

        $this->assertFalse($stream->isSeekable());
        $this->assertFalse($stream->isReadable());
        $this->assertFalse($stream->isWritable());
        $this->assertNull($stream->getSize());
        $this->assertEmpty($stream->getMetadata());
    }*/
}
