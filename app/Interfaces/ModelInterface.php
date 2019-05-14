<?php

namespace App\Interfaces;

use Illuminate\Contracts\Pagination\Paginator;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

interface ModelInterface
{
    public function getAll(): Collection;

    public function paginate(int $perPage = 20): Paginator;

    public function getById(int $id): ?Model;

    public function create(array $data): Model;

    public function update($id, array $data): void;

    public function updateOrCreate(array $checkedFields, array $uncheckedFields): Model;

    public function delete($id): bool;
}
