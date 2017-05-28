<?php

namespace FiiSoft\Tools\RemoteContent\Reader\Adapter;

use GuzzleHttp\Client as HttpClient;
use FiiSoft\Tools\RemoteContent\Reader\RemoteContentReader;
use FiiSoft\Tools\RemoteContent\RemoteContent;

final class GuzzleContentReader implements RemoteContentReader
{
    /**
     * @param string $url
     * @return RemoteContent
     */
    public function loadRemoteContent($url)
    {
        $httpClient = new HttpClient();
        
        return new GuzzleRemoteContent($httpClient->get($url));
    }
}