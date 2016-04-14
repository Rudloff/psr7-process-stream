<?php
namespace ProcessStream;

use GuzzleHttp\Psr7\Stream;

class PopenStream extends Stream
{
    public function __construct($cmd, $mode = 'r')
    {
        parent::__construct(popen($cmd, $mode));
    }

    public function getSize()
    {
        return null;
    }
}
