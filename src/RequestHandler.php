<?php

declare(strict_types=1);

namespace Datashaman\Phial;

use Laminas\Diactoros\ResponseFactory;
use League\Route\Router;
use Psr\Container\ContainerInterface;

final class RequestHandler extends Router
{
    public function __construct(
        ContainerInterface $container
    ) {
        parent::__construct();
        $this->setStrategy(
            (new Strategy(new ResponseFactory()))->setContainer($container)
        );
    }
}
