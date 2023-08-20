<?php

class UserEntity {
    public $users = [];

    public function getAll() {
        return $this->users;
    }

    public function getById($id) {
        return array_filter($this->users, function ($user) use ($id){
            return $user['id'] === $id;
        });
    }
}
