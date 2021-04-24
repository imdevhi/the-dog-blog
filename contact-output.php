<?php

    $fname = $_POST['fname'];

?>

<!DOCTYPE html>
<html lang="en">

    <head>
        <title>The Dog Blog</title>
        <link rel="shortcut icon" href="./images/dog-blog-logo-footer.png"/>
        <meta charset="utf-8">
        <meta name="description" content="Personal blog">
        <meta name="keywords" content="The Dog Blog, dog, blog, funny, humor, dog parent, comedy">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="./css/dog-blog.css">
        <link href="https://fonts.googleapis.com/css2?family=Mouse+Memoirs&family=Oswald:wght@300&display=swap" rel="stylesheet">
    </head>

    <body>
        <header>
            <div id="heading">
                <div id="heading-image">
                    <img src="images/dog-blog-logo.png" width="150" height="150" alt="Dog blog logo">
                </div>
                <div id="heading-text">
                    <h1>The Dog Blog</h1>
                </div>
            </div>
        </header>

        <nav>
            <ul id="navigation">
                <li><a href="./index.html" target="_self">Home</a></li>
                <li><a href="./about.html" target="_self">About the Dog</a></li>
                <li><a href="./ancestry.html" target="_self">Ancestry Profile</a></li>
                <li><a href="./treats.html" target="_self">Treat Recipes</a></li>
                <li><a href="./contact.html">Contact Us</a></li>
            </ul>
        </nav>

        <main>

            <div id="opening-photo">
                <img src="./images/arya-photo-contact.jpg" width="900" height="506" alt="Close up photo of Arya">
            </div>

            <div id="index-body">
                <h1>Contact the Dog!</h1>
                <p class="output">Thanks <?php echo "$fname" ?>, your message sent successfully. Good for you.</p>
                
                <p class="spacer">&nbsp;</p>

            </div>

        </main>

        <footer>
            <div id="footer">
                <div id="logo-footer">
                    <div id="logo-footer-text">
                        <p>The Dog Blog</p>
                    </div>
                    <div id="logo-footer-logo">
                        <img src="./images/dog-blog-logo-footer.png" width="50" height="50" alt="Dog blog logo">
                    </div>
                </div>
                <div id="contact-us">
                    <div id="contact-text">
                        <p>Contact Us</p>
                    </div>
                    <div id="contact-email-logo">
                        <a href="mailto:this-email-is-fake@website.com" target="_blank" title="Not valid email"><img src="./images/email-footer.png" width="40" height="40" alt="Email logo"></a>
                    </div>
                </div>
                <div id="page-links">
                    <p>
                        Page Links<br />
                        <a href="./about.html" target="_self">About the Dog</a>
                        <a href="./ancestry.html" target="_self">Ancestry Profile</a>
                        <a href="./treats.html" target="_self">Treat Recipes</a>
                        <a href="./contact.html">Contact Us</a>
                    </p>
                </div>
                <div id="copyright">
                    <hr>
                    <p class="padding">All Rights Reserved &copy; The Dog Blog.</p>
                </div>
            </div>
        </footer>

    </body>

</html>