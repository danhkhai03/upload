<?php

namespace App\Repositories;

use App\Models\Image;

class ImageRepository implements ImageRepositoryInterface
{
    protected $model;

    public function __construct(Image $image)
    {
        $this->model = $image;
    }

    public function all()
    {
        return $this->model->all();
    }

    public function find($id)
    {
        return $this->model->find($id);
    }

    public function create(array $data)
    {
        return $this->model->create($data);
    }

    public function update($id, array $data)
    {
        $image = $this->find($id);
        $image->update($data);
        return $image;
    }

    public function delete($id)
    {
        $image = $this->find($id);
        return $image->delete();
    }
    public function findBySessionId($sessionId)
    {
        return $this->model->where('session_id', $sessionId)->get();
    }
}