@extends('admin.category.layout')
@section('content')
<form action="{{route("category.update", $category->category_id)}}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('PUT')
    <div class="form-group">
      <label for="name">Name:</label>
    <input type="text" class="form-control" name="category_name" value="{{$category->category_name}}">
    </div>
    <div class="form-group">
      <label for="image">Image:</label>
      <input type="file" class="form-control" name="image" value="{{$category->image}}"/>
    </div>
   
   <div class="form-group">
     <label for="content">Description:</label>
     <textarea class="form-control" id="contents" name="category_desc" value="{{$category->category_desc}}"></textarea>
     <script>CKEDITOR.replace('contents');</script>
   </div>
 
    <div class="form-group">
     <label for="exampleInputPassword1">Hiển thị</label>
       <select name="category_status" class="form-control input-sm m-bot15">
            <option value="0">Hiển thị</option>
             <option value="1">Ẩn</option>       
     </select>
     </div>
   <button type="submit" name="btn_editcategory"class="btn btn-primary">Thực Hiện</button>
 </form>
 </div>
 @stop
