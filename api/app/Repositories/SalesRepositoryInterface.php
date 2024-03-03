<?php

namespace App\Repositories;

use App\Models\Sales;
use Illuminate\Database\Eloquent\Collection;

interface SalesRepositoryInterface
{
    public function find(int $id): Sales;
    public function all(): Collection;
    public function create(array $data): Sales;
    public function update(int $id, array $data): Sales;
    public function delete(int $id): void;
}