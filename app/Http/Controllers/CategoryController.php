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
        
        // Handle image upload
        if ($request->hasFile('image')) {
            $imageName = 'category_' . time() . '.' . $request->file('image')->getClientOriginalExtension();
            $imagePath = $request->file('image')->move(public_path("storage/category_images"),$imageName);
            // $imagePath->move(public_path("storage/category_images"),$imageName);
            $data['image'] = $imagePath->getFilename();
            // dd($imagePath->getFilename());
            $this->categoryService->createCategory($data);
        }
      

        
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
        
        // Handle image update
        if ($request->hasFile('image')) {
            $imageName = 'category_' . time() . '.' . $request->file('image')->getClientOriginalExtension();
            $imagePath = $request->file('image')->storeAs('category_images', $imageName, 'public');
            $data['image'] = $imagePath;
        }
        
        $this->categoryService->updateCategory($id, $data);
        return redirect()->route('categories.index')->with('status', 'Category updated successfully');
    }

    public function destroy($id)
    {
        $this->categoryService->deleteCategory($id);
        return redirect()->route('categories.index')->with('status', 'Category deleted successfully');
    }
}
