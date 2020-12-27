<!DOCTYPE html>
<html lang="">

<head>
    <meta charset="utf-8">
    <title>Go Fly A Kite</title>
    <link rel="stylesheet" type="text/css" href="css/styles.css" />
</head>

<body>
    <header class="flex">
        <h1>
            <img src="images/kitenav.png" alt="" />
            Go Fly A Kite
        </h1>
        <div class="nav">
            <p><a href="">Deltas</a></p>
            <p><a href="">Diamonds</a></p>
            <p><a href="">Box</a></p>
            <p><a href="">Specialty</a></p>
            <p><a href="">Contact</a></p>
        </div>
    </header>

    <section background="#6EA3D7">
		<?php
		if ( isset( $_POST['submit'] ) ) {
		echo '<h2>form data retrieved by using the $_REQUEST variable<h2/>'
		
		$first_name = $_POST['fname'];
		$last_name = $_POST['lname'];
		$email = $_POST['email'];
		$phone = $_POST['phone'];
		$comments = $_POST['comments'];

		echo $first_name;
		echo $last_name;
		echo $email;
		echo $phone;
		echo $comments;
		}
		?>
	</section>
</body>
</html>