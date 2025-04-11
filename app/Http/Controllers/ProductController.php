<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;
use App\Models\Brand;


class ProductController extends Controller
{
    // Danhh sách sản phẩm
    public function showProduct()
    {
        $listProduct = Product::join('categories', 'products.category_id', '=', 'categories.category_id')
            ->join('brands', 'products.brand_id', '=', 'brands.brand_id')
            ->select('products.*', 'categories.name as category_name', 'brands.name as brand_name')
            ->orderBy('product_id', 'asc')->paginate(10);
        return view('admin.page.products.list-product', ['listProduct' => $listProduct]);
    }
    // Xem chi thiết sản phẩm
    public function detailProduct($product_id)
    {
        $product = Product::find($product_id);
        if ($product) {
            return view('admin.page.products.detail-product', ['product' => $product]);
        } else {
            return redirect()->route('admin.products.list-product')->with([
                'message' => 'Sản phẩm không tồn tại'
            ]);
        }
    }
    // Chuyến sang form thêm sản phẩm
    public function addProduct()
    {
        $categories = Category::all();
        $brands = Brand::all();

        return view('admin.page.products.form-add-product', [
            'categories' => $categories,
            'brands' => $brands
        ]);
    }
    public function saveProduct(Request $request)
    {
        $linkImage = '';
        if ($request->hasFile('imgProduct')) {
            $file = $request->file('imgProduct');
            $newImage = time() . '.' . $file->getClientOriginalExtension();  // Lưu tên file với phần mở rộng
            $linkImage = 'assets/images/Admin/';  // Đường dẫn thư mục lưu hình ảnh
            $file->move(public_path('assets/images/Admin'), $newImage);  // Di chuyển file vào thư mục đúng
            $linkImage .= $newImage;  // Tạo đường dẫn đầy đủ cho hình ảnh
        }

        $data = [
            'name' => $request->nameProduct,
            'image' => $linkImage,
            'price' => $request->priceProduct,
            'category_id' => $request->categoryProduct,
            'brand_id' => $request->brandProduct,
            'discount_percent' => $request->discountsProduct,
            'stock_quantity' => $request->quantityProduct,
            'description' => $request->decriptionProduct,
        ];
       

        Product::create($data);
        return redirect()->route('admin.products.list-product')->with([
            'message' => 'Thêm sản phẩm thành công'
        ]);
    }
    public function deleteProduct($product_id)
    {
        $product = Product::find($product_id);
        if ($product) {
            $product->delete();
            return redirect()->route('admin.products.list-product')->with([
                'message' => 'Xóa sản phẩm thành công'
            ]);
        } else {
            return redirect()->route('admin.products.list-product')->with([
                'message' => 'Sản phẩm không tồn tại'
            ]);
        }
    }
    public function updateForm($idProduct)
    {
        $product = Product::join ('categories', 'products.category_id', '=', 'categories.category_id')
            ->join('brands', 'products.brand_id', '=', 'brands.brand_id')
            ->select('products.*', 'categories.name as category_name', 'brands.name as brand_name')
            ->find($idProduct);
        if($product){
            $gategory = Category::all();
            $brand = Brand::all();
            
            return view('admin.page.products.form-update-product', [
                'product' => $product,
                'categories' => $gategory,
                'brands' => $brand
            ]);
           
        }else{
            return redirect()->route('admin.products.list-product')->with([
                'message' => 'Sản phẩm không tồn tại'
            ]);
        }
    }
    public function updateProduct(Request $request, $idProduct)
    {
        $product = Product::find($idProduct);
        if ($product) {
            $linkImage = $product->image;
            if ($request->hasFile('imgProduct')) {
                $file = $request->file('imgProduct');
                $newImage = time() . '.' . $file->getClientOriginalExtension();  // Lưu tên file với phần mở rộng
                $linkImage = 'assets/images/Admin/';  // Đường dẫn thư mục lưu hình ảnh
                $file->move(public_path('assets/images/Admin'), $newImage);  // Di chuyển file vào thư mục đúng
                $linkImage .= $newImage;  // Tạo đường dẫn đầy đủ cho hình ảnh
            }

            $data = [
                'name' => $request->nameProduct,
                'image' => $linkImage,
                'price' => $request->priceProduct,
                'category_id' => $request->categoryProduct,
                'brand_id' => $request->brandProduct,
                'discount_percent' => $request->discountsProduct,
                'stock_quantity' => $request->quantityProduct,
                'description' => $request->decriptionProduct,
            ];

            Product::where('product_id', '=', $idProduct)->update($data);
            return redirect()->route('admin.products.list-product')->with([
                'message' => 'Cập nhật sản phẩm thành công'
            ]);
        } else {
            return redirect()->route('admin.products.list-product')->with([
                'message' => 'Sản phẩm không tồn tại'
            ]);
        }
    }
}
