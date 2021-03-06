@extends ('layouts/auth')

@section ('content')

    <div class="container container-auth">

        <div class="row">
            <div class="col-xs-12 text-center">
                <div class="ac-icon atar-logo"></div>
                <h4>Sign into your account</h4>
            </div>
        </div>

        <div class="row">
            <div class="col-md-offset-4 col-md-4 col-sm-offset-2 col-sm-8">

              {!! Form::open(['url' => '/login', 'method' => 'POST', 'class' => 'form-horizontal']) !!}
              
                <!-- EMAIL -->
                <div class="form-group {{ $errors->has('email') ? 'has-error' : '' }}">
                  {!! Form::email('email', '', ['class' => 'form-control', 'placeholder' => 'Email Address']) !!}
                  @if ($errors->has('email'))
                    {!! $errors->first('email', '<small class=text-danger>:message</small>') !!}
                  @endif
                </div>

                <!-- PASSWORD -->
                <div class="form-group {{ $errors->has('password') ? 'has-error' : '' }}">
                  {!! Form::password('password', ['class' => 'form-control', 'placeholder' => 'Password']) !!}
                  @if ($errors->has('password'))
                    {!! $errors->first('password', '<small class=text-danger>:message</small>') !!}
                  @endif
                </div>

                <div class="form-group">
                  {!! Form::submit('Login', ['class' => 'btn btn-atar btn-block']) !!}
                </div>

                <div class="form-group text-center">
                  <small class="form-label">
                    <a href="{{ url('/') }}">Home</a> &bullet;
                    <a href="{{ url('/password/reset') }}">Forgot password</a> &bullet;
                    <a href="{{ url('/register') }}">Sign up</a>  
                  </small>
                </div>
              {!! Form::close() !!}

            </div>
        </div>

    </div>

@endsection
