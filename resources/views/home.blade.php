@extends('layouts.app')

@section('title', 'Home')

@section('content')

@if(Auth::user()->hasRole('developer') || Auth::user()->hasRole('staff'))
<section class="content-header">
    <h1 style="font-family:Titillium Web, sans-serif">
    Welcome To Oligarchy logistics Limited Dashboard
  </h1>
</section>
@endif

{{-- @if(Auth::user()->hasRole('tech') || Auth::user()->hasRole('staff'))
<section class="content-header">
    <h1 style="font-family:Titillium Web, sans-serif">
      Dashboard
  </h1>
  <br>
  <div class="row">
  <div class="col-lg-4">
    <a href="{{ url('/attend-requests') }}">
    <div class="info-box">
    <!-- Apply any bg-* class to to the icon to color it -->
    <span class="info-box-icon bg-light-blue"><i class="fa fa-sun-o"></i></span>
    <div class="info-box-content">
      <span class="info-box-text">Attended Request</span>
      <span class="info-box-number">12</span>
    </div><!-- /.info-box-content -->
  </div><!-- /.info-box -->
 </a>
</div>
</div>
</section>
@endif --}}

<!-- Main content -->
<section class="content">
    <div class="row">

        {{--  @if(Auth::user()->hasRole('developer') || Auth::user()->hasRole('staff'))  --}}
        <div class="col-lg-4">
            <a href="#">
            <div class="info-box">
            <!-- Apply any bg-* class to to the icon to color it -->
            <span class="info-box-icon bg-light-blue"><i class="fa fa-users"></i></span>
            <div class="info-box-content">
              <span class="info-box-text">Users</span>
              <span class="info-box-number">35</span>
            </div><!-- /.info-box-content -->
          </div><!-- /.info-box -->
          </a>
        </div>
     {{--  @endif  --}}

        {{--  @if(Auth::user()->hasRole('developer') || Auth::user()->hasRole('staff'))  --}}
        <div class="col-lg-4">
            <a href="#">
            <div class="info-box">
            <!-- Apply any bg-* class to to the icon to color it -->
            <span class="info-box-icon bg-light-blue"><i class="fa fa-square"></i></span>
            <div class="info-box-content">
              <span class="info-box-text">Posts</span>
              <span class="info-box-number">33</span>
            </div><!-- /.info-box-content -->
          </div><!-- /.info-box -->
         </a>
        </div>

        <div class="col-lg-4">
            <a href="#">
            <div class="info-box">
            <!-- Apply any bg-* class to to the icon to color it -->
            <span class="info-box-icon bg-blue"><i class="fa fa-indent"></i></span>
            <div class="info-box-content">
              <span class="info-box-text">Categories</span>
              <span class="info-box-number">44</span>
            </div><!-- /.info-box-content -->
          </div><!-- /.info-box -->
           </a>
        </div>
     {{--  @endif  --}}


     {{--  @if(Auth::user()->hasRole('developer') || Auth::user()->hasRole('staff'))  --}}
     <div class="col-lg-4">
         <a href="#">
         <div class="info-box">
         <!-- Apply any bg-* class to to the icon to color it -->
         <span class="info-box-icon bg-light-blue"><i class="fa fa-user-plus"></i></span>
         <div class="info-box-content">
           <span class="info-box-text">Subscribers</span>
           <span class="info-box-number">55</span>
         </div><!-- /.info-box-content -->
       </div><!-- /.info-box -->
      </a>
     </div>

      <div class="col-lg-4">
         <a href="#">
         <div class="info-box">
         <!-- Apply any bg-* class to to the icon to color it -->
         <span class="info-box-icon bg-blue"><i class="fa fa-comment"></i></span>
         <div class="info-box-content">
           <span class="info-box-text">Comments</span>
           <span class="info-box-number">66</span>
         </div><!-- /.info-box-content -->
       </div><!-- /.info-box -->
        </a>
     </div>


    {{--<div class="col-lg-4">
    <a href="{{ url('/request-customer') }}">
            <div class="info-box">
            <!-- Apply any bg-* class to to the icon to color it -->
            <span class="info-box-icon bg-blue"><i class="fa fa-registered"></i></span>
            <div class="info-box-content">
              <span class="info-box-text">Request</span>
              <span class="info-box-number">9</span>
            </div><!-- /.info-box-content -->
          </div><!-- /.info-box -->
           </a>
    </div> --}}
    {{--  @endif  --}}

</section>

@endsection
