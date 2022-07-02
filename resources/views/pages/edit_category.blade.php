@extends('layouts.admin')
@section('content')
<main role="main" class="col-md-9  col-lg-10 px-4"><div style="position: absolute; inset: 0px; overflow: hidden; pointer-events: none; visibility: hidden; z-index: -1;" class="chartjs-size-monitor"><div class="chartjs-size-monitor-expand" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;"><div style="position:absolute;width:1000000px;height:1000000px;left:0;top:0"></div></div><div class="chartjs-size-monitor-shrink" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;"><div style="position:absolute;width:200%;height:200%;left:0; top:0"></div></div></div>
        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <h1 class="h2">Update Category</h1>
            <div class="btn-group mr-2">
                    <a href="/categories" class="btn btn-outline-secondary">All Categories</a>
                </div>
        </div>
        <div class="btn-toolbar mb-2 mb-md-0">
            
            <div class="card-body">
                <form method="POST" action="/category/update/{{$categ->id}}" enctype="multipart/form-data">
                  @csrf
                  @method('put')
                    <div class="form-group">
                      <label for="name">Category Name: </label>
                      <input type="text" value="{{$categ->Category_Name}}" class="form-control" name="category_name" />
                    </div>
                    <div class="form-group">
                      <label for="name">Category Description: </label>
                      <input type="text" value="{{$categ->Category_Description}}" class="form-control" name="category_description" />
                    </div>
                    <div class="form-group">
                      <label for="image">Category Image</label>
                      <input type="file" class="form-control" name="category_img" />
                    </div>
                    <div class="form-group">
                      <label for="price">Product Type: </label>
                      <input type="text" value="{{$categ->Product_Type}}" class="form-control" name="product_type" />                    
                    </div>
                  
                    <button type="submit" class="btn btn-primary">Update Category</button>
                </form>
            </div>
        </div>
    </main>
  </div>
</div>
@endsection
