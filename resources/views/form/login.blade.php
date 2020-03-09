@extends('layouts.ebook')

@section('content')
      <div class="container">
          <div class="centent">
              <div class="form_content">
                  <div class="form_header">
                      <span>Login</span>
                  </div>
                  <div class="form_login">
                    <form class="" action="{{url('post-login')}}" method="post">
                      {{ csrf_field() }}
                      <div class="groud_form">
                          <label for="">Username</label>
                          <input type="text" name="username" value="" placeholder="Enter your username">
                          @if ($errors->has('username'))
                              <span class="error">{{ $errors->first('username') }}</span>
                          @endif
                      </div>
                      <div class="groud_form">
                          <label for="">Password</label>
                          <input type="text" name="password" value="" placeholder="Enter your password">
                          @if ($errors->has('password'))
                              <span class="error">{{ $errors->first('password') }}</span>
                          @endif
                      </div>
                      <div class="groud_form" style="margin-top: 5px;">
                          <div class="form_left">
                              <button type="submit" name="button">Login</button>
                          </div>
                          <div class="form_right">
                              <span><a href="{{'reg'}}">Create new account</a></span>
                          </div>
                      </div>
                    </form>
                  </div>
                  <div class="form_footer">
                      
                  </div>
              </div>
          </div>
      </div>
@endsection
