@extends('layouts.app')

@section('content')
<div class="container">
  <div class="row">
        <div class="col-3">
          <img src="/images/p_image.jpg" alt="Profile Image" style="max-height: 150px;" class="rounded-circle">
        </div>
        <div class="col-9 pt-5">
            <div>
                <h1>{{ $user-> username }}</h1>
            </div>
            <div class="d-flex">
              <div class="pr-5"><strong>153</strong> posts</div>
            </div>
            <div class="pt-4 font-weight-bold">{{ $user->profile->title }}</div>
            <div>{{ $user->profile->description }}</div>
            <div><a href="#">{{ $user->profile->url }}</a></div>
        </div>
  </div>
</div>
@endsection
