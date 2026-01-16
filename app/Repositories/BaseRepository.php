<?php

namespace App\Repositories;

abstract class BaseRepository {
    abstract protected function all();
    abstract protected function findById(string $id);
}
