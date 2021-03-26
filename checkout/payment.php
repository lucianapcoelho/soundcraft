<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <title>Checkout - Soundcraft</title>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

  <script src="https://www.paypal.com/sdk/js?client-id=sb">
    // Required. Replace YOUR_CLIENT_ID with your sandbox client ID.
  </script>

  </script>

  <!-- Bootstrap core CSS -->
  <!-- Renders CSS to Checkout -->

  <link href="../assets/dist/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="form-validation.css" rel="stylesheet">
</head>


<body class="bg-light">


  <div class="d-flex fixed-top flex-md-row align-items-center p-1 px-md-4 mb-3 bg-white border-bottom shadow-sm navbar-toggler hidden-md-up pull-right">
    <a class="navbar-brand centerBloc" href="../index.html"> <img src="../assets/img/indigo-candy.png" style="width: 35px; margin-left: 8px;" alt="">
      <a class=" my-0 mr-md-auto centerLogo" href="../index.html" style="font-family: Verdana, Geneva, Tahoma, sans-serif, cursive; font-size: 190%; text-decoration: none;font-weight:bolder; display: inline-block;">
        <i> <span style="color:#003087">SOUND</span>
          <span style="color:#009CDE; margin-left: -13px;">CRAFT</span><span style="color:#151616; margin-left: -8px; font-weight: lighter; ">store</span></i></a>

      <a class="btn btn-primary hover indigo-theme pay" href="../index.html">Go back!</a>
  </div>
  </div>
  <!-- </nav> -->


  <div class="container">
    <div class="py-5 text-center">
      <p class="dark-blue mt-5" style="font-size: 3em; font-weight:600">Soundcraft Store</p>
      <img class="d-block mx-auto mb-4" src="../assets/img/indigo-candy.png" alt="" width="200" height="200">
      <h2 class="dark-blue" style="font-size: 2.7em; font-weight:400;">Finalize Order</h2>
      <p class=" lead dark-blue" style="font-weight: 400;">Please fill the form bellow with your information and click the "Confirm" button to proceed with the payment.
    </div>

    <div class="row">
      <div class="col-md-4 order-md-2 mb-4">
        <h4 class="d-flex justify-content-between align-items-center mb-3">
          <span class="text-muted">Cart</span>
          <span class="badge badge-secondary badge-pill">1</span>
        </h4>
        <ul class="list-group mb-3">
          <li class="list-group-item d-flex justify-content-between lh-condensed">
            <div>
              <h6 class="my-0">Guitar</h6>
              <small class="text-muted">SKU: 25022021</small>
            </div>
            <span class="text-muted">$1200</span>
          </li>

          <li class="list-group-item d-flex justify-content-between bg-light">
            <div class="text-success">
              <h6 class="my-0">Free Shipping</h6>
            </div>
            <span class="text-success">R$0</span>
          </li>
          <li class="list-group-item d-flex justify-content-between">
            <span>Total (USD)</span>
            <strong>$1200</strong>
          </li>
        </ul>

        <form class="card p-2">
          <div class="input-group">
            <input type="text" class="form-control" placeholder="Unavailable">
            <div class="input-group-append">
              <button type="submit" class="btn btn-secondary" disabled>Apply Cupon</button>
            </div>
          </div>
        </form>


      </div>
      <div class="col-md-8 order-md-1">
        <h4 class="mb-3">Please fill with your information:</h4>
        <form class="needs-validation" novalidate>
          <div class="row">
            <div class="col-md-6 mb-3">
              <label for="firstName">First Name</label>
              <input type="text" class="form-control" id="firstName" value="Robert" placeholder="Robert" required>
              <div class="invalid-feedback">
                Invalid Name.
              </div>
            </div>
            <div class="col-md-6 mb-3">
              <label for="lastName">Last Name</label>
              <input type="text" class="form-control" id="lastName" placeholder="Smith" value="Smith" required>
              <div class="invalid-feedback">
                Invalid Input.
              </div>
            </div>
          </div>




          <label for="tel">E-mail</label>
          <div class="input-group">
            <div class="input-group-prepend">

            </div>
            <input type="text" class="form-control" id="email" placeholder="robsmith@email.com" value="robsmith@email.com" required>
            <div class="invalid-feedback" style="width: 100%;">
              Invalid E-mail address.
            </div>
          </div> <br>

          <label for="tel">Phone Number</label>
          <div class="input-group">
            <div class="input-group-prepend">

            </div>
            <input type="text" class="form-control" id="tel" placeholder="917-904-1314" value="917-904-1314" required>
            <div class="invalid-feedback" style="width: 100%;">
              Invalid Phone Number.
            </div>
          </div> <br>
          <div class="mb-3">
            <label for="username">Street Address</label>
            <div class="input-group">
              <div class="input-group-prepend">

              </div>
              <input type="text" class="form-control" id="street" placeholder="Hoffman Avenue" value="Hoffman Avenue" required>
              <div class="invalid-feedback" style="width: 100%;">
                Invalid Input.
              </div>
            </div>
          </div>

          <div class="mb-3">
            <label for="username">Number</label>
            <div class="input-group">
              <div class="input-group-prepend">

              </div>
              <input type="text" class="form-control" id="number" value="843" placeholder="1909" required>
              <div class="invalid-feedback" style="width: 100%;">
                Invalid Number.
              </div>
            </div>
          </div>

          <div class="mb-3">
            <label for="address">Town/County</label>
            <input type="text" class="form-control" id="town" placeholder="New York County" value="New York County" required>
            <div class="invalid-feedback">
              Invalid Input.
            </div>
          </div>

          <div class="mb-3">
            <label for="address2">City<span class="text-muted"></span></label>
            <input type="text" class="form-control" value="New York" id="city" placeholder="New York">
            <div class="invalid-feedback">
              Invalid Input.
            </div>
          </div>


          <div class="row">
            <div class="col-md-5 mb-3">
              <label for="country">Country</label>
              <select class="custom-select d-block w-100" id="country" required>
                <option value="">US</option>
                <option>United States</option>
              </select>
              <div class="invalid-feedback">
                Invalid Input.
              </div>
            </div>
            <div class="col-md-4 mb-3">
              <label for="state">State</label>
              <select class="custom-select d-block w-100" id="state" required>
                <option value="NY">New York</option>
                <option value="AL">Alabama</option>
                <option value="AK">Alaska</option>
                <option value="AZ">Arizona</option>
                <option value="AR">Arkansas</option>
                <option value="CA">California</option>
                <option value="CO">Colorado</option>
                <option value="CT">Connecticut</option>
                <option value="DE">Delaware</option>
                <option value="DC">District Of Columbia</option>
                <option value="FL">Florida</option>
                <option value="GA">Georgia</option>
                <option value="HI">Hawaii</option>
                <option value="ID">Idaho</option>
                <option value="IL">Illinois</option>
                <option value="IN">Indiana</option>
                <option value="IA">Iowa</option>
                <option value="KS">Kansas</option>
                <option value="KY">Kentucky</option>
                <option value="LA">Louisiana</option>
                <option value="ME">Maine</option>
                <option value="MD">Maryland</option>
                <option value="MA">Massachusetts</option>
                <option value="MI">Michigan</option>
                <option value="MN">Minnesota</option>
                <option value="MS">Mississippi</option>
                <option value="MO">Missouri</option>
                <option value="MT">Montana</option>
                <option value="NE">Nebraska</option>
                <option value="NV">Nevada</option>
                <option value="NH">New Hampshire</option>
                <option value="NJ">New Jersey</option>
                <option value="NM">New Mexico</option>
                <option value="NY">New York</option>
                <option value="NC">North Carolina</option>
                <option value="ND">North Dakota</option>
                <option value="OH">Ohio</option>
                <option value="OK">Oklahoma</option>
                <option value="OR">Oregon</option>
                <option value="PA">Pennsylvania</option>
                <option value="RI">Rhode Island</option>
                <option value="SC">South Carolina</option>
                <option value="SD">South Dakota</option>
                <option value="TN">Tennessee</option>
                <option value="TX">Texas</option>
                <option value="UT">Utah</option>
                <option value="VT">Vermont</option>
                <option value="VA">Virginia</option>
                <option value="WA">Washington</option>
                <option value="WV">West Virginia</option>
                <option value="WI">Wisconsin</option>
                <option value="WY">Wyoming</option>

              </select>
              </select>
              <div class="invalid-feedback">
                Invalid Input.
              </div>
            </div>
            <div class="col-md-3 mb-3">
              <label for="zip">Zip Code</label>
              <input type="text" class="form-control" id="zip" value="10016" placeholder="10016" required>
              <div class="invalid-feedback">
                Invalid Input.
              </div>
            </div>
          </div>

          <button type="button" class="btn btn-block btn-primary" id="confirm" onclick="allowBuy()">
            Confirm
          </button>

          <div id="show" class="mb-3 d-none">
            <div id="paypal-button-container"></div>
          </div>

          <!-- only show PayPal after user clicks confirm button -->
          <script>
            function allowBuy() {

              var showPayment = document.getElementById("show");
              showPayment.classList.remove("d-none");

              var hideConfirm = document.getElementById("confirm");
              hideConfirm.classList.add("d-none");

              var firstName = document.getElementById("firstName").value;
              var lastName = document.getElementById("lastName").value;
              var email = document.getElementById("email").value;
              var tel = document.getElementById("tel").value;
              var street = document.getElementById("street").value;
              var city = document.getElementById("city").value;
              var country = document.getElementById("country").value;
              var state = document.getElementById("state").value;
              var zip = document.getElementById("zip").value;

            }
          </script>
        </form>
      </div>
    </div>
  </div>

  <footer class="my-5 pt-5 text-muted text-center text-small">
    <p class="mb-1">&copy; 2021 Copyright - Soundcraft</p>
    <ul class="list-inline">
      <li class=" list-inline-item"><a class="indigo-font-color" href="#">Privacy</a></li>
      <li class=" list-inline-item"><a class="indigo-font-color" href="#">Terms</a></li>
      <li class=" list-inline-item"><a class="indigo-font-color" href="#">Support</a></li>
    </ul>
  </footer>
  </div>


  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>

