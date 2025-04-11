@extends('admin.layouts.main')

@section('title')
Danh sách sản phẩm
@endsection


@push('style')
<style>
    .pagination .page-item.active .page-link {
        background-color: #0d6efd;
        border-color: #0d6efd;
        color: white;
        box-shadow: 0 0 8px rgba(13, 110, 253, 0.4);
        border-radius: 8px;
    }

    .pagination .page-link {
        color: #0d6efd;
        transition: all 0.3s ease;
        border-radius: 6px;
    }

    .pagination .page-link:hover {
        background-color: #e7f1ff;
    }
</style>

@endpush

@section('add-product')
<a class="nav-link btn btn-success create-new-button" href="{{ route('admin.products.form-add-product') }}">+ Add product</a>
@endsection

@section('content')
<div class="content">
    <div class="row">
        <div class="col-md-12">
            <div class="card">

                @if(session('message'))
                <div class="alert alert-success" role="alert" style="color:green;">
                    {{ session('message') }}
                </div>
                @endif

                <div class="card-header">

                    <h1 class="card-title text-center"><b>Danh sách sản phẩm</b></h1>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered table-hover text-center text-white">
                            <thead class="table-warning">
                                <tr>
                                    <th style="color: black;">STT</th>
                                    <th style="color: black;">Tên sản phẩm</th>
                                    <th style="color: black;">Danh mục</th>
                                    <th style="color: black;">Thương hiệu</th>
                                    <th style="color: black;">Ảnh sản phẩm</th>
                                    <th style="color: black;">Giá sản phẩm</th>
                                    <th style="color: black;">% giảm giá</th>
                                    <th style="color: black;">Số lượng</th>
                                    <th style="color: black;">Thao tác</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($listProduct as $key => $product)
                                <tr>
                                    <td>{{ $key+1 }}</td>
                                    <td>{{ $product->name }}</td>
                                    <td>{{ $product->category_name }}</td>
                                    <td>{{ $product->brand_name }}</td>
                                    <td><img src="{{ asset($product->image) }}" class="img-fluid" style="width: 100px; height: 100px; border-radius: 10px; border: 1px solid green"></td>
                                    <td>{{ $product->price }} $</td>
                                    <td>{{ $product->discount_percent }} %</td>
                                    <td>{{ $product->stock_quantity }}</td>
                                    <td>
                                        <a href="{{ route('admin.products.delete-product', $product->product_id) }}" class="btn btn-danger"
                                            onclick="return confirm('Bạn có chắc chắn muốn xóa sản phẩm {{ $product->name }} không?')">
                                            <i class="fas fa-trash"></i>
                                        </a>
                                        <a href="{{ route('admin.products.form-update-product', $product->product_id) }}" class="btn btn-success"><i class="fas fa-edit"></i></a>
                                        <a href="{{ route('admin.products.detail-product', $product->product_id) }}" class="btn btn-warning"><i class="fas fa-eye"></i></a>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="d-flex justify-content-center mt-4">
        {{ $listProduct->links('pagination::bootstrap-5') }}
    </div>
</div>
@endsection