@extends('app')
@section('content')
<div id="contentWrapper">
  <article id="mainContent">
    <h1>Log In!</h1>
    <article class="post">
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

                <form class="form-horizontal" role="form" method="POST" action="{{ url('/auth/login') }}">
                        {!! csrf_field() !!}

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
                                <div class="col-md-6 col-md-offset-4">
                                        <div class="checkbox">
                                                <label>
                                                        <input type="checkbox" name="remember"> Remember Me
                                                </label>
                                        </div>
                                </div>
                        </div>

                        <div class="form-group">
                                <div class="col-md-6 col-md-offset-4">
                                        <button type="submit" class="btn btn-primary">Login</button>

                                        <a class="btn btn-link" href="{{ url('/password/email') }}">Forgot Your Password?</a>
                                        <a class="btn btn-link" href="{{ url('/auth/register') }}">Register?</a>
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
