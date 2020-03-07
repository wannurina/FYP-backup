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
     <link rel="stylesheet" href="css/homepage.css" type="text/css" media="all" /><!-- Style-CSS -->
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
                        <p>Apply Your Sticker Now!</p>
                    </div>
					<div class="form-right-inf">

            <form action="login">
                @csrf

                 <div class="form-input editContent" data-selector=".editContent" style="outline: none; cursor: inherit;">
                   <button class="btn" data-selector="a.btn, button.btn" style="outline: none; cursor: inherit;">
                     Login as Student</button>
                 </div>
            </form>

            <form action="loginStaff">
                     @csrf
                     <div class="forms-gds">
                 <div class="form-input editContent" data-selector=".editContent" style="outline: none; cursor: inherit;">
                   <button class="btn" data-selector="a.btn, button.btn" style="outline: none; cursor: inherit;">
                     Login as Staff</button>
                 </div>

						</form>

            <form action="loginStaff1">
                @csrf
            <div class="form-input editContent" data-selector=".editContent" style="outline: none; cursor: inherit;">
              <button class="btn" data-selector="a.btn, button.btn" style="outline: none; cursor: inherit;">
                Login as Contractor</button>
            </div></div>

            </form>
     </div>
                    </div>
				<div class="copyright text-center">
                    <p>© <?php echo date("Y");?> All rights reserved | Designed by Zu and Ina</p>
                </div>
                </div>

			</div>
		</div>

		</section>
      <!-- //form-26-section -->
</body>
</html>
@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
