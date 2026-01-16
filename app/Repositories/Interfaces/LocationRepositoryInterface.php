<?php

namespace App\Repositories\Interfaces;

interface LocationRepositoryInterface {
    public function all();
    public function findById(string $id);
}
