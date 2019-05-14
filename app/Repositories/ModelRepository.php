<?php

namespace App\Repositories;

use App\Interfaces\ModelInterface;
use Illuminate\Contracts\Pagination\Paginator;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

class ModelRepository implements ModelInterface
{
    protected $model;

    public function __construct(Model $model)
    {
        $this->model = $model;
    }

    public function getAll(): Collection
    {
        return $this->model->all();
    }

    public function paginate(int $perPage = 20): Paginator
    {
        return $this->model->paginate($perPage);
    }

    public function getById(int $id): ?Model
    {
        return $this->model->find($id);
    }

    public function create(array $data): Model
    {
        return $this->model->create($data);
    }

    public function update($id, array $data): void
    {
        $model = $this->getById($id);

        $model->update($data);
    }

    public function delete($id): bool
    {
        return $this->model->destroy($id) > 0;
    }

    public function updateOrCreate(array $checkedFields, array $uncheckedFields): Model
    {
        return $this->model->updateOrCreate($checkedFields, $uncheckedFields);
    }
}
