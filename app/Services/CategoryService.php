<?php

namespace App\Services;

use App\Models\Category;
use App\Repositories\CategoryRepositoryInterface;

class CategoryService
{
    protected $categoryRepository;

    public function __construct(CategoryRepositoryInterface $categoryRepository)
    {
        $this->categoryRepository = $categoryRepository;
    }

    public function getAllCategories()
    {
        return $this->categoryRepository->all();
    }

    public function createCategory(array $data)
    {
        // Here you can apply any business logic/validation before creating the category
        return $this->categoryRepository->create($data);
    }

    public function updateCategory($id, array $data)
    {
        // Here you can apply any business logic/validation before updating the category
        return $this->categoryRepository->update($id, $data);
    }

    public function deleteCategory($id)
    {
        // Here you can apply any business logic/validation before deleting the category
        return $this->categoryRepository->delete($id);
    }

    public function getCategoryById($id)
    {
        return $this->categoryRepository->find($id);
    }
}


