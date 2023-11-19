@extends('layout')
@section('content')

<style>
    body {
        font-family: 'Figtree';
        background-color: aquamarine
    }
    
    .divider:after,
    .divider:before {
        content: "";
        flex: 1;
        height: 1px;
        background: #eee;
    }

    .h-custom {
        height: calc(100% - 73px);
    }
    @media (max-width: 450px) {
        .h-custom {
            height: 100%;
        }
    }

    .btn {
        margin-left: 360px;
        height: 30px;
        width: 150px;
        font-size: 14px;
        padding-bottom: 25px;
        background-color: rgb(18, 99, 92);
    }

    .btn:hover {
        background-color: aqua;
        color: rgb(18, 99, 92);
        border:rgb(18, 99, 92);
    }

    .register {
        margin-left: 13%;
        color: rgb(18, 99, 92);
        font-weight: 600;
    }

    .title {
        margin-left: 10%;
        text-align: center;
        color: rgb(18, 99, 92);
        font-weight: 700;
    }

    .login {
        margin-top: 5%;
        min-height: 50vh;
    }

    label {
        color: rgb(18, 99, 92);
    }

</style>

  <section class="vh-100">
    <div class="container-fluid h-custom">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col-md-4 col-lg-5 col-xl-4">
          <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-login-form/draw2.webp"
            class="img-fluid" alt="Sample image" width="600px">
        </div>
        <div class="col-md-8 col-lg-7 col-xl-8 offset-xl-1 login" style="background-color: aquamarine">

  
            <div class="title"><h2 class="fw-bold mb-2 text-uppercase">Login Here</h2>
            <p class="text-white-50 mb-5">Please enter your email and password.</p></div>
  
                @if (Session::has('success'))
                <div class="alert alert-success">{{ Session::get('success')}}</div>
                @endif
                <form method="post" action="{{ route('login.post')}}">
                @csrf
                <div class="form-group row">
                    <label class="col-md-2">Email</label>
                    <div class="col-md-10">
                        <input type="text" name="email" class="form-control" placeholder="Enter your email here" />
                    </div>
                    @if ($errors->has('email'))
                        <span class="text-danger">{{ $errors->first('email')}}</span>
                    @endif
                </div>
                <div class="form-group row">
                    <label class="col-md-2">Password</label>
                    <div class="col-md-10">
                        <input type="password" name="password" class="form-control" placeholder="Enter your password here" />
                    </div>
                    @if ($errors->has('password'))
                        <span class="text-danger">{{ $errors->first('password')}}</span>
                    @endif
                </div>
                <div class="form-group row">
                    <div class="col-md-12">
                        <input type="submit" name="submit" class="btn btn-primary btn-lg"value="LOGIN"/>
                    </div>
                </div>
  
  
          </form>
        </div>
      </div>
    </div>
  </section>

@endsection