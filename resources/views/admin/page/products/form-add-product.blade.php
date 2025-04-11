@extends('admin.layouts.main')

@section('title')
Thêm sản phẩm mới
@endsection

@section('content')
<div class="col-12 grid-margin stretch-card">
  <div class="card">
    <div class="card-body">
      <div class=" text-center">
        <h1 class="card-title">Thêm sản phẩm mới</h1>
      </div>
      <form class="forms-sample text-white" action="{{ route('admin.products.save-product') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
          <label for="exampleInputName1">Tên sản phẩm: </label>
          <input type="text" class="form-control text-white" name="nameProduct" placeholder="Name">
        </div>
        <div class="form-group">
          <label>Ảnh sản phẩm: </label>
          <input type="file" name="imgProduct" class="file-upload-default " multiple>
          <div class="input-group col-xs-12">
            <input type="text" class="form-control file-upload-info" disabled placeholder="Ảnh sản phẩm">
            <span class="input-group-append">
              <button class="file-upload-browse btn btn-primary" type="button">Upload</button>
            </span>
          </div>
        </div>
        <div class="form-group">
          <label for="exampleInputEmail3">Giá sản phẩm</label>
          <input type="number" class="form-control text-white" name="priceProduct" placeholder="Price">
        </div>
        <div class="form-group">
          <label for="exampleSelectGender">Danh mục: </label>
          <select class="form-control text-white" name="categoryProduct" >
            @foreach($categories as $category)
            <option value="{{ $category->category_id }}" class="text-white">{{ $category->name }}</option>
            @endforeach
          </select>
        </div>
        <div class="form-group">
          <label for="exampleSelectGender">Thương hiệu: </label>
          <select class="form-control text-white" name="brandProduct">
            @foreach($brands as $brand)
            <option value="{{ $brand->brand_id }}" class="text-white">{{ $brand->name }}</option>
            @endforeach
          </select>
        </div>
        <div class="form-group">
          <label for="exampleInputPassword4">% giảm giá (0% - 50%): </label>
          <input type="number" class="form-control text-white" name="discountsProduct" placeholder="̀% giảm giá" min="0" max="50">
        </div>
        <div class="form-group">
          <label for="exampleInputPassword4">Số lượng trong kho: </label>
          <input type="number" class="form-control text-white" name="quantityProduct" placeholder="Số lượng">
        </div>
        <div class="form-group">
          <label for="exampleTextarea1">Mô tả: </label>
          <textarea class="form-control text-white" rows="4" name="decriptionProduct"></textarea>
        </div>
        <button type="submit" class="btn btn-success mr-2">Submit</button>
        <a href="{{ route('admin.products.list-product') }}"><button class="btn btn-danger">Cancel</button></a>
      </form>
    </div>
  </div>
</div>
@endsection


