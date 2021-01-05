<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Jekyll v4.1.1">
    <title>Fill Details</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/4.5/examples/checkout/">

    <!-- Bootstrap core CSS -->
<link href="bootstrap-4.5.2-dist/css/bootstrap.min.css" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Oswald:wght@500&family=Roboto:wght@300&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Architects+Daughter&display=swap" rel="stylesheet">
    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>
    <!-- Custom styles for this template -->
    <link href="infosty.css" rel="stylesheet">
  </head>
  <body class="bg-light" style="background-color:black !important;">
    <div class="container">
      <hr class="mb-4">
    <div class="col-md-7 order-md-1">
      <h4 class="mb-3">Enter Your Details</h4>
      <form class="needs-validation" novalidate>
        <div class="row">
          <div class="col-md-3 mb-3">
            <label for="firstName" style="color: white;">First name</label>
            <input type="text" class="form-control" id="firstName" name="firstname" placeholder="" value="" required>
            <div class="invalid-feedback">
              Valid first name is required.
            </div>
          </div>
          <div class="col-md-3 mb-3">
            <label for="lastName" style="color: white;">Last name</label>
            <input type="text" class="form-control" id="lastName" name="lastname" placeholder="" value="" required>
            <div class="invalid-feedback">
              Valid last name is required.
            </div>
          </div>
        </div>

        <div class="col md-3 mb-3">
          <label for="username" style="color: white;">Username</label>
          <div class="input-group">
            <!--<div class="input-group-prepend">
              <span class="input-group-text">@</span>
            </div>-->
            <input type="text" class="form-control" id="username" name="username" placeholder="Username" required>
            <div class="invalid-feedback" style="width: 100%;">
              Your username is required.
            </div>
          </div>
        </div>

        <div class="col md-3 mb-3">
          <label for="email" style="color: white;">Email <!--<span class="text-muted">(Optional)</span>--></label>
          <input type="email" class="form-control" id="email" name="email" placeholder="you@example.com">
          <div class="invalid-feedback">
            Please enter a valid email address for further use.
          </div>
        </div>

        <div class="col md-3 mb-3">
          <label for="address" style="color: white;">College Name</label><!--address field-->
          <input type="text" class="form-control" id="pno" name="phoneno">
          <div class="invalid-feedback">
            Please enter your college name.
          </div>
        </div>

       <div class="col md-3 mb-3">
          <label for="dob" style="color: white;">Date of Birth<span class="text-muted">(YYYY-MM-DD)</span></label>
          <input type="text" class="form-control" id="dob" name="dob">
        </div>

        <div class="row">
          <div class="col-md-4 mb-3">
            <label for="country" style="color: white;">Country</label>
            <select class="custom-select d-block w-100" id="country" name="country" required>
              <option value="">Choose...</option>
              <option value="United States">United States</option>
              <option value="United Kingdom">United Kingdom</option>
              <option value="India">India</option>
              <option value="Brazil">Brazil</option>
            </select>
            <div class="invalid-feedback">
              Please select a valid country.
            </div>
          </div>
          <div class="col-md-4 mb-3">
            <label for="state" style="color: white;">State</label>
            <select class="custom-select d-block w-100" id="state" name="state" required>
              <option value="">Choose...</option>
              <option value="Indiana">Indiana</option>
              <option value="Kansas">Kansas</option>
              <option value="Kerala">Kerala</option>
              <option value="Maharashtra">Maharashtra</option>
              <option value="Minnesota">Minnesota</option>
              <option value="New Delhi">New Delhi</option>
              <option value="North Dakota">North Dakota</option>
              <option value="Parana">Parana</option>
              <option value="Rajasthan">Rajasthan</option>
              <option value="Texas">Texas</option>
              <option value="Uttar Pradesh">Uttar Pradesh</option>
              <option value="Virginia">Virginia</option>
              <option value="Wyoming">Wyoming</option>
              <option value="England">England</option>
            </select>
            <div class="invalid-feedback">
              Please provide a valid state.
            </div>
          </div>
        </div>
        <hr class="mb-4">
        <!--hr class="mb-4"-->
        <!--hr class="mb-4"-->
        <button type="submit" class="btn btn-primary btn-xl" name="checkout" style="background-color:rgb(2, 2, 92); color: rgb(255, 255, 255); border-color:black;">Register</button>
      <span  style="color:white;padding:10px;font-size:20px;">  Already a member? <a href="login.html" class="newanchor">Login</a>
      </span>
      </form>
    </div>
  </div>

</div>
<!--i dunno why this is used check karle pls ek baar-->>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
      <script>window.jQuery || document.write('<script src="../assets/js/vendor/jquery.slim.min.js"><\/script>')</script><script src="bootstrap-4.5.2-dist/js/bootstrap.bundle.min.js"></script>
        <script src="infojs.js"></script></body>
</html>
