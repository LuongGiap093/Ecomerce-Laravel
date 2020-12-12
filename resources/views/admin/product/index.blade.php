@extends('admin.product.layout')
@section('content')


  <div class="content">

      <!-- Start Content-->
      <div class="container-fluid">
          
          <!-- start page title -->
          <div class="row">
              <div class="col-12">
                  <div class="page-title-box">
                      <div class="page-title-right">
                          <ol class="breadcrumb m-0">
                              <li class="breadcrumb-item"><a href="javascript: void(0);">Upvex</a></li>
                              <li class="breadcrumb-item"><a href="javascript: void(0);">Tables</a></li>
                              <li class="breadcrumb-item active">Table Editable</li>
                          </ol>
                      </div>
                      <h4 class="page-title">Table Editable</h4>
                  </div>
              </div>
          </div>     
          <!-- end page title --> 


          <div class="row">
              <div class="col-12">
                <div class="btn-group" role="group" aria-label="Basic example">
                  <a href="{{ route('product.index') }}" class="btn btn-primary">Quản lý</a>
                  <a href="{{route('product.create')}}" class="btn btn-success">Thêm mới</a>
              </div>
                  <div class="card">
                      <div class="card-body">

                        <li class="d-none d-sm-block">
                          <form class="app-search">
                              <div class="app-search-box">
                                  <div class="input-group">
                                      <input type="text" class="form-control"  placeholder="Search...">
                                      <div class="input-group-append">
                                          <button class="btn" type="submit">
                                              <i class="fe-search"></i>
                                          </button>
                                      </div>
                                  </div>
                              </div>
                          </form>
                      </li>
                      
                          <div class="table-responsive">
                              <table class="table table-centered mb-0" id="btn-editable">
                                  <thead>
                                      <tr>
                                          <th>#</th>
                                          <th>Danh mục sản phẩm </th>
                                         
                                          <th>Name</th>
                                          <th>Image</th>
                                          <th>Price</th>
                                          <th>Discount</th>
                                          <th>Des</th>
                                          <th>Size</th>
                                          <th>Status</th>
                                          <th>Edit</th>
                                          <th>Lock</th>
                                          <th>Delete</th>
                                      </tr>
                                  </thead>                             
                                  <tbody>
                                    @foreach($products as $product)
                                                                 
                                
                                      <tr>
                                         
                                          <td>1</td>
                                     
                                         <td> 
                                             @foreach ($categorys as $category)
                                            @if($product->category_id==$category->category_id)
                                                {{$category->category_name}}
                                            @endif
                                            @endforeach
            
                                         </td>
                                          <td><img src="{{asset('images/'. $product->image)}}" width="40" /></td>
                                           
                                          <td>{{$product->product_name}} </td>
                                          <td>{{$product->product_price}} </td>
                                          <td>{{$product->product_discount}} </td>
                                          <td>{{$product->product_desc}} </td>
                                          <td>{{$product->product_size}} </td>
                                          <td>{{$product->product_status}} </td>
                                          <td><a href="{{route('product.edit', $product->product_id)}}" class="btn btn-primary"><i class="fa fa-edit"></i></a></td>  
                                          <td><a href="" class="btn btn-warning"><i class="fa fa-lock"></i></a></td>
                                          <td>
                                            <form action="{{route('product.destroy', $product->product_id)}}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger"><i class="fa fa-trash"></i></button>
                                                                              
                                            </form>   
                                          </td> 
                                          
                                      </tr>
                                     
                                      @endforeach
                                  </tbody>
                              </table>
                          </div> <!-- end .table-responsive-->
                      </div> <!-- end card-body -->
                  </div> <!-- end card -->
              </div> <!-- end col -->
          </div> <!-- end row -->
          
      </div> <!-- container -->

  </div> <!-- content -->

  <!-- Footer Start -->

  <!-- end Footer -->





@stop
  