<?php

$mailto = "smallcolin@smallcolin.se"; 

function sanitize(array $args)
{
    foreach ($args as $data) {
        $data = trim($data);
        $data = htmlspecialchars($data);
    }
    return $args;
}
if (isset($_POST['submit']) && $_SERVER['REQUEST_METHOD'] === "POST") {
    $_POST = sanitize($_POST);
    $email = $_POST['email'];
    $message = $_POST['message'];
    $subject = $_POST['subject'];
    $name = $_POST['name'];

    $msg = "Message from $name.\nEmail: $email.\n\n$message";
    mail($mailto, $subject, $msg);
}

?>

	<form action="" method="post">
	    <input type="text" name="name" placeholder="full name" />
	    <input type="text" name="subject" placeholder="subject" />
	    <input type="email" name="email" placeholder="email" />
	    <textarea name="message"></textarea>
	    <input type="submit" name="submit" />
	</form>




// A function to enter a contact form into your wordpress site. (En funktion för att ange ett kontaktformulär på din Wordpress webbplats).

    function contact_form(){ ?>

    <!-- <form class="form" style="text-align:center;" method="post" action="http://localhost/wordpress/wordpress_photos/response/"> -->
          <form class="form" style="text-align:center;" method="post" action="<?php echo get_permalink(95); ?>">
                   <label class="form" for="names">Name*</label><br />
                   <input class="form" type="text" name="names" id="names" required /><br />
                   <label class="form" for=email>Email*</label><br />
                   <input class="form" type="email" name="email" id="email" required /><br />
                   <label class="form" for="message">Message</label><br />
                   <textarea class="form" id="message" name="message"></textarea><br />
                   <input class="btn form" type="submit" value="Send" />
          </form>

    <?php } 

