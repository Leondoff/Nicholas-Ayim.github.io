
<?php








?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <link rel="stylesheet" href="resturant.css">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta charset="UTF-8">
        <meta http-equiv ="X-UA-Compatible" content="IE=edge">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.5.1/css/swiper.min.css">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.5.1/js/swiper.min.js"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
        <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">
    </head>
  

        <body>


    <header class="header">


    
    <a href="#" class="logo"><i class="fas  fa-utensils" ></i>CHOP_UCC</a>
    
    <nav class="navbar">

    <a href="#home" class="active">HOME</a>
    <a href="#dishes">DISHES</a>
    <a href="#about">ABOUT</a>
    <a href="#menu">MENU</a>
    <a href="#review">REVIEW</a>
    <a href="#order">ORDER</a>
    </nav>

    <div class="icons">
        <i class="fa fa-bars" id="menu-bars" onclick="nav()"></i>
        <i class="fa fa-search" id="search-icon" ></i>
        <a class="fa fa-heart"></a>
        <a class="fa fa-shopping-cart"></a>
        
    </div>

</header>

<form action=" " id ="search-form">
    <input type="search" name= " " id="search-box" placeholder="Please enter the name of your food" ><i class="fa fa-search"></i>
     <label for="search-box"></label>
     <label class="fa fa-times" id="close"></label>
</form>

<section  class="home"  id="home">
    
    <div class="swiper-container home-slider">

        <div class="swiper-wrapper wrapper">
            
            <div class="swiper-slide slide">
                <div class="content_1">
                    <span>our speacial dish</span>
                    <h3>BANKU</h3>
                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ipsum quas blanditiis ipsa ullam! Consectetur amet nostrum suscipit dolorum molestias. Eos magni rem, voluptatum soluta quod ut vel cumque tenetur modi?
                    </p>
                    <button><a href="#" class="btn">order</a></button>
                </div>
                <div class="image_1">
                    <Img src="banku.jpeg" alt="">
                </div>
            </div>

            <div class="swiper-slide slide">
                <div class="content_1">
                    <span>for you<i class="fa fa-heart" style="color:red"></i></span>
                    <h3>TILAPIA</h3>
                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ipsum quas blanditiis ipsa ullam! Consectetur amet nostrum suscipit dolorum molestias. Eos magni rem, voluptatum soluta quod ut vel cumque tenetur modi?
                    </p>
                    <button><a href="#" class="btn">order</a></button>
                </div>
                <div class="image_1">
                    <Img src="tilapia.jpg" alt="">
                </div>
            </div>

            <div class="swiper-slide slide">
                <div class="content_1">
                    <span>our speacial dish</span>
                    <h3>PIZZA</h3>
                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ipsum quas blanditiis ipsa ullam! Consectetur amet nostrum suscipit dolorum molestias. Eos magni rem, voluptatum soluta quod ut vel cumque tenetur modi?
                    </p>
                    <button><a href="#" class="btn">order</a></button>
                </div>
                <div class="image_1">
                    <Img src="pizza1.jpeg" alt="">
                </div>
            </div>

        </div>

        <div class="swiper-pagination"></div>
        <!--
            <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>
        -->


    </div>

</section>



