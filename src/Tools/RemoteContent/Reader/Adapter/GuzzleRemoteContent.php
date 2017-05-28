<?php

namespace FiiSoft\Tools\RemoteContent\Reader\Adapter;

use GuzzleHttp\Message\ResponseInterface;
use FiiSoft\Tools\RemoteContent\ContentNotAvailableException;
use FiiSoft\Tools\RemoteContent\RemoteContent;

final class GuzzleRemoteContent implements RemoteContent
{
    /** @var ResponseInterface */
    private $response;
    
    public function __construct(ResponseInterface $response)
    {
        $this->response = $response;
    }
    
    /**
     * @return bool
     */
    public function isAvailable()
    {
        return $this->response->getStatusCode() === 200;
    }
    
    /**
     * @throws ContentNotAvailableException
     * @return mixed
     */
    public function get()
    {
        if ($this->isAvailable()) {
            return $this->response->getBody();
        }
        
        throw new ContentNotAvailableException();
    }
}