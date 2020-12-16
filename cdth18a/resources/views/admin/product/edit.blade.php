@extends('admin.product.layout')
@section('content')
<form action="{{route("product.update", $product->product_id)}}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('PUT')
    <div class="form-group">
      <label for="idcat">Category:</label>
         <select name="category_id" class="form-control">
             <option value=''>---Vui lòng chọn danh mục sản phẩm---</option>>
             @foreach ($category as $key =>$cat)
             <option value="{{$cat->category_id}}">{{$cat->category_name}}</option>   
             @endforeach
         </select>
    </div>
     <div class="form-group">
      <label for="name">Name:</label>
     <input type="text" class="form-control" name="product_name" value="{{$product->product_name}}">
    </div>
    <div class="form-group">
        <label for="image">Image:</label>
        <input type="file" class="form-control" name="image">
      </div>
      <div class="form-group">
      <label for="price">Price:</label>
      <input type="text" class="form-control"name="product_price" value="{{$product->product_price}}">
    </div>
    <div class="form-group">
      <label for="discount">Discount:</label>
    <input type="text" class="form-control"name="product_discount" value="{{$product->product_discount}}">
    </div>
    <div class="form-group">
      <label for="content">Description:</label>
    <textarea class="form-control" id="contents" name="product_desc"> {{$product->product_desc}}</textarea>
      <script>CKEDITOR.replace('contents');</script>
    </div>
    <div class="form-group">
      <label for="size">Size:</label>
    <input type="text" class="form-control"name="product_size" value="{{$product->product_size}}">
    </div>
      <div class="form-group">
      <label for="exampleInputPassword1">Hiển thị</label>
        <select name="product_status" class="form-control input-sm m-bot15">
              <option value="0">Hiển thị</option>
              <option value="1">Ẩn</option>       
      </select>
      </div>
    <button type="submit" name="btn_editproduct"class="btn btn-primary">Thực Hiện</button>
  </form>
  </div>
  @stop
