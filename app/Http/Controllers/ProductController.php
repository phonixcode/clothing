<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;
use App\Http\Requests\ProductRequest;
use App\Http\Resources\ProductResource;
use App\Repositories\ProductRepository;

class ProductController extends Controller
{
    private $productRepository;

    public function __construct(ProductRepository $productRepository)
    {
        $this->productRepository = $productRepository;
    }
    /**
     * Display a listing of the resource.
     */
    public function index(): JsonResponse
    {
        $products = $this->productRepository->getAll();
        return response()->json(['status' => 'success', 'data' => $products], 200);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ProductRequest $request): JsonResponse
    {
        $product = $this->productRepository->create($request->validated());
        return response()->json(['status' => 'success', 'message' => 'Product created successfully', 'data' => $product], 201);
    }

    /**
     * Display the specified resource.
     */
    public function show($id): JsonResponse
    {
        $product = $this->productRepository->find($id);
        return response()->json(['status' => 'success', 'data' => $product], 200);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(ProductRequest $request, $id): JsonResponse
    {
        $product = $this->productRepository->update($id, $request->validated());
        return response()->json(['status' => 'success', 'message' => 'Product updated successfully', 'data' => $product], 200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id): JsonResponse
    {
        $this->productRepository->delete($id);
        return response()->json(['status' => 'success', 'message' => 'Product deleted successfully'], 200);
    }
}
