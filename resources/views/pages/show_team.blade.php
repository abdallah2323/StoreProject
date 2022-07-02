@extends('layouts.admin')
@section('content')
    <main role="main" class="col-md-9 col-lg-10 px-4"><div style="position: absolute; inset: 0px; overflow: hidden; pointer-events: none; visibility: hidden; z-index: -1;" class="chartjs-size-monitor"><div class="chartjs-size-monitor-expand" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;"><div style="position:absolute;width:1000000px;height:1000000px;left:0;top:0"></div></div><div class="chartjs-size-monitor-shrink" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;"><div style="position:absolute;width:200%;height:200%;left:0; top:0"></div></div></div>
        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <h1 class="h2">Team {{$team->id}} Members</h1>
            <div class="btn-toolbar mb-2 mb-md-0">
                <div class="btn-group mr-2">
                    <a href="/teams" class="btn btn-outline-secondary">Show Teams</a>
                </div>
        </div>
        </div>
        <div class="btn-toolbar mb-2 mb-md-0">
            <table class="table table-bordered">
              <tbody>              
                  <tr>
                      <th>ID</th>
                      <th width="">Member Name</th>
                      <th width="">Member Old</th>
                      <th width="">Member Gender</th>
                      <th width="">Team Name</th>
                      <th width="">Member Phone</th>
                      <th width="">Member Details</th>
                      <th width="">Member Image</th>
                      <th width="">Facebook Link</th>
                      <th width="">Twitter Link</th>
                      <th width="">Instagram Link</th>
                      <th width="">Actions</th>
                  </tr>
                  @foreach ($members as $key=>$member)
                  @if($member->team_name == $team->team_name)
                  <tr>
                      <td>{{++$key}}</td>
                      <td>{{$member->member_name}}</td>
                      <td>{{$member->member_old}}</td>
                      <td>{{$member->member_gender}}</td>
                      <td>{{$member->team_name}}</td>
                      <td>{{$member->member_phone}}</td>
                      <td>{{$member->member_detail}}</td>
                      <td><img src = "{{ asset('uploads/members/' . $member->member_image) }}" width="100" height="100"></td>
                      <td>{{$member->member_facebook}}</td>
                      <td>{{$member->member_twitter}}</td>
                      <td>{{$member->member_instagram}}</td>
                      <td>
                        <a class="btn btn-info" href="/member/edit/{{$member->id}}"><i class="fa fa-btn fa-edit"> </i>Update</a>
                        <a class="btn btn-danger" href="/member/delete/{{$member->id}}"><i class="fa fa-btn fa-trash"> </i>Delete</a>
                      </td>
                  </tr>
                  @endif
                  @endforeach
              </tbody>
            </table>
        </div>
    </main>
  </div>
</div>
@endsection
