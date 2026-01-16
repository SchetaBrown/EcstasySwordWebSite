<?php

namespace App\Repositories;

use App\Models\Character;
use App\Repositories\Interfaces\LocationRepositoryInterface;
use Illuminate\Database\Eloquent\Collection;

class LocationRepository extends BaseRepository implements LocationRepositoryInterface
{
    public function all(): Collection
    {
        return Character::with(['worldView', 'guild'])->get();
    }

    public function findById(string $id): Character
    {
        return Character::with(['worldView', 'guild'])->findOrFail($id);
    }

    public function create()
    {

    }

    public function update(Character $character): Character
    {
        return $character;
    }
}
