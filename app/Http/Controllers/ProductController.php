<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreUpdateProductRequest;
use App\Models\Product;
use Illuminate\Cache\Repository;
use Illuminate\Http\Request;


class ProductController extends Controller
{

    protected $request;
    private $repository;


    public function __construct(Request $request, Product $product)
    {
        $this->request = $request;
        $this->repository = $product;
    }

    public function index()
    {

        $products = Product::paginate();

        return view('admin.pages.products.index', [
            'products' => $products,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.pages.products.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreUpdateProductRequest $request) {

        $data = $request->only( 'name', 'description', 'price');

        $this->repository::create($data);

        return redirect()->route('products.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        // $product = Product::where('id', $id)->firts();

        if (!$this->repository::find($id))
            return redirect()->back();


        return view('admin.pages.products.show', [
            'product' => $this->repository
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        return view('admin.pages.products.edit', compact('id'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        dd('editando o produto: {$id}');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $product = $this->repository->where('id', $id)->first();
        if (!$product)
        return redirect()->back();


    }

}
