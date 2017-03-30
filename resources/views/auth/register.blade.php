@extends('layouts.index')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-xs-12 col-md-8 register">
          <h3>
            <i></i> Sign Up for a Loocid Account
          </h3>
          <div class="basic-content-container">
            <p>
              To get featured on Loocid, fill all the fields in the form below or use the Social Signup buttons on the right.<br />
              After registering, an activation link will be sent to your email address for confirmation and you will be ready to go!
            </p>
          </div>


            <div class="panel panel-default">
                <div class="panel-heading">Registration Form</div>
                <div class="panel-body">
                  <legend>
                    Account Details
                  </legend>
                    <form class="form-horizontal" role="form" method="POST" action="{{ route('register') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-4 control-label">Username</label>

                            <div class="col-md-6">
                                <input id="username" type="text" class="form-control" name="username" value="{{ old('username') }}" required autofocus>

                                @if ($errors->has('username'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('username') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">E-Mail Address</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="col-md-4 control-label">Password</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="password-confirm" class="col-md-4 control-label">Confirm Password</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                            </div>
                        </div>

                        <legend>
                          Tell us a little about yourself
                        </legend>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="col-md-4 control-label">Name</label>
                        <div class="col-md-6">
                            <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus>

                            @if ($errors->has('name'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('name') }}</strong>
                                </span>
                            @endif
                        </div>
                      </div>

                      <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                          <label for="password" class="col-md-4 control-label">Country</label>
                        <div class="col-md-6">
                            <input id="country" type="text" class="form-control" name="country" value="{{ old('name') }}" required autofocus>

                            @if ($errors->has('country'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('country') }}</strong>
                                </span>
                            @endif
                        </div>
                      </div>

                      <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                          <label for="password" class="col-md-4 control-label">City</label>
                        <div class="col-md-6">
                            <input id="city" type="text" class="form-control" name="city" value="{{ old('city') }}" required autofocus>

                            @if ($errors->has('city'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('city') }}</strong>
                                </span>
                            @endif
                        </div>
                      </div>
                      <!-- checkboxes -->
                      <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                          <label for="category" class="col-md-4 control-label">Register As:</label>
                        <div class="col-md-6">
                          <label>
                            <input type="checkbox" name="organization" value="organization" />
                            Organization
                          </label><br />

                          <label>
                            <input type="checkbox" name="donor" value="donor" />
                            Donor
                          </label><br />

                          <label>
                            <input type="checkbox" name="user" value="user" />
                            User
                          </label><br />

                          <p>
                            <small class="help-information">
                              <i class="fa fa-info-circle">
                              </i>
                              This information will help offer you customized experience on the platform
                            </small>
                          </p>
                            @if ($errors->has('name'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('city') }}</strong>
                                </span>
                            @endif
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
                </div>
            </div>
        </div>

          <aside class="pull-right register">
            <h3>  Why join Loocid?</h3>
            </aside>
            <div  class="col-xs-12 col-md-4">

            <div class="basic-content-container">
            <p>
              Be a part of a strong donor-organization community.
            </p>
              <ul>
                <li>
                  Organizations: Get featured to potential donors and well-wishers
                </li>
                <li>
                  Donors: Be part of organizations through your donations. Receive classified information regarding use of funds.
                </li>
                <li>
                  Pro-User: Get in-depth information about various organizations and how money is spent.
                </li>
              </ul>
            </div>
            <h4>Social Registration</h4>
            <div class="basic-content-container">

              <p>
                Here will be the links to social accounts for easier registration.
              </p>
              <!-- this is where oneall API will fall. -->
            </div>
          </div>



    </div>
</div>
@endsection
