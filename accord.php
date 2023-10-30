<?php
  ob_start();
  include 'commentsaccord.inc.php';
  include 'dbh.inc.php';
  date_default_timezone_set('America/New_York');
?>

<html>

<head>

  <link rel="icon" href="assets/logo.png">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width">
  <title>Honda Accord Article</title>
  <!--Fonts:-->
  <!--Heading 1 and header-->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Oswald&family=Roboto:wght@100&family=Young+Serif&display=swap"
    rel="stylesheet">
  <link href="style.css" rel="stylesheet" type="text/css" />
  <!--Heading 2 (article titles)-->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;500;600&display=swap" rel="stylesheet">
  <!--Article text font-->
  <link
    href="https://fonts.googleapis.com/css2?family=Nunito+Sans:opsz,wght@6..12,500;6..12,700&family=Playfair+Display:wght@400;500;600&display=swap"
    rel="stylesheet">


</head>

<body>
  <!--HEADER-->
  <div class="navigation">
    <div id="headline">
      <h1><i><a href=index.html>Automotive Times</h1></i></a>
    </div>
    <nav>
      <a href="index.html">Home</a> |
      <a href="reviews.html">Reviews</a> |
      <a href="picks.html">Top Picks</a> |
      <a href="about.html">About Us</a>

    </nav>

  </div>



  <div class="camryArticle">
    <h2>The Next Generation Honda Accord is a Classy Ride</h2>
    <div class="overview">
      <p><strong>Overview: </strong>The brand new redesigned Honda Accord brings a relatively new look to the table -
        gone are the old days of its 2.0L engine and sporty looks. This next generation brings a much more mature look
        and a classy interior. </p>
    </div>
    <img src="assets/accord.jpg">

    <div class="camryArticleText">

      <h3>Engine Specifications</h3>
      <p>This new Honda shows off two engine choices. Either a conventional gas (in the lower two trim levels), or a
        hybrid (offered in all the upper trim levels)</p>
      <div class="engineTable">
        <table>
          <thead>
            <th colspan="4">Accord Engine Type vs. Specifications</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <th></th>
              <th>4-Cyl</th>
              <th>Hybrid</th>
            </tr>


            <tr>
              <th>0-60</th>
              <td>7.9</td>
              <td>7.5</td>


            </tr>
            <tr>
              <th>Horsepower (HP)</th>
              <td>203</td>
              <td>208</td>


            </tr>
            <tr>
              <th>Base Cost</th>
              <td>$27,970</td>
              <td>$34,950</td>
            </tr>
          </tbody>
        </table>
      </div>

      <h3>Review</h3>
      <p>The Accord is back and more mature. Honda has decided to remove the sportier engine options in the Accord as
        well as the traditional automatic transmission. Buyers can be incentivized for great, updated technology and
        excellent ride quality.</p>
      <h3>
        <div span class="pros-cons-title">Pros</div>
      </h3>
      <ul>
        <li>Various color options</li>
        <li>Amazing technology</li>
        <li>Amazing Fuel Economy</li>
      </ul>
      <h3>
        <div span class="pros-cons-title">Cons</div>
      </h3>
      <ul>
        <li>Looks may not be for everyone</li>
        <li>Cabin noise</li>
      </ul>
    </div>
  </div>
  </div>

  <h3 id=commentsTitle>Comments</h3>
      <div class="comments">
      <?php
        echo "<form method='POST' action='".setComments($conn)."'>

          <input type='hidden' name='date' value='".date('Y-m-d H:i:s')."'>
          <div class = 'formTitles'>
          <h2>Name: </h2><textarea name = 'uid'></textarea>
          <div class='anon'>
          <input type='checkbox' name='anonButton' id='checkBox'>Anonymous
          </div>
          <h2>Comment: </h2><textarea name = 'message'></textarea>
          </div>
          <div class='submitComment'>
          <button name='commentSubmitAccord' type='submit'>Submit</button>
          </div>
        </form>";      

        getComments($conn);

        "</div>";

        ob_end_flush();
      ?>

    </div>






  <div class="bottomNavigation">
    <h1><i>Automotive Times</i></h1>
    <nav>
      <a href="index.html">Home</a> |
      <a href="reviews.html">Reviews</a> |
      <a href="picks.html">Top Picks</a> |
      <a href="about.html">About Us</a>
    </nav>
  </div>

</body>

</html>