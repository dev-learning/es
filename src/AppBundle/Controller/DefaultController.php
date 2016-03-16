<?php

namespace AppBundle\Controller;

use AppBundle\Service\RssService;

class DefaultController
{

    public function homeAction()
    {
        $file = dirname(__FILE__) . '/data.json';
        $rssService = new RssService();

        $rssService->read($file);
        exit;

    }

}
