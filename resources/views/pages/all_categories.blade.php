@extends('layouts.admin')
@section('content')
    <main role="main" class="col-md-9 col-lg-10 px-4"><div style="position: absolute; inset: 0px; overflow: hidden; pointer-events: none; visibility: hidden; z-index: -1;" class="chartjs-size-monitor"><div class="chartjs-size-monitor-expand" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;"><div style="position:absolute;width:1000000px;height:1000000px;left:0;top:0"></div></div><div class="chartjs-size-monitor-shrink" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;"><div style="position:absolute;width:200%;height:200%;left:0; top:0"></div></div></div>
        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <h1 class="h2">All Categories</h1>
            <div class="btn-toolbar mb-2 mb-md-0">
                <div class="btn-group mr-2">
                    <a href="/category/create" class="btn btn-outline-secondary">Add New Category</a>
                </div>
        </div>
        </div>
        <div class="btn-toolbar mb-2 mb-md-0">
            <table class="table table-bordered">
              <tbody>              
                  <tr>
                      <th>ID</th>
                      <th width="">Category Name</th>
                      <th width="">Category Description</th>
                      <th width="">Category Image</th>
                      <th width="">Product Type</th>
                      <th width="">Actions</th>
                  </tr>
                  @foreach ($categs as $key=>$categ)
                  <tr>
                      <td>{{++$key}}</td>
                      <td>{{$categ->Category_Name}}</td>
                      <td>{{$categ->Category_Description}}</td>
                      <td><img src = "{{ asset('uploads/categories/' . $categ->Category_Image) }}" width="100" height="100"></td>
                      <td>{{$categ->Product_Type}}</td>
                      <td>
                        <a class="btn btn-info" href="/category/edit/{{$categ->id}}"><i class="fa fa-btn fa-edit"> </i>Update</a>
                        <a class="btn btn-danger" href="/category/delete/{{$categ->id}}"><i class="fa fa-btn fa-trash"> </i>Delete</a>
                      </td>
                  </tr>
                  @endforeach
              </tbody>
            </table>
        </div>
    </main>
  </div>
</div>
@endsection
