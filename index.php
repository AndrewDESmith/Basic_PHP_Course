<?php

// Defining constants (name, value):
define("YEAR", 2016);
define("JOB_TITLE", "Teacher");
define("USE_FULL_NAME", FALSE);
define("MAX_BADGES", 150000);

// Invalid constant name
// define("2LEGIT", "to quit");

// $name = "Hampton";
$location = "Orlando, FL";
// $full_name = "Mike the Frog";
// $name = $full_name
$first_name = "Hampton";
$last_name = "Paulk";
$role = "Teacher";


// PHP conditional:
if( USE_FULL_NAME == TRUE ) {
  // Concatenation of strings with a dot (.)
  $name = $first_name . ' ' . $last_name;
} else {
  $name = $first_name;
}

?>

<!DOCTYPE html>
<html>
  <head>
  	<meta charset=utf-8>
  	<title><?php echo $name ?> | Treehouse Profile</title>
  	<link href="css/style.css" rel="stylesheet" />
  </head>

  <body>
    <section class="sidebar text-center">
      <div class="avatar">
        <img src="img/avatar.png" alt="<?php echo $full_name ?>">
      </div>
      <h1><?php echo $name ?></h1>
      <p><?php echo $location ?></p>
      <hr />
      <p>Welcome to PHP Basics!</p>
      <hr />
      <ul class="social">
        <li><a href=""><span class="icon twitter"></span></a></li>
      </ul>
    </section>
    <section class="main">
      <!-- <p>Let's Get Started!</p> -->
      <pre><?php

        // $a = 10;
        // $b = 10;
        // // $c = 20;
        // // $d = "10";

        // Comparison Operators:
        // var_dump( $a == $d ); // equal
        // var_dump( $a === $d ); // identical (equal in value AND type)
        // var_dump( $a != $d );
        // var_dump( $a !== $d ); // not identical

        // var_dump( $a < $b );
        // var_dump( $a > $b );
        // var_dump( $a <= $b );
        // var_dump( $a >= $b );

        $a = FALSE;
        $b = TRUE;

        // Logical Operators:
        var_dump( $a and $b );
        var_dump( $a or $b );
        var_dump( !$a ); // Not TRUE

        // $sum = $a + $b;
        // $diff = $a - $b;
        // $product = $a * $b;
        // $quotient = $a / $b;

        // $product++;

        // $hampton = array(12, 'grey', 2.5, TRUE);
        // print_r($hampton);

        // Associative array:
        // $eye_colors = array(
        //   'chris' => 'blue',
        //   'tom' => 'green',
        //   'jim' => 'brown'
        // );

        // print_r($eye_colors);

        // $eye_colors['jim'] = 'Satanic RED';

        // echo $eye_colors['jim'];

        // $eye_colors[1] = 'hazel';
        // echo $eye_colors[1];

        // echo YEAR;
        // echo JOB_TITLE;

          // $one = 1;
          // $two = 2;
          // $three = 3;
          // $string_one = "1";

          // $distance_to_home = 1.2;
          // $distance_to_work = 2.5;

          // $greeting = "Hello, Friends!\n";
          // $greeting{0} = "J";
          // $secondary_greeting = "How are you today?";
          // // echo $greeting;
          // // echo $secondary_greeting;


          // $bool = TRUE;
          // // var_dump($bool);
          // $bool = FALSE;
          // // var_dump($bool);

          // var_dump((bool) "");
          // var_dump((bool) 1);
          // var_dump((bool) 0.0);
          // var_dump((bool) array());
        ?></pre>

      <ul>
        <li><?php echo $sum; ?></li>
        <li><?php echo $diff; ?></li>
        <li><?php echo $product; ?></li>
        <li><?php echo $quotient; ?></li>
      </ul>

     <!--  <ul>
        <li><?php //echo gettype($one); ?></li>
        <li><?php //echo gettype($string_one); ?></li>
        <li><?php //echo $one + $two - $three; ?></li>
        <li><?php //echo $distance_to_work + $distance_to_home + $three;?></li>
      </ul> -->
    </section>
  </body>
</html>
