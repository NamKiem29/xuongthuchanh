@extends('admin.layouts.main')

@section('title')
Danh sách sản phẩm
@endsection

@push('style')
<style>
    .img-fluid {
        margin-left: 40px;
        width: 300px;
        height: 300px;
        border-radius: 15px;
        border: 3px solid #0d6efd;
       
    }

    .table-responsive {
        display: flex;
    }

    .detail-content {
        margin-left: 40px;
    }
</style>

@endpush

@section('add-product')
<a class="nav-link btn btn-danger create-new-button" href="{{ route('admin.products.list-product') }}"><i class="mdi mdi-chevron-double-left"> Back</i></a>
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

                    <h1 class="card-title text-center"><b>Chi tiết sản phẩm</b></h1>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <img src="{{ asset($product->image) }}" alt="Product Image" class="img-fluid mb-3">
                        <div class="detail-content">
                            <h1  style="color:yellow;">Thông tin sản phẩm</h1>

                            <p><b style="color:violet;">Tên sản phẩm: </b>- {{ $product->name }}</p>
                            <p><b style="color:violet;">Giá sản phẩm: </b>- {{ number_format($product->price, 0, ',', '.') }}$</p>
                            <p><b style="color:violet;">Giảm giá: </b>- {{ $product->discount_percent }}%</p>
                            <p><b style="color:violet;">Số lượng còn: </b>- {{ $product->stock_quantity }} sản phẩm</p>
                            <p><b style="color:violet;">Danh mục: </b>- {{ $product->category_name }}</p>
                            <p><b style="color:violet;">Thương hiệu </b>- {{ $product->brand_id }}</p>
                            <p><b style="color:violet;">Mô tả:<br> </b>- {{ $product->description }}</p>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
@endsection