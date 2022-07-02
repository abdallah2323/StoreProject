@extends('layouts.admin')
@section('content')
    <main role="main" class="col-md-9 col-lg-10 px-4"><div style="position: absolute; inset: 0px; overflow: hidden; pointer-events: none; visibility: hidden; z-index: -1;" class="chartjs-size-monitor"><div class="chartjs-size-monitor-expand" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;"><div style="position:absolute;width:1000000px;height:1000000px;left:0;top:0"></div></div><div class="chartjs-size-monitor-shrink" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;"><div style="position:absolute;width:200%;height:200%;left:0; top:0"></div></div></div>
        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <h1 class="h2">All Teams</h1>
            <div class="btn-toolbar mb-2 mb-md-0">
                <div class="btn-group mr-2">
                    <a href="/team/create" class="btn btn-outline-secondary">Add New Team</a>
                </div>
        </div>
        </div>
        <div class="btn-toolbar mb-2 mb-md-0">
            <table class="table table-bordered">
              <tbody>              
                  <tr>
                      <th>ID</th>
                      <th width="">Team Name</th>
                      <th width="">Team Category</th>
                      <th width="">Number Of Members</th>
                      <th width="">Team Details</th>
                      <th width="">Actions</th>
                  </tr>
                  @foreach ($teams as $key=>$team)
                  <tr>
                      <td>{{++$key}}</td>
                      <td>{{$team->team_name}}</td>
                      <td>{{$team->team_category}}</td>
                      <td>{{$team->members_number}}</td>
                      <td>{{$team->team_detail}}</td>
                      <td>
                        <a class="btn btn-success" href="/team/show/{{$team->id}}"><i class="fa fa-btn fa-eye"> </i>Show</a>
                        <a class="btn btn-info" href="/team/edit/{{$team->id}}"><i class="fa fa-btn fa-edit"> </i>Update</a>
                        <a class="btn btn-danger" href="/team/delete/{{$team->id}}"><i class="fa fa-btn fa-trash"> </i>Delete</a>
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
