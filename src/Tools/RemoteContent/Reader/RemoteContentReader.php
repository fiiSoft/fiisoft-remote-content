<?php

namespace FiiSoft\Tools\RemoteContent\Reader;

use FiiSoft\Tools\RemoteContent\RemoteContent;

interface RemoteContentReader
{
    /**
     * @param string $url
     * @return RemoteContent
     */
    public function loadRemoteContent($url);
}