<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    <link rel="shortcut icon" type="image/x-icon" href="/favicon.ico">
    <link rel="stylesheet" href="css/style.css">

    <script type="module" src="js/script.js"></script>
    <title>Ruzai General Trading</title>

    
</head>



<body>
    <header class="hero">

        <div id="navbar" class="navbar">
            <div class="logo">
                <img src="images/logo.jpg" alt="logo">
            </div>
    
           <nav>
                    <ul>
                    <li><a href="#home">Home</a></li>
                    <li><a href="#about">About</a></li>
                    <li class="contact-style"><a href="#contact">Contact</a></li>
                    </ul>  
            </nav>
            
        </div>

        <div class="hero-text">
            <h1>Export	&#38; Import</h1>
            <h3>Fruits, Vegetables and Seafood</h3>

            <a href="#contact" class="btn">Get in touch</a>
        </div>
    </header>

    <main>

        <section id="about" class="about">

            <div class="container">

                <div class="column">

                    <h4>About Us</h4>

                    <p>Facilitating trade of goods and commodities between domestic and foreign companies while ensuring and guaranteeing the best quality and value. 
                        <br><br>
                    We import fruits, vegetables, and seafood.</p>
                </div>

                <div class="column">
                    <div class="overlay"></div>
                    <img src="images/about-1.jpg" alt="Ruzai General Trading">
                </div>

            </div>

        </section>


        <section id="gallery" class="gallery">

            <div class="container">
                <div class="item">
                    <p class="img-text">Fruits</p>
                    <img src="images/fruits.jpg" />
                    <div class="overlay"></div>
                </div>
                
                <div class="item">
                    <p class="img-text">Seafood</p>
                    <img src="images/seafood.jpg" />
                    <div class="overlay"></div>
                </div>

                <div class="item">
                    <p class="img-text">Vegetables</p>
                    <img src="images/vegetables.jpg" />
                    <div class="overlay"></div>
                </div>
            </div>

            <div class="container">
               <div class="item">
                    <img src="images/king-coconut.jpg" />
                    <div class="overlay"></div>
                </div>

                <div class="item">
                    <img src="images/tapioca.jpg" />
                    <div class="overlay"></div>
                </div>

            </div>
        </section>

        <section id="contact" class="contact">
            <div class="container">
                <h4>Contact Us</h4>

                <form action="send.php" method=”POST” name="form" >
                    <input type="text" name="name" id="name" placeholder="Enter your name" required />
                    <input type="email" name="email" id="email" placeholder="Enter your email" required/>
                    <textarea name="message" id="message" placeholder="Your message here"></textarea>
                    <button type="submit" class="submit">Submit</button>
                </form>
            </div>
        </section>


        <section class="contact-details">
            <div class="container">
                <div class="item">
                    <img src="images/phone.png">

                    <p>
                        Tel: <a href="tel:065-651-756">(06) 565 1756</a><br>
                        Mobile: <a href="tel:00971505266156">00971505266156</a>
                    </p>
                </div>

                <div class="item">
                    <img src="images/address.png" />
                    <address>
                        A-5804-09.<br>
                        Flamingo Villas, Ajman<br>
                        United Arab Emirates.<br>
                        P. O. BOX 124794.
                    </address>
                </div>

                <div class="item">
                    <img src="images/email.png" /><br>
                    <a href="mailto:info@ruzaigeneraltrading.com">info@ruzaigeneraltrading.com</a>
                </div>
            </div>  
        </section>

        <footer>
            <p>&copy; 2022 Ruzai General Trading. All rights reserved.</p>
        </footer>


    </main>
    

</body>


</html>