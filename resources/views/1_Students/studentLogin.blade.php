<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->

<!DOCTYPE html>
<html lang="zxx">

<head>
    <title>Merged Forms Page Responsive Widget Template :: W3layouts</title>
    <!-- Meta tag Keywords -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="UTF-8" />
    <meta name="keywords"
        content="Merged Forms Page Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
    <!-- //Meta tag Keywords -->
     <link rel="stylesheet" href="css/login.css" type="text/css" media="all" /><!-- Style-CSS -->
</head>
<body>
   <!-- /form-26-section -->
   <section class="form-26">
         <div class="form-26-mian">
				<div class="layer">
			<div class="wrapper">
			<div class="form-inner-cont">
					<div class="forms-26-info">
						 <h2>IIUM Vehicle Registration System</h2>
                        <p>Login as Student</p>
                    </div>
					<div class="form-right-inf">
            <form method="POST" action="{{ route('login') }}">
                @csrf
                <div class="forms-gds editContent" data-selector=".editContent" style="">
                  <div class="form-group row">
                      <label for="username" class="col-md-4 col-form-label text-md-right">{{ __('Username') }}</label>

                      <div class="col-md-6">
                          <input id="username" type="username" class="form-control @error('username') is-invalid @enderror" name="username" value="{{ old('username') }}" required autocomplete="username" autofocus>

                          @error('username')
                              <span class="invalid-feedback" role="alert">
                                  <strong>{{ $message }}</strong>
                              </span>
                          @enderror
                      </div>
                  </div>
                  <div class="form-group row">
                      <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                      <div class="col-md-6">
                          <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                          @error('password')
                              <span class="invalid-feedback" role="alert">
                                  <strong>{{ $message }}</strong>
                              </span>
                          @enderror
                      </div>
                  </div>


                    <div class="form-group row mb-0">
                        <div class="col-md-8 offset-md-4">
                            <button type="submit" class="btn btn-primary">
                                <a href="{{ url('formStudent') }}">Login</a>
                            </button>


                        </div>
                    </div>
                </div>
                <h6 class="already editContent" data-selector=".editContent" style="outline: none; cursor: inherit;"> Not a student?
                  <a href="{{ url('loginStaff') }}"><span class="editContent" data-selector=".editContent" style="outline: none; cursor: inherit;">Login as Staff<span></span></span></a></h6>
              </form>

                    </div>
				<div class="copyright text-center">
                    <p>© <?php echo date("Y");?> All rights reserved | Designed by Zu and Ina</p>
                </div>
                </div>

			</div>
		</div>
		    </div>
		</section>
      <!-- //form-26-section -->
</body>
</html>
