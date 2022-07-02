@extends('layouts.admin')
@section('content')
<main role="main" class="col-md-9  col-lg-10 px-4"><div style="position: absolute; inset: 0px; overflow: hidden; pointer-events: none; visibility: hidden; z-index: -1;" class="chartjs-size-monitor"><div class="chartjs-size-monitor-expand" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;"><div style="position:absolute;width:1000000px;height:1000000px;left:0;top:0"></div></div><div class="chartjs-size-monitor-shrink" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;"><div style="position:absolute;width:200%;height:200%;left:0; top:0"></div></div></div>
        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <h1 class="h2">Add Team & Members</h1>
            <div class="btn-group mr-2">
                    <a href="/members" class="btn btn-outline-secondary">Show Members</a>
            </div>
            <div class="btn-group mr-2">
              <a href="/teams" class="btn btn-outline-secondary">Show Teams</a>
            </div>
        </div>
        <div class="btn-toolbar mb-2 mb-md-0">
            
            <div class="card-body">
                <form method="POST" action="/team/store" enctype="multipart/form-data">
                  @csrf
                    <div class="form-group">
                      <label for="name">Team Name: </label>
                      <input type="text" class="form-control" name="team_name" />
                    </div>
                    <div class="form-group">
                      <label for="name">Team Category: </label>
                      <input type="text" class="form-control" name="team_category" />
                    </div>
                    <div class="form-group">
                        <label for="name">Number Of Members: </label>
                        <input type="number" class="form-control" name="team_number" />
                    </div>
                    <div class="form-group">
                        <label for="name">Team Details: </label>
                        <input type="text" class="form-control" name="team_detail" />
                      </div>
                    <button type="submit" class="btn btn-primary">Add Team</button>
                </form>
            </div>

            <div class="card-body">
                <form method="POST" action="/member/store" enctype="multipart/form-data">
                  @csrf
                    <div class="form-group">
                      <label for="name">Member Name: </label>
                      <input type="text" class="form-control" name="member_name" />
                    </div>
                    <div class="form-group">
                        <label for="name">Member Old: </label>
                        <input type="number" class="form-control" name="member_old" />
                    </div>
                    <div class="form-group">
                        <label for="name">Member Gender: </label>
                        <select class="form-control" id="exampleFormControlSelect1" name="member_gender">
                            <option value="Male">Male</option>
                            <option value="Female">Female</option>
                          </select>
                    </div>
                    <div class="form-group">
                        <label for="price">Team Name: </label>
                        <select class="form-control" id="exampleFormControlSelect1" name="member_team">
                          @foreach ($teams as $team)
                          <option value="{{$team->team_name}}">{{$team->team_name}}</option>
                          @endforeach
                        </select>                     
                    </div>
                    <div class="form-group">
                        <label for="name">Member Phone: </label>
                        <input type="text" class="form-control" name="member_phone" />
                    </div>
                    <div class="form-group">
                        <label for="name">Member Details: </label>
                        <input type="text" class="form-control" name="member_detail" />
                    </div>
                    <div class="form-group">
                        <label for="image">Member Image: </label>
                        <input type="file" class="form-control" name="member_img" />
                    </div>
                    <div class="form-group">
                      <label for="name">Facebook Link: </label>
                      <input type="text" class="form-control" name="member_facebook" />
                    </div>
                    <div class="form-group">
                      <label for="name">Twitter Link: </label>
                      <input type="text" class="form-control" name="member_twitter" />
                    </div>
                    <div class="form-group">
                      <label for="name">Instagram Link: </label>
                      <input type="text" class="form-control" name="member_instagram" />
                    </div>
                    <button type="submit" class="btn btn-primary">Add Member</button>
                </form>
            </div>
        </div>
    </main>
  </div>
</div>
@endsection
