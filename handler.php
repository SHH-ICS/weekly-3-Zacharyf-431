<!DOCTYPE html>
<html>

<head>

  <!-- Stylesheet Stuff goes here -->
  <link rel="stylesheet" href="./css/styles.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
  <link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.indigo-pink.min.css">
  <script defer src="https://code.getmdl.io/1.3.0/material.min.js"></script>


  <title>Pizza Order</title>

</head>

<body>

  <div class="mdl-layout mdl-js-layout mdl-layout--fixed-header">
    <header class="mdl-layout__header">
      <div class="mdl-layout__header-row">
        <!-- Title -->
        <span class="mdl-layout-title">Pizza Calculator</span>
        <div class="mdl-layout-spacer"></div>
      </div>
    </header>
    <main class="mdl-layout__content">
      <div class="page-content"><br />


        <center>

          <?php
          $diameter = 0;
          if (isset($_POST['diameter'])) {
            $diameter = $_POST['diameter'];
          }
          echo "<p>Diameter is = " . number_format((float)$diameter, 2, '.', '') . "</p>\n";
          $radius = ($diameter / 2);
          echo "<p>Radius is = " . number_format((float)$radius, 2, '.', '') . "</p>\n";
          echo "<p>Area is = " . number_format((float)(pi() * ($radius ** 2)), 2, '.', '') . "</p>\n";
          echo "<p>Circumference is = " . number_format((float)(2 * $radius * pi()), 2, '.', '') . "</p>\n";
          ?>

          <br /><br />
          <!-- Colored raised button -->
          <a href="index.html"><button class="mdl-button mdl-js-button mdl-button--raised mdl-button--colored">
              Do Another?
            </button></a>
        </center>


      </div>
    </main>
  </div>

</body>

</html>