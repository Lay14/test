@extends('layouts.ebook')

@section('content')
      <div class="container">
          <div class="centent">
              <div class="form_content">
                  <div class="form_header">
                      <span>Resgister</span>
                  </div>
                  <div class="form_reg">
                    <form class="" action="{{url('post-registration')}}" method="post">
                      <div class="groud_form">
                          <label for="">Username</label>
                          <input type="text" name="username" value="" placeholder="Enter your username">
                          @if ($errors->has('username'))
                              <span class="error">{{ $errors->first('username') }}</span>
                          @endif
                      </div>
                      <div class="groud_form">
                          <label for="">Email</label>
                          <input type="email" name="email" value="" placeholder="Enter your email">
                          @if ($errors->has('email'))
                              <span class="error">{{ $errors->first('email') }}</span>
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
                          <div class="form_right">
                              <button type="submit" name="button" class="form_btn_reg">Resgister</button>
                          </div>
                          <div class="form_left">
                              <a href="{{'log'}}"><span>Back</span></a>
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