<section class="dishes" id="dishes">
    <h3 class="sub-heading">our-dishes</h3>
    <h1 class="heading">popular dishes today</h1>

    <div class="box-container">

        <div class="box">
            <a href="#" class="fa fa-heart"></a>
            <a href="#" class="fa fa-eye"></a>
            <img src="gob3.jpeg"></img>
            <h3>GOB3 IS LIFE</h3>
            <div class="stars">
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star-half"></i>
            </div>
            <span>$11.50</span>
            <button><a href="#" class="btn">add cart</a></button>
        </div>

     

            <div class="box">
                <a href="#" class="fa fa-heart"></a>
                <a href="#" class="fa fa-eye"></a>
                <img src="pizza1.jpeg"></img>
                <h3>OBRONI-DWANI(PIZZA)</h3>
                <div class="stars">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star-half"></i>
                </div>
                <span>$11.50</span>
                <button><a href="#" class="btn">add cart</a></button>
            </div>

         

                <div class="box">
                    <a href="#" class="fa fa-heart"></a>
                    <a href="#" class="fa fa-eye"></a>
                    <img src="pizza2.jpeg"></img>
                    <h3>SAM-JONNAH(PIZZA)</h3>
                    <div class="stars">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star-half"></i>
                    </div>
                    <span>$11.50</span>
                    <button><a href="#" class="btn">add cart</a></button>
                </div>


                <div class="box">
                    <a href="#" class="fa fa-heart"></a>
                    <a href="#" class="fa fa-eye"></a>
                    <img src="Waakye.jpeg"></img>
                    <h3>WAAKYE</h3>
                    <div class="stars">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star-half"></i>
                    </div>
                    <span>$11.50</span>
                    <button><a href="#" class="btn">add cart</a></button>
                </div>

            

                    <div class="box">
                        <a href="#" class="fa fa-heart"></a>
                        <a href="#" class="fa fa-eye"></a>
                        <img src="pizza3.jpg"></img>
                        <h3>PIZZA</h3>
                        <div class="stars">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star-half"></i>
                        </div>
                        <span>$11.50</span>
                        <button><a href="#" class="btn">add cart</a></button>
                    </div>
            
                    

        <div class="box">
            <a href="#" class="fa fa-heart"></a>
            <a href="#" class="fa fa-eye"></a>
            <img src="Kenkey.jpeg"></img>
            <h3>GA K)MI</h3>
            <div class="stars">
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star-half"></i>
            </div>
            <span>$11.50</span>
            <button><a href="#" class="btn">add cart</a></button>
        </div>


        <div class="box">
            <a href="#" class="fa fa-heart"></a>
            <a href="#" class="fa fa-eye"></a>
            <img src="ampesi.jpeg"></img>
            <h3>SPECIAL AMPESI</h3>
            <div class="stars">
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star-half"></i>
            </div>
            <span>$11.50</span>
            <button><a href="#" class="btn">add cart</a></button>
        </div>

        <div class="box">
            <a href="#" class="fa fa-heart"></a>
            <a href="#" class="fa fa-eye"></a>
            <img src="fufu.jpeg"></img>
            <h3>tasty food</h3>
            <div class="stars">
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star-half"></i>
            </div>
            <span>$11.50</span>
            <button><a href="#" class="btn">add cart</a></button>
        </div>
        
    </div>

</section>

<section class="about" id="about">
    <h3 class="sub-heading">about</h3>
    <h1 class="heading">READ MORE</h1>
   

    <div class="row">
        
        <div class="image">
            <img src="pizza2.jpeg">
        </div>

        <div class="content">
        <h3>best food in the country</h3>
        <p class="about_text">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Debitis labore cumque soluta ab tempore incidunt est quo rerum temporibus ducimus, molestias earum, aperiam recusandae laudantium! Aliquam vitae inventore sit animi.
        </p>
        <p class="about_text">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Debitis labore cumque soluta ab tempore incidunt est quo rerum temporibus ducimus, molestias earum, aperiam recusandae laudantium! Aliquam vitae inventore sit animi.
        </p>
        <p class="about_text">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Debitis labore cumque soluta ab tempore incidunt est quo rerum temporibus ducimus, molestias earum, aperiam recusandae laudantium! Aliquam vitae inventore sit animi.
        </p>
        <button><a href="#" class="btn size">read more..</a></button>
      <div class="delivery">
        <button class="deli_btn"><a href="#"><i class="fa fa-heart"></i>  DELIVERY</a></button>
        <button class="deli_btn"><a href="#"><i class="fa fa-facebook"></i>  BUY</a></button>
        <button class="deli_btn"><a href="#"><i class="fa fa-heart"></i>  ORDER</a></button>
    </div>

    </div>
      
