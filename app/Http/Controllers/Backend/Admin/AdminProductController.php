<?php

namespace App\Http\Controllers\Backend\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Product\ProductRequest;
use App\Http\Services\Product\ProductAdminService;
use App\Models\Product;
use Illuminate\Http\Request;

class AdminProductController extends Controller
{
    protected $productService;

    public function __construct(ProductAdminService $productService)
    {
        $this->productService = $productService;
    }

    public function index()
    {
        $products = Product::all();
        return view('admin.product.list', [
            'title' => 'Danh sách món ăn',
        ], compact('products'));
    }

    public function create()
    {
        return view('admin.product.add', [
            'title' => 'Thêm sản phẩm vào Menu',
        ]);
    }

    public function store(ProductRequest $request)
    {
        $this->productService->insert($request);

        return redirect()->back();
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Product $product)
    {
        return view('admin.product.edit', [
            'title' => 'Chỉnh sửa sản phẩm',
            'product' => $product,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Product $product)
    {
        $result = $this->productService->update($request, $product);
        if ($result) {
            return redirect('/admin/products/list');
        }

        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product)
    {
        $result = $this->productService->delete($product);
        if ($result) {
            return redirect('/admin/products/list');
        }

        return redirect()->back();
    }
}
