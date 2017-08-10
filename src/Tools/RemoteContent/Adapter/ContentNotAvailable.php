<?php

namespace FiiSoft\Tools\RemoteContent\Adapter;

use FiiSoft\Tools\RemoteContent\ContentNotAvailableException;
use FiiSoft\Tools\RemoteContent\RemoteContent;

final class ContentNotAvailable implements RemoteContent
{
    /**
     * @return bool
     */
    public function isAvailable()
    {
        return false;
    }
    
    /**
     * @throws ContentNotAvailableException
     * @return mixed
     */
    public function get()
    {
        throw new ContentNotAvailableException();
    }
}