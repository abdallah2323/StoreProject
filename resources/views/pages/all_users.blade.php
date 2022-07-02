@extends('layouts.admin')
@section('content')
    <main role="main" class="col-md-9 col-lg-10 px-4"><div style="position: absolute; inset: 0px; overflow: hidden; pointer-events: none; visibility: hidden; z-index: -1;" class="chartjs-size-monitor"><div class="chartjs-size-monitor-expand" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;"><div style="position:absolute;width:1000000px;height:1000000px;left:0;top:0"></div></div><div class="chartjs-size-monitor-shrink" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;"><div style="position:absolute;width:200%;height:200%;left:0; top:0"></div></div></div>
        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <h1 class="h2">Users</h1>
            <div class="btn-toolbar mb-2 mb-md-0">

        </div>
        </div>
        <div class="btn-toolbar mb-2 mb-md-0">
            <table class="table table-bordered">
              <tbody>              
                  <tr>
                      <th>ID</th>
                      <th width="">User Name</th>
                      <th width="">User Email</th>
                      <th width="">Admin Type</th>
                      <th width="">Actions</th>
                  </tr>
                  @foreach ($users as $key=>$user)
                  <tr>
                      <td>{{++$key}}</td>
                      <td>{{$user->name}}</td>
                      <td>{{$user->email}}</td>
                      <td>{{$user->admin}}</td>
                      <td>
                        <a class="btn btn-info" href="/user/edit/{{$user->id}}"><i class="fa fa-btn fa-edit"> </i>Update</a>
                        <a class="btn btn-danger" href="/user/delete/{{$user->id}}"><i class="fa fa-btn fa-trash"> </i>Delete</a>
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
