<?php

namespace App\Repositories\Image;

use App\Repositories\Eloquent\BaseRepository;

class ImageRepository extends BaseRepository implements IImageRepository
{

    public function getModel()
    {
        return \App\Models\Image::class;
    }

    public function calStorage(string $id): float
    {
        return $this->model->where('user_id', '=', $id)->sum('size');
    }

    public function index(int $userId, int $folderId)
    {
        return $this->model
                    ->where('user_id','=',$userId)
                    ->where('folder_id','=',$folderId)
                    ->get();
    }
}
