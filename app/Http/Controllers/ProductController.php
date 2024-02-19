<?php

namespace App\Http\Controllers;
use App\Http\Requests\UpdateProductRequest;
use Illuminate\Http\Request;
use App\Exports\ProductsExport;
use Maatwebsite\Excel\Facades\Excel;
use App\Http\Requests\StoreProductRequest;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;






class ProductController extends Controller
{
    public function index( Request $request )
    {
        //get data products
        $products = DB::table('products')
        ->when($request->input('name'), function ($query, $name) {
            return $query->where('name', 'like', '%' . $name . '%');
        })
        //->select('id', 'name', 'email', 'phone', DB::raw('DATE_FORMAT(created_at, "%d %M %Y") as created_at'))
        ->orderBy('created_at', 'desc')
        ->paginate(10);

        return view('pages.product.index', compact('products'));

        //return Excel::download(new ProductsExport($products), 'products.xlsx');

    }   

    public function  export()
    {
        $products = DB::table('products')
        ->select('name', 'category', 'stock', DB::raw('DATE_FORMAT(created_at, "%d %M %Y") as created_at'))
        ->orderBy('created_at') // Menambahkan pengurutan berdasarkan 'created_at' descending
        ->get();
        return Excel::download(new ProductsExport($products), 'product.xlsx');
    }


    public function create()
    {
        return view('pages.product.create');
    }

    public function store(Request $request)
    {
        $data = $request->all();
        \App\Models\Product::create($data);
        return redirect()->route('product.index')->with('success', 'Product created successfully.');
    }

    public function edit($id)
    {
        $product = \App\Models\Product::findOrFail($id);
        return view('pages.product.edit', compact('product')); 
    }

    public function update(Request $request, $id)
    {
        $data = $request->all();
        $product = \App\Models\Product::findOrFail($id);
        $product->update($data);
        return redirect()->route('product.index')->with('success', 'Product updated successfully.');
    }

    public function destroy($id)
    {
        $product = \App\Models\Product::findOrFail($id);
        $product->delete();
        return redirect()->route('product.index')->with('success', 'Product deleted successfully.');
    }


    public function show($id)
    {
        // Logika untuk menampilkan data produk dengan ID tertentu
    }

//     public function export(Request $request)
// {
//     $products = DB::table('products')
//         ->when($request->input('name'), function ($query, $name) {
//             return $query->where('name', 'like', '%' . $name . '%');
//         })
//         ->orderBy('created_at', 'desc')
//         ->get();


//     return Excel::download(new ProductsExport($products), 'products.xlsx');
// }

    // function export_excel(){
    //     return Excel:: download(new ExportProduct, 'products.xlsx');
    // }


   
}
