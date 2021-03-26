<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Checkout - Indigo Store</title>
</head>

<body>

  <style>
    body {
      max-width: 960px;
      margin: auto;
      padding: 10px;
      font-size: 2em;
    }

    .completed {
      font-size: 40px;
      font-weight: 600;
      font-family: Verdana, Geneva, Tahoma, sans-serif;
    }

    .completed {
      font-size: 30px;
      font-weight: 600;
    }

    .completed {
      font-size: 30px;
      font-weight: 600;
    }
  </style>



  <div class="container">
    <div>
      <br><br>

      <p class="completed">Purchase Completed!</p>

      <?php $name = $_GET['name'];
      echo "<p class='name'>" . "Hey " . $name . "!" . " Thanks for choosin us!" . "<p>"; ?>

      <?php $orderID = $_GET['id'];
      echo "<p class='order'>" . "This is your Transaction ID: " . $orderID . "<p>"; ?>

      <div>

        <a href="../../index.html" style="font-family: Verdana, Geneva, Tahoma, sans-serif, cursive; font-size: 150%; text-decoration: none;font-weight:bolder; display: inline-block;">
          <i> <span style="color:#003087">SOUND</span>
            <span style="color:#009CDE; margin-left: -13px;">CRAFT</span><span style="color:#151616; margin-left: -8px; font-weight: lighter; ">store</span></i></a>
      </div>
    </div>

    <!-- <footer>
      <p class="mb-1">&copy; 2021 Copyright - Indigo Store</p>
    </footer> -->

  </div>
</body>

</html>