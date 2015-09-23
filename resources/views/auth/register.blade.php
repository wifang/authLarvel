@extends('app')
@section('content')
<div id="contentWrapper">
  <article id="mainContent">
    <h1>Sign Up!</h1>
    <article class="post">
      <h2>New User Registration</h2>
	  	@if (count($errors) > 0)
                        <div class="alert alert-danger">
                                <strong>Whoops!</strong> There were some problems with your input.<br><br>
                                <ul>
                                        @foreach ($errors->all() as $error)
                                                <li>{{ $error }}</li>
                                        @endforeach
                                </ul>
                        </div>
		@endif
            <form class="form-horizontal" role="form" method="POST" action="{{ url('/auth/register') }}">
                     {!! csrf_field() !!}

                     <div class="form-group">
                             <label class="col-md-4 control-label">Name</label>
                             <div class="col-md-6">
                                     <input type="text" class="form-control" name="name" value="{{ old('name') }}">
                             </div>
                     </div>

                     <div class="form-group">
                             <label class="col-md-4 control-label">E-Mail Address</label>
                             <div class="col-md-6">
                                     <input type="email" class="form-control" name="email" value="{{ old('email') }}">
                             </div>
                     </div>

                     <div class="form-group">
                             <label class="col-md-4 control-label">Password</label>
                             <div class="col-md-6">
                                     <input type="password" class="form-control" name="password">
                             </div>
                     </div>

                     <div class="form-group">
                             <label class="col-md-4 control-label">Confirm Password</label>
                             <div class="col-md-6">
                                     <input type="password" class="form-control" name="password_confirmation">
                             </div>
                     </div>

                     <div class="form-group">
                             <div class="col-md-6 col-md-offset-4">
                                     <button type="submit" class="btn btn-primary">
                                             Register
                                     </button>
                             </div>
                     </div>
             </form>
</article>
  </article>
  <aside>
    <section class="info">
      <div class="widget">
        <h2>Search</h2>
        <form>
          <input type="search" id="searchField" placeholder="Enter keyword(s)" />
          <input type="submit" name="search" id="search" value="">
        </form>
      </div>
      <div class="widget">
        <h2>Hot Links</h2>
        <ul>
          <li><a href="#">Conference Schedule-At-A-Glance</a></li>
          <li><a href="#">Another Page Title</a></li>
          <li><a href="#">Yet Another Page Title</a></li>
        </ul>
      </div>
      <div class="widget">
        <h2>Archive</h2>
        <ul>
          <li><a href="#">September</a></li>
          <li><a href="#">August</a></li>
          <li><a href="#">July</a></li>
          <li><a href="#">June</a></li>
        </ul>
      </div>
      <div class="widget">
        <h2>Categories</h2>
        <ul>
          <li><a href="#">Conference</a></li>
          <li><a href="#">Events</a></li>
          <li><a href="#">Student Life</a></li>
          <li><a href="#">Zeitgeist</a></li>
        </ul>
      </div>
    </section>
  </aside>
</div>
@endsection
