@extends('admin.category.layout')
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
                  <a href="{{ route('category.index') }}" class="btn btn-primary">Quản lý</a>
                  <a href="{{route('category.create')}}" class="btn btn-success">Thêm mới</a>
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
                                        
                                          <th>Tên Loại SP</th>
                                          <th>Image</th>
                                          <th>Miêu tả</th>
                                          <th>Trạng Thái</th>
                                       
                                          <th>Edit</th>
                                          <th>Lock</th>
                                          <th>Delete</th>
                                      </tr>
                                  </thead>                             
                                  <tbody>
                                    @foreach($cate ?? '' as $category)                           
                                      <tr>            
                                         
                                           
                                          <td>{{$category->category_name}} </td>

                                          <td><img src="{{asset('images/'. $category->image)}}" width="40" /></td>
                                          <td>{{$category->category_desc}} </td>
                                          <td><span class="text-ellipsis">
                                            <?php
                                             if($category->category_status==0){
                                              ?>
                                              <a href="{{URL::to('/unactive-category-product/'.$category->category_id)}}"><span class="fa-thumb-styling fa fa-thumbs-up"></span></a>
                                              <?php
                                               }else{
                                              ?>  
                                               <a href="{{URL::to('/active-category-product/'.$category->category_id)}}"><span class="fa-thumb-styling fa fa-thumbs-down"></span></a>
                                              <?php
                                             }
                                            ?>
                                          </span></td>
                                          <td><a href="{{route('category.edit',$category->category_id)}}" class="btn btn-primary"><i class="fa fa-edit"></i></a></td>  
                                          <td><a href="" class="btn btn-warning"><i class="fa fa-lock"></i></a></td>
                                          <td>
                                            <form action="{{route('category.destroy',$category->category_id)}}" method="POST">
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
  