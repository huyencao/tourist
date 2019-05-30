<?php

namespace App\Repositories;

use App\Repositories\EloquentRepository;
use App\Models\User;
use App\Models\Media;

class UserRepository extends EloquentRepository
{
    public function model()
    {
        return \App\Models\User::class;
    }
    public function listUser()
    {
        $data = User::orderBy('id', 'DESC')->get();

        return $data;
    }
    public function findUser($id)
    {
        $data = User::find($id);
        if (empty($data)) {
            return false;
        } else {
            return $data;
        }
    }
}
