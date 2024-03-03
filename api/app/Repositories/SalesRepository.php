<?php 

namespace App\Repositories;

use App\Models\Sales;
use Illuminate\Database\Eloquent\Collection;

class SalesRepository implements SalesRepositoryInterface
{
    public function find(int $id): Sales
    {
        return Sales::find($id);
    }

    public function all(): Collection
    {
        return Sales::all();
    }

    public function create(array $data): Sales
    {
        return Sales::create($data);
    }

    public function update(int $id, array $data): Sales
    {
        $Sales = Sales::find($id);
        $Sales->update($data);
        return $Sales;
    }

    public function delete(int $id): void
    {
        Sales::destroy($id);
    }
}