</section>
<section class="menu" id="menu">
    <div class="sub-heading">OUR RECOMMENDATIONS</div>
    <div class="heading">MENU</div>

    <div class="menu_container">

        <div class="menu_box">

            <div class="menu_image">
                <img src="pizza3.jpg">
                <div class="fa fa-heart"></div>
            </div>
            <div class="content">
                <div class="stars">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star-o"></i>
                </div>
                <h3>our recommended place</h3>
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ipsum minima facere, distinctio cumque, quo, exercitationem ullam consequuntur ipsa aliquid nihil voluptatum quis? Inventore esse iusto adipisci fugiat, maxime molestiae minus.

                </p>
                <div class="book_btn">
                    <button><a href="#" class="menu_btn">see more...</a></button>
                    <button><a href="#" class="menu_btn">book</a></button>
                    </div>
            </div>
        </div>

        
        <div class="menu_box">

            <div class="menu_image">
                <img src="pizza3.jpg">
                <div class="fa fa-heart"></div>
            </div>
            <div class="content">
                <div class="stars">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star-o"></i>
                </div>
                <h3>our recommended place</h3>
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ipsum minima facere, distinctio cumque, quo, exercitationem ullam consequuntur ipsa aliquid nihil voluptatum quis? Inventore esse iusto adipisci fugiat, maxime molestiae minus.

                </p>
                <div class="book_btn">
                    <button><a href="#" class="menu_btn">see more...</a></button>
                    <button><a href="#" class="menu_btn">book</a></button>
                    </div>
            </div>
        </div>

        
        <div class="menu_box">

            <div class="menu_image">
                <img src="pizza3.jpg">
                <div class="fa fa-heart"></div>
            </div>
            <div class="content">
                <div class="stars">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star-o"></i>
                </div>
                <h3>our recommended place</h3>
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ipsum minima facere, distinctio cumque, quo, exercitationem ullam consequuntur ipsa aliquid nihil voluptatum quis? Inventore esse iusto adipisci fugiat, maxime molestiae minus.

                </p>
                <div class="book_btn">
                    <button><a href="#" class="menu_btn">see more...</a></button>
                    <button><a href="#" class="menu_btn">book</a></button>
                    </div>
            </div>
        </div>

        
        <div class="menu_box">

            <div class="menu_image">
                <img src="pizza3.jpg">
                <div class="fa fa-heart"></div>
            </div>
            <div class="content">
                <div class="stars">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star-o"></i>
                </div>
                <h3>our recommended place</h3>
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ipsum minima facere, distinctio cumque, quo, exercitationem ullam consequuntur ipsa aliquid nihil voluptatum quis? Inventore esse iusto adipisci fugiat, maxime molestiae minus.

                </p>
                <div class="book_btn">
                    <button><a href="#" class="menu_btn">see more...</a></button>
                    <button><a href="#" class="menu_btn">book</a></button>
                    </div>
            </div>
        </div>

        
        <div class="menu_box">

            <div class="menu_image">
                <img src="pizza3.jpg">
                <div class="fa fa-heart"></div>
            </div>
            <div class="content">
                <div class="stars">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star-o"></i>
                </div>
                <h3>our recommended place</h3>
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ipsum minima facere, distinctio cumque, quo, exercitationem ullam consequuntur ipsa aliquid nihil voluptatum quis? Inventore esse iusto adipisci fugiat, maxime molestiae minus.

                </p>
                <div class="book_btn">
                    <button><a href="#" class="menu_btn">see more...</a></button>
                    <button><a href="#" class="menu_btn">book</a></button>
                    </div>
            </div>
        </div>

        
        <div class="menu_box">

            <div class="menu_image">
                <img src="pizza3.jpg">
                <div class="fa fa-heart"></div>
            </div>
            <div class="content">
                <div class="stars">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star-half"></i>
                </div>
                <h3>our recommended place</h3>
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ipsum minima facere, distinctio cumque, quo, exercitationem ullam consequuntur ipsa aliquid nihil voluptatum quis? Inventore esse iusto adipisci fugiat, maxime molestiae minus.

                </p>
                <div class="book_btn">
                <button><a href="#" class="menu_btn">see more...</a></button>
                <button><a href="#" class="menu_btn">book</a></button>
                </div>
            </div>
        </div>


    </div>
