<?php

namespace FiiSoft\Tools\RemoteContent;

interface RemoteContent
{
    /**
     * @return bool
     */
    public function isAvailable();
    
    /**
     * @throws ContentNotAvailableException
     * @return mixed
     */
    public function get();
}