@extends('layouts.admin')
@section('content')
<main role="main" class="col-md-9 col-lg-10 px-4"><div style="position: absolute; inset: 0px; overflow: hidden; pointer-events: none; visibility: hidden; z-index: -1;" class="chartjs-size-monitor"><div class="chartjs-size-monitor-expand" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;"><div style="position:absolute;width:1000000px;height:1000000px;left:0;top:0"></div></div><div class="chartjs-size-monitor-shrink" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;"><div style="position:absolute;width:200%;height:200%;left:0; top:0"></div></div></div>
        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <h1 class="h2">Product Update</h1>
             <div class="btn-group mr-2">
                    <a href="/products" class="btn btn-outline-secondary">All Products</a>
                </div>
        </div>
        <div class="btn-toolbar mb-2 mb-md-0">
            
            <div class="card-body">
                <form method="" action="/product/update/{{$product->id}}" enctype="multipart/form-data">
                  @csrf
                  @method('put')
                    <div class="form-group">
                      <label for="name">Product Name: </label>
                      <input type="text" value="{{$product->Name}}" class="form-control" name="product_name" />
                    </div>
                    <div class="form-group">
                      <label for="price">Product Category: </label>
                      <select class="form-control" value="{{$product->name}}"  id="exampleFormControlSelect1" name="product_category">
                        <option value="men">Men</option>
                        <option value="women">Women</option>
                        <option value="kids">Kids</option>
                        <option value="accessories">Accessories</option>
                      </select>                    
                    </div>
                    <div class="form-group">
                      <label for="descripton">Product Description: </label>
                      <input type="text" value="{{$product->Description}}" class="form-control" name="product_desc" />
                    </div>
                    <div class="form-group">
                        <label for="price">Product Price: </label>
                        <input type="text" value="{{$product->Price}}" class="form-control" name="product_price" />
                    </div>
                    <div class="form-group">
                        <label for="quantity">Product Quantity: </label>
                        <input type="text" value="{{$product->Quantity}}" class="form-control" name="product_qty" />
                    </div>
                    <div class="form-group">
                      <label for="image">Product Image: </label>
                      <input type="file" class="form-control" name="product_img" />
                    </div>
                   
                    <button type="submit" class="btn btn-primary">Update Product</button>
                </form>
            </div>
        </div>
    </main>
  </div>
</div>
@endsection
