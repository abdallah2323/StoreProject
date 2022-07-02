@extends('layouts.admin')
@section('content')
<main role="main" class="col-md-9  col-lg-10 px-4"><div style="position: absolute; inset: 0px; overflow: hidden; pointer-events: none; visibility: hidden; z-index: -1;" class="chartjs-size-monitor"><div class="chartjs-size-monitor-expand" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;"><div style="position:absolute;width:1000000px;height:1000000px;left:0;top:0"></div></div><div class="chartjs-size-monitor-shrink" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;"><div style="position:absolute;width:200%;height:200%;left:0; top:0"></div></div></div>
        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <h1 class="h2">Update Informations</h1>
            <div class="btn-group mr-2">
                    <a href="/abouts" class="btn btn-outline-secondary">Show Informations</a>
                </div>
        </div>
        <div class="btn-toolbar mb-2 mb-md-0">
            
            <div class="card-body">
                <form method="POST" action="/about/update/{{$about->id}}" enctype="multipart/form-data">
                  @csrf
                  @method('put')
                    <div class="form-group">
                        <label for="name">Address: </label>
                        <input type="text" value="{{$about->Address}}" class="form-control" name="address" />
                    </div>
                    <div class="form-group">
                        <label for="name">Description: </label>
                        <input type="text" value="{{$about->Description}}" class="form-control" name="description" />
                    </div>
                    <div class="form-group">
                        <label for="name">Quote: </label>
                        <input type="text" value="{{$about->Quote}}" class="form-control" name="quote" />
                    </div>
                    <div class="form-group">
                        <label for="name">Gmail: </label>
                        <input type="text" value="{{$about->Gmail}}" class="form-control" name="gmail" />
                    </div>
                    <div class="form-group">
                        <label for="name">Whatsapp Number: </label>
                        <input type="text" value="{{$about->Whatsapp}}" class="form-control" name="whatsapp" />
                    </div>
                    <div class="form-group">
                      <label for="name">Facebook link: </label>
                      <input type="text" value="{{$about->Facebook}}" class="form-control" name="facebook" />
                    </div>
                    <div class="form-group">
                      <label for="name">Twitter Link: </label>
                      <input type="text" value="{{$about->Twitter}}" class="form-control" name="twitter" />
                    </div>
                    <div class="form-group">
                      <label for="price">Instagram Link: </label>
                      <input type="text" value="{{$about->Instagram}}" class="form-control" name="instagram" />                    
                    </div>
                    <div class="form-group">
                        <label for="price">LinkedIn Link: </label>
                        <input type="text" value="{{$about->Linkedin}}" class="form-control" name="linkedin" />                    
                    </div>
                  
                    <button type="submit" class="btn btn-primary">Update</button>
                </form>
            </div>
        </div>
    </main>
  </div>
</div>
@endsection