</body>

<script>
  paypal.Buttons({
    createOrder: function() {
      return fetch('create-order.php', {
        method: 'post',
        body: JSON.stringify({
          firstName: document.getElementById("firstName").value,
          lastName: document.getElementById("lastName").value,
          email: document.getElementById("email").value,
          tel: document.getElementById("tel").value,
          street: document.getElementById("street").value,
          city: document.getElementById("city").value,
          country: document.getElementById("country").value,
          state: document.getElementById("state").value,
          zip: document.getElementById("zip").value
        }),
        headers: {
          'content-type': 'application/json'
        }
      }).then(function(res) {
        console.log(res);
        return res.json();
      }).then(function(data) {
        console.log(data);
        return data.id; // Use the key sent by your server's response, ex. 'id' or 'token'
      });
    },

    onApprove: function(data) {
      return fetch('capture-order.php', {
        headers: {
          'content-type': 'application/json'
        },
        method: 'post',
        body: JSON.stringify({
          orderID: data.orderID
        })
      }).then(function(res) {
        console.log(res);
        return res.json();
      }).then(function(details) {
        console.log(details);
        // alert('Transaction funds captured from ' + details.payer.name.given_name + '\nYour transaction ID is: ' + details.id);
        location.replace("sucess.php/?id=" + details.id + "&name=" + details.payer.name.given_name)

      })
    }

  }).render('#paypal-button-container');
  //This function displays Smart Payment Buttons on your web page.
</script>

</html>