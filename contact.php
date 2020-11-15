<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title> SAJ</title>
        <link rel="stylesheet" href="main.css">
        <script src="checkContact.js"></script>
        <link rel="shortcut icon" href="favicon.ico">
    </head>
    <body>
    <!-- Paste the following php files below into your file to obtain the navigation and footer-->
    <!-- Make sure your files that contains HTML are .php-->
        <?php include('header.php'); ?>
    <!-- Replace the div below with your content-->
    <div id="contact">

        <form name="contact_form" onsubmit="return validateInput()" method="post">
            <fieldset id="contact_section">
                <legend><b>Contact Us</b></legend>
                <label for="fname">Full Name:</label>
                <input type="text" onchange="clearError(this)" id="fname" required><br>
                <label for="email">Email:</label>
                <input type="text" onchange="clearError(this)" id="email" required><br>
                <label for="subject">Subject:</label>
                <input type="text" id="subject" required><br>
                <p>Message:</p>
                <textarea name="message" id="message" placeholder="Enter your message..."></textarea>
                <input type="submit" value="Submit" id="contact_submit"> <br>
            </fieldset>
        </form>

    </div>

        <?php include('footer.php'); ?>
    </body>
</html>