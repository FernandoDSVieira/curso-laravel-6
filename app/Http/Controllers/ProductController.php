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
        $product = $this->repository->find($id);

        if (!$product::find($id))
            return redirect()->back();


        return view('admin.pages.products.show', [
            'product' => $product
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
       if (!$product = $this->repository->find($id))
            return redirect()->back();

        return view('admin.pages.products.edit', compact('product'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        if (!$product = $this->repository->find($id))
        return redirect()->back();

        $product->update($request->all());

        return redirect()->route('products.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $product = $this->repository->where('id', $id)->first();
        if (!$product)
            return redirect()->back();

        $product->delete();

        return redirect()->route('products.index');

    }

}