</section>

<section class="review" id="review">
    <div class="sub-heading">REVIEWS</div>
    <div class="heading">COMMENTS</div>
     
    <div  class="swiper-container review_slider">

        <div class="swiper-wrapper">

        <div class="swiper-slide slide">

            <i class="fa fa-quote-right"></i>
            <div class="user">
             <div class="user-image">
                <img src="gob3.jpeg">
            </div>
                <div class="user-info">
                    <h4>NICHOLAS AYIM</h4>
                    <div class="stars">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star-o"></i>
                    </div>
                </div>
            </div>
            <div class="fa fa-quote"></div>
            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Rerum qui pariatur voluptatum blanditiis cum nulla! Quam at placeat molestias nam cum. Nisi iusto pariatur veritatis maiores nemo molestias reprehenderit fugit?
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Ducimus nostrum reprehenderit, quod dolores maiores quia beatae placeat eaque adipisci ex magnam, saepe eligendi provident! Corrupti vel amet quis odit modi?
            </p>

        </div>
        <div class="swiper-slide slide">

            <i class="fa fa-quote-right"></i>
            <div class="user">
             <div class="user-image">
                <img src="gob3.jpeg">
            </div>
                <div class="user-info">
                    <h4>NICHOLAS AYIM</h4>
                    <div class="stars">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star-o"></i>
                    </div>
                </div>
            </div>
            <div class="fa fa-quote"></div>
            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Rerum qui pariatur voluptatum blanditiis cum nulla! Quam at placeat molestias nam cum. Nisi iusto pariatur veritatis maiores nemo molestias reprehenderit fugit?
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Ducimus nostrum reprehenderit, quod dolores maiores quia beatae placeat eaque adipisci ex magnam, saepe eligendi provident! Corrupti vel amet quis odit modi?
            </p>

        </div>

        <div class="swiper-slide slide">

            <i class="fa fa-quote-right"></i>
            <div class="user">
             <div class="user-image">
                <img src="gob3.jpeg">
            </div>
                <div class="user-info">
                    <h4>NICHOLAS AYIM</h4>
                    <div class="stars">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star-o"></i>
                    </div>
                </div>
            </div>
            <div class="fa fa-quote"></div>
            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Rerum qui pariatur voluptatum blanditiis cum nulla! Quam at placeat molestias nam cum. Nisi iusto pariatur veritatis maiores nemo molestias reprehenderit fugit?
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Ducimus nostrum reprehenderit, quod dolores maiores quia beatae placeat eaque adipisci ex magnam, saepe eligendi provident! Corrupti vel amet quis odit modi?
            </p>

        </div>

        <div class="swiper-slide slide">

            <i class="fa fa-quote-right"></i>
            <div class="user">
             <div class="user-image">
                <img src="gob3.jpeg">
            </div>
                <div class="user-info">
                    <h4>NICHOLAS AYIM</h4>
                    <div class="stars">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star-o"></i>
                    </div>
                </div>
            </div>
            <div class="fa fa-quote"></div>
            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Rerum qui pariatur voluptatum blanditiis cum nulla! Quam at placeat molestias nam cum. Nisi iusto pariatur veritatis maiores nemo molestias reprehenderit fugit?
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Ducimus nostrum reprehenderit, quod dolores maiores quia beatae placeat eaque adipisci ex magnam, saepe eligendi provident! Corrupti vel amet quis odit modi?
            </p>

        </div>

        <div class="swiper-slide slide">

            <i class="fa fa-quote-right"></i>
            <div class="user">
             <div class="user-image">
                <img src="gob3.jpeg">
            </div>
                <div class="user-info">
                    <h4>NICHOLAS AYIM</h4>
                    <div class="stars">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star-o"></i>
                    </div>
                </div>
            </div>
            <div class="fa fa-quote"></div>
            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Rerum qui pariatur voluptatum blanditiis cum nulla! Quam at placeat molestias nam cum. Nisi iusto pariatur veritatis maiores nemo molestias reprehenderit fugit?
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Ducimus nostrum reprehenderit, quod dolores maiores quia beatae placeat eaque adipisci ex magnam, saepe eligendi provident! Corrupti vel amet quis odit modi?
            </p>

        </div>

        <div class="swiper-slide slide">

            <i class="fa fa-quote-right"></i>
            <div class="user">
             <div class="user-image">
                <img src="gob3.jpeg">
            </div>
                <div class="user-info">
                    <h4>NICHOLAS AYIM</h4>
                    <div class="stars">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star-o"></i>
                    </div>
                </div>
            </div>
            <div class="fa fa-quote"></div>
            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Rerum qui pariatur voluptatum blanditiis cum nulla! Quam at placeat molestias nam cum. Nisi iusto pariatur veritatis maiores nemo molestias reprehenderit fugit?
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Ducimus nostrum reprehenderit, quod dolores maiores quia beatae placeat eaque adipisci ex magnam, saepe eligendi provident! Corrupti vel amet quis odit modi?
            </p>

        </div>

        <div class="swiper-slide slide">

            <i class="fa fa-quote-right"></i>
            <div class="user">
             <div class="user-image">
                <img src="gob3.jpeg">
            </div>
                <div class="user-info">
                    <h4>NICHOLAS AYIM</h4>
                    <div class="stars">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star-o"></i>
                    </div>
                </div>
            </div>
            <div class="fa fa-quote"></div>
            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Rerum qui pariatur voluptatum blanditiis cum nulla! Quam at placeat molestias nam cum. Nisi iusto pariatur veritatis maiores nemo molestias reprehenderit fugit?
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Ducimus nostrum reprehenderit, quod dolores maiores quia beatae placeat eaque adipisci ex magnam, saepe eligendi provident! Corrupti vel amet quis odit modi?
            </p>

        </div>

        <div class="swiper-slide slide">

            <i class="fa fa-quote-right"></i>
            <div class="user">
             <div class="user-image">
                <img src="gob3.jpeg">
            </div>
                <div class="user-info">
                    <h4>NICHOLAS AYIM</h4>
                    <div class="stars">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star-o"></i>
                    </div>
                </div>
            </div>
            <div class="fa fa-quote"></div>
            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Rerum qui pariatur voluptatum blanditiis cum nulla! Quam at placeat molestias nam cum. Nisi iusto pariatur veritatis maiores nemo molestias reprehenderit fugit?
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Ducimus nostrum reprehenderit, quod dolores maiores quia beatae placeat eaque adipisci ex magnam, saepe eligendi provident! Corrupti vel amet quis odit modi?
            </p>

        </div>
        

        <div class="swiper-slide slide">

            <i class="fa fa-quote-right"></i>
            <div class="user">
             <div class="user-image">
                <img src="gob3.jpeg">
            </div>
                <div class="user-info">
                    <h4>NICHOLAS AYIM</h4>
                    <div class="stars">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star-o"></i>
                    </div>
                </div>
            </div>
            <div class="fa fa-quote"></div>
            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Rerum qui pariatur voluptatum blanditiis cum nulla! Quam at placeat molestias nam cum. Nisi iusto pariatur veritatis maiores nemo molestias reprehenderit fugit?
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Ducimus nostrum reprehenderit, quod dolores maiores quia beatae placeat eaque adipisci ex magnam, saepe eligendi provident! Corrupti vel amet quis odit modi?
            </p>

        </div>
        


        <div class="swiper-slide slide">

            <i class="fa fa-quote-right"></i>
            <div class="user">
             <div class="user-image">
                <img src="gob3.jpeg">
            </div>
                <div class="user-info">
                    <h4>NICHOLAS AYIM</h4>
                    <div class="stars">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star-o"></i>
                    </div>
                </div>
            </div>
            <div class="fa fa-quote"></div>
            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Rerum qui pariatur voluptatum blanditiis cum nulla! Quam at placeat molestias nam cum. Nisi iusto pariatur veritatis maiores nemo molestias reprehenderit fugit?
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Ducimus nostrum reprehenderit, quod dolores maiores quia beatae placeat eaque adipisci ex magnam, saepe eligendi provident! Corrupti vel amet quis odit modi?
            </p>

        </div>
        

        <div class="swiper-slide slide">

            <i class="fa fa-quote-right"></i>
            <div class="user">
             <div class="user-image">
                <img src="gob3.jpeg">
            </div>
                <div class="user-info">
                    <h4>NICHOLAS AYIM</h4>
                    <div class="stars">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star-o"></i>
                    </div>
                </div>
            </div>
            <div class="fa fa-quote"></div>
            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Rerum qui pariatur voluptatum blanditiis cum nulla! Quam at placeat molestias nam cum. Nisi iusto pariatur veritatis maiores nemo molestias reprehenderit fugit?
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Ducimus nostrum reprehenderit, quod dolores maiores quia beatae placeat eaque adipisci ex magnam, saepe eligendi provident! Corrupti vel amet quis odit modi?
            </p>

        </div>
        

        <div class="swiper-slide slide">

            <i class="fa fa-quote-right"></i>
            <div class="user">
             <div class="user-image">
                <img src="gob3.jpeg">
            </div>
                <div class="user-info">
                    <h4>NICHOLAS AYIM</h4>
                    <div class="stars">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star-o"></i>
                    </div>
                </div>
            </div>
            <div class="fa fa-quote"></div>
            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Rerum qui pariatur voluptatum blanditiis cum nulla! Quam at placeat molestias nam cum. Nisi iusto pariatur veritatis maiores nemo molestias reprehenderit fugit?
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Ducimus nostrum reprehenderit, quod dolores maiores quia beatae placeat eaque adipisci ex magnam, saepe eligendi provident! Corrupti vel amet quis odit modi?
            </p>

        </div>

    </div>
    </div>
