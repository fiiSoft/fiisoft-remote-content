<?php

namespace FiiSoft\Tools\RemoteContent\Reader\Adapter;

use FiiSoft\Tools\RemoteContent\Adapter\ContentNotAvailable;
use FiiSoft\Tools\RemoteContent\Adapter\GuzzleRemoteContent;
use FiiSoft\Tools\RemoteContent\Reader\RemoteContentReader;
use FiiSoft\Tools\RemoteContent\RemoteContent;
use GuzzleHttp\Client as HttpClient;
use GuzzleHttp\Exception\ClientException;

final class GuzzleContentReader implements RemoteContentReader
{
    /**
     * @param string $url
     * @throws ClientException
     * @return RemoteContent
     */
    public function loadRemoteContent($url)
    {
        $httpClient = new HttpClient();
    
        try {
            $response = $httpClient->get($url);
        } catch (ClientException $e) {
            if (false !== strpos($e->getMessage(), '[status code] 404')) {
                return new ContentNotAvailable();
            }
            
            throw $e;
        }
        
        return new GuzzleRemoteContent($response);
    }
}