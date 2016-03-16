<?php

namespace AppBundle\Service;

class RssService
{
    public function read($file)
    {
        $jsonFile = file_get_contents($file);
    }
}
