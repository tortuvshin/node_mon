<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>{{trans('globals.site_title')}}</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css">

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/react/0.14.0/react.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/react/0.14.0/react-dom.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/babel-core/5.6.15/browser.js"></script>
    <script src="http://netdna.bootstrapcdn.com/twitter-bootstrap/2.3.1/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.3.0/Chart.bundle.min.js"></script>

  </head>
  <body>
    <div class="navbar navbar-default">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="/daily-surveys">{{trans('globals.site_title')}}</a>
        </div>
        <div class="collapse navbar-collapse" id="navbar-collapse">
          <ul class="nav navbar-nav">
            <li><a href="/daily-surveys">{{trans('globals.home_page')}}</a></li>
            <li><a href="/daily-surveys/new">{{trans('globals.new_survey')}}</a></li>
          </ul>
          <ul class="nav navbar-nav navbar-right">
            @if (Auth::guest())
              <li><a href="{{ url('/login') }}">{{trans('user.login')}}</a></li>
              <li><a href="{{ url('/register') }}">{{trans('user.register')}}</a></li>
            @else
              <li><a href="#">Сайн уу  {{ Auth::user()->name }}</a></li>
              {{ Form::open(array('url' => '/logout')) }}
               {{ Form::submit(trans('user.logout')) }}
              {{ Form::close() }}
            @endif
          </ul>
        </div>
      </div>
    </div>
    <div class="container">
      <div class="row row-centered">
        @yield('content')
      </div>
    </div>

  </body>
</html>
