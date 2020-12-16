@extends('admin.product.layout')
@section('content')
<form action="{{route('product.store')}}" method="POST" enctype="multipart/form-data">
    {{ csrf_field() }}
    <h2>Thêm sản phẩm</h2>
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
     <input type="text" class="form-control" name="product_name">
   </div>
   <div class="form-group">
     <label for="image">Image:</label>
     <input type="file" class="form-control"name="image" value="" />
   </div>
   <div class="form-group">
    <label for="price">Price:</label>
    <input type="text" class="form-control"name="product_price">
  </div>
  <div class="form-group">
    <label for="discount">Discount:</label>
    <input type="text" class="form-control"name="product_discount">
  </div>
  <div class="form-group">
    <label for="content">Description:</label>
    <textarea class="form-control" id="contents" name="product_desc"></textarea>
    <script>CKEDITOR.replace('contents');</script>
  </div>
  <div class="form-group">
    <label for="size">Size:</label>
    <input type="text" class="form-control"name="product_size">
  </div>
   <div class="form-group">
    <label for="exampleInputPassword1">Hiển thị</label>
      <select name="product_status" class="form-control input-sm m-bot15">
           <option value="0">Hiển thị</option>
            <option value="1">Ẩn</option>       
    </select>
    </div>
   <button type="submit" name="btn_addproduct"class="btn btn-primary">Thực Hiện</button>
 </form>
 </div>
 @stop
