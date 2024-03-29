<?php

declare(strict_types=1);

namespace App\User\Infrastructure\Doctrine\Repository;

use App\Shared\Domain\EventSourcedAggregateRoot;
use App\Shared\Infrastructure\Doctrine\Repository\AbstractWriteModel;
use App\User\Domain\Repository\UserStore;
use App\User\Domain\User;
use RuntimeException;

final class UserWriteModel extends AbstractWriteModel implements UserStore
{
    public function get(): User
    {
        // TODO: Implement get() method.
    }

    public function store(EventSourcedAggregateRoot $user): void
    {
        if (!$user instanceof User) {
            throw new RuntimeException('This aggregate root is not supported by this write model.');
        }

        parent::store($user);
    }
}
