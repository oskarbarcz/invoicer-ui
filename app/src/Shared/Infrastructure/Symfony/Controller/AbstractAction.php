<?php

declare(strict_types=1);

namespace App\Shared\Infrastructure\Symfony\Controller;

use App\Shared\Application\Command\CommandBusInterface;
use App\Shared\Application\Command\CommandInterface;
use App\Shared\Infrastructure\Symfony\Response\ResponseBuilder;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

abstract class AbstractAction extends AbstractController
{
    private ResponseBuilder $responseBuilder;
    private CommandBusInterface $commandBus;

    public function __construct(ResponseBuilder $responseBuilder, CommandBusInterface $commandBus)
    {
        $this->responseBuilder = $responseBuilder;
        $this->commandBus = $commandBus;
    }

    public function responseBuilder(): ResponseBuilder
    {
        return $this->responseBuilder;
    }

    public function do(CommandInterface $command): void
    {
        $this->commandBus->handle($command);
    }
}
