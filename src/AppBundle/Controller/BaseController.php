<?php
/**
 * Created by PhpStorm.
 * User: aandre
 * Date: 25/02/15
 * Time: 17:50
 */

namespace Creakiwi\WhatsNext\AppBundle\Controller;

use Symfony\Component\DependencyInjection\ContainerAwareInterface;
use Symfony\Component\DependencyInjection\ContainerInterface;

class BaseController implements ContainerAwareInterface
{
    /**
     * @var ContainerInterface
     */
    private $container;

    /**
     * Sets the Container.
     *
     * @param ContainerInterface|null $container A ContainerInterface instance or null
     *
     * @api
     */
    public function setContainer(ContainerInterface $container = null)
    {
        $this->container = $container;
    }

    public function get($service)
    {
        return $this->container->get($service);
    }
}