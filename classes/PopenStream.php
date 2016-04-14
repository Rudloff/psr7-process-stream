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

    public function close()
    {
        $stream = $this->detach();
        if (isset($stream) && is_resource($stream)) {
            //pclose() triggers an I/O error if the stream has never been read
            fread($stream, 1);
            pclose($stream);
        }
    }
}
