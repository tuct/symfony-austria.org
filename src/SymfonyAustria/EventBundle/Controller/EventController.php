<?php

namespace SymfonyAustria\EventBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

/**
 * @Route("/event")
 */
class EventController extends Controller
{
    /**
     * @Route("/", name="symfonyaustria_event_index")
     * @Template()
     */
    public function indexAction()
    {
        return array();
    }
}