<?php

namespace App\Http\Controllers;


use App\Http\Requests\CategoryRequest;
use App\Services\CategoryService;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    protected $categoryService;

    public function __construct(CategoryService $categoryService)
    {
        $this->categoryService = $categoryService;
    }

    public function index()
    {
        $categories = $this->categoryService->getAllCategories();
        return view('dashboard.category', compact('categories'));
    }

    public function create()
    {
        return view('categories.create');
    }

    public function store(CategoryRequest $request)
    {
        $data = $request->validated();
        $this->categoryService->createCategory($data);
        return redirect()->route('categories.index')->with('status', 'Category created successfully');
    }

    public function edit($id)
    {
        $category = $this->categoryService->getCategoryById($id);
        return view('categories.edit', compact('category'));
    }

    public function update(CategoryRequest $request, $id)
    {
        $data = $request->validated();
        $this->categoryService->updateCategory($id, $data);
        return redirect()->route('categories.index')->with('status', 'Category updated successfully');
    }

    public function destroy($id)
    {
        $this->categoryService->deleteCategory($id);
        return redirect()->route('categories.index')->with('status', 'Category deleted successfully');
    }
}
