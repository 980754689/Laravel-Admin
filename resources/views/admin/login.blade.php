<!DOCTYPE html>
<html lang="en" class="no-js">
<head>
<meta charset="UTF-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge"> 
<meta name="viewport" content="width=device-width, initial-scale=1"> 
<title>登录</title>

<link rel="stylesheet" href="{{ admin_asset('/vendor/laravel-admin/adminLogin/css/normalize.css') }}">
<link rel="stylesheet" href="{{ admin_asset('/vendor/laravel-admin/adminLogin/css/demo.css') }}">
<link rel="stylesheet" href="{{ admin_asset('/vendor/laravel-admin/adminLogin/css/component.css') }}">

</head>
<body>
  <div class="container demo-1">
    <div class="content">
      <div id="large-header" class="large-header">
        <canvas id="demo-canvas"></canvas>
        <div class="logo_box">
          <h3>欢迎登陆</h3>

          <form action="{{ admin_base_path('auth/login') }}" method="post">
            
            <div class="input_outer">
              @if($errors->has('username'))
                @foreach($errors->get('username') as $message)
                  <label class="control-label" for="inputError"><i class="fa fa-times-circle-o"></i>{{$message}}</label></br>
                @endforeach
              @endif
              <span class="u_user"></span>
              <input type="text" class="text" style="color: #FFFFFF !important" placeholder="{{ trans('admin.username') }}" name="username" value="{{ old('username') }}">
            </div>

            <div class="input_outer">
              @if($errors->has('password'))
                @foreach($errors->get('password') as $message)
                  <label class="control-label" for="inputError"><i class="fa fa-times-circle-o"></i>{{$message}}</label></br>
                @endforeach
              @endif
              <span class="us_uer"></span>
              <input type="password" class="text" style="color: #FFFFFF !important; position:absolute; z-index:100;" placeholder="{{ trans('admin.password') }}" name="password">
            </div>

            <div class="mb2">
              <input type="hidden" name="_token" value="{{ csrf_token() }}">
              <input class="act-but submit" type="submit" style="color: #FFFFFF;width: 330px" value="登录"/>
            </div>
          </form>


        </div>
      </div>
    </div>
  </div><!-- /container -->

<script type="text/javascript" src="{{ admin_asset('/vendor/laravel-admin/adminLogin/js/TweenLite.min.js')}} "></script>
<script type="text/javascript" src="{{ admin_asset('/vendor/laravel-admin/adminLogin/js/EasePack.min.js')}} "></script>
<script type="text/javascript" src="{{ admin_asset('/vendor/laravel-admin/adminLogin/js/rAF.js')}} "></script>
<script type="text/javascript" src="{{ admin_asset('/vendor/laravel-admin/adminLogin/js/demo-1.js')}} "></script>
<script type="text/javascript" src="{{ admin_asset('/vendor/laravel-admin/adminLogin/js/jquery-1.11.1.min.js')}} "></script>


<div style="text-align:center;"></div>
</body>
</html>