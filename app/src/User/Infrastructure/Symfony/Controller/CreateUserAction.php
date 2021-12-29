<?php

declare(strict_types=1);

namespace App\User\Infrastructure\Symfony\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;

final class CreateUserAction extends AbstractController
{
    #[Route('/api/user', name:'api_user_post',  methods: ['POST'])]
    public function __invoke(): JsonResponse
    {
        return $this->json(['message'=> 'Hello, world!']);
    }
}