</section>

<section class="order" id="order">
    <div class="sub-heading">book</div>
    <div class="heading">Book event</div>

    <div class="order_container">

        <div class="order_box">


            <div class="user_details">

               <form method="POST">

                <p>FIRST NAME</p>
                <input id="text" name ="firstname" placeholder="enter your name here">
                
                <p>LAST NAME</p>
                    <input id="text" name="lastname" placeholder="enter your name here">
                    
                <p>YOUR ORDER</p>
                    <input id="text"  name="your_order" placeholder="enter your name here">
                    
                <p>HOW MUCH</p>
                    <input  id="text"  name="how_much" class="address_size" placeholder="enter your name here">
                    
                </form>

               </div>

               <div class="other_details">

                <form method="POST">

                <p>ADDRESS</p>
                    <input id="text" name="address" placeholder="enter your name here">
                    

                    <p>additionalorder</p>
                        <input id="text" name="additional_order"placeholder="enter your name here">
                        

                        <p>Order time</p>
                            <input id="text" type="datetime-local"  name="order_time">
                            
                            <p>SAVE DATE</p>
                            <input id="text" type="date" name="save">
                            


                           <p> <button type="submit">SUBMIT</button></p>

                </form>
               </div>

        </div>
    </div>

    
</section>

<script src="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

    <script src="resturant.js"></script>
</body>

</html>