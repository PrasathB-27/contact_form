<html>
    <head>
        <title> Contact Form </title>
        <link rel="stylesheet" type="text/css" href="conatactindex.css">
    </head>
    <body>
        <div class="contact-title">
            <h1>Contact Form</h1>
            <h2>. . . SERVICE HERE . . .</h2>
        </div>
         <div class="contact-form">
             <form id="contact-form" method="post" action="contactform.php">
                 <input name="name" type="text" class="form-control" placeholder="Your Name" required>
                 <br>
                 <input name="email" type="email" class="form-control" placeholder="Your email" required>
                 <br>
                 <textarea name="message" class="form-control" placeholder="Message" row="4" required></textarea>
                 <br>
                  <!-- <button>SEND MESSAGE</button>  -->
                 <input type="submit" class="form-control submit" value="SEND MESSAGE">
             </form>
         </div>
    </body>
</html>