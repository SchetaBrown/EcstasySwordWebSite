<?php

interface CharacterRepositoryInterface {
    public function all();
    public function findById(int $id);
}
