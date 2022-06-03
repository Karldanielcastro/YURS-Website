<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Selected Activity</title>
    <link rel="icon" type="image/x-icon" href="./image/-1 (1).png">
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tiny-slider/2.9.4/tiny-slider.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tiny-slider/2.9.4/min/tiny-slider.js">
    </script>
    <style>

    *{
        padding: 0;
        margin: 0;
    }
    body{
        font-family: 'Noto Sans KR', sans-serif;;
        background-color: #F4ECEA;
    }
    html {
        overflow: scroll;
        overflow-x: hidden;
        }

        ::-webkit-scrollbar {
        width: 0;
        /* Remove scrollbar space */
        background: transparent;
        /* Optional: just make scrollbar invisible */
        }

        /* Optional: show position indicator in red */
        ::-webkit-scrollbar-thumb {
        background: #FF0000;
        }
        
 /*Navigation Bar*/
.top-nav {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-orient: horizontal;
  -webkit-box-direction: normal;
      -ms-flex-direction: row;
          flex-direction: row;
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
  -webkit-box-pack: justify;
      -ms-flex-pack: justify;
          justify-content: space-between;
  background-color: transparent;
  color: #FFF;
  height: 50px;
  padding: 1em;
  font-family: 'Raleway', sans-serif;
}

.top-nav img {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  margin: auto 0;
  margin-right: 0.5em;
  width: 110px;
  padding: 0.125em;
  height: 100%;
}

.menu {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-orient: horizontal;
  -webkit-box-direction: normal;
      -ms-flex-direction: row;
          flex-direction: row;
  list-style-type: none;
  padding: 0;
}

.menu a {
  margin: 50px;
}

@media screen and (min-width: 0px) and (max-width: 1000px) {
  .menu a {
    margin: 0px;
  }
}

.top-nav ul li a {
  position: relative;
  color: #8C5E52;
  font-size: 20px;
  padding: 5px 0;
}

.top-nav ul li a::before {
  position: absolute;
  content: '';
  left: 0;
  top: 10%;
  height: 3px;
  width: 100%;
  background: #8C5E52;
  -webkit-transform: scaleX(0);
          transform: scaleX(0);
  -webkit-transform-origin: right;
          transform-origin: right;
  -webkit-transition: -webkit-transform .4s linear;
  transition: -webkit-transform .4s linear;
  transition: transform .4s linear;
  transition: transform .4s linear, -webkit-transform .4s linear;
}

.top-nav ul li a:hover:before {
  -webkit-transform: scaleX(1);
          transform: scaleX(1);
  -webkit-transform-origin: left;
          transform-origin: left;
}

.dropdown {
  float: left;
  overflow: hidden;
  margin-right: 80px;
  margin-left: 40px;
}

@media screen and (min-width: 0px) and (max-width: 1000px) {
  .dropdown {
    margin-right: 25px;
  }
}

.dropdown .dropbtn {
  background-color: inherit;
  font-family: inherit;
  margin: 0;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #DCD7D4;
  min-width: 160px;
  -webkit-box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
          box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
  z-index: 5;
}

.dropdown-content a {
  float: none;
  text-decoration: none;
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
  text-align: center;
  -webkit-box-pack: center;
      -ms-flex-pack: center;
          justify-content: center;
}

.dropdown:hover .dropdown-content {
  display: block;
}

/*Hamburger Menu*/
.menu-button-container {
  display: none;
  height: 100%;
  width: 30px;
  cursor: pointer;
  -webkit-box-orient: vertical;
  -webkit-box-direction: normal;
      -ms-flex-direction: column;
          flex-direction: column;
  -webkit-box-pack: center;
      -ms-flex-pack: center;
          justify-content: center;
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
}

#menu-toggle {
  display: none;
}

/*Creation and the Animation of the menu button*/
.menu-button,
.menu-button::before,
.menu-button::after {
  display: block;
  background-color: #8C5E52;
  position: absolute;
  height: 4px;
  width: 30px;
  -webkit-transition: -webkit-transform 1000ms;
  transition: -webkit-transform 1000ms;
  transition: transform 1000ms;
  transition: transform 1000ms, -webkit-transform 1000ms;
  border-radius: 2px;
}

/*top line of hambruger icon*/
.menu-button::before {
  content: '';
  margin-top: -8px;
}

/*bottom line of hambruger icon*/
.menu-button::after {
  content: '';
  margin-top: 8px;
}

#menu-toggle:checked + .menu-button-container .menu-button::before {
  margin-top: 0px;
  -webkit-transform: rotateZ(45deg) scaleX(0.6) translate(1px, 9.5px);
          transform: rotateZ(45deg) scaleX(0.6) translate(1px, 9.5px);
}

#menu-toggle:checked + .menu-button-container .menu-button::after {
  margin-top: 0px;
  -webkit-transform: rotateZ(315deg) scaleX(0.6) translate(1px, -9.5px);
          transform: rotateZ(315deg) scaleX(0.6) translate(1px, -9.5px);
}

/*Animation of Hamburger Menu*/
@media screen and (min-width: 0px) and (max-width: 1000px) {
  .menu-button-container {
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
  }
  .menu {
    position: absolute;
    top: 0;
    margin-top: 50px;
    left: 0px;
    -webkit-box-orient: vertical;
    -webkit-box-direction: normal;
        -ms-flex-direction: column;
            flex-direction: column;
    width: 100%;
    -webkit-box-pack: center;
        -ms-flex-pack: center;
            justify-content: center;
    -webkit-box-align: center;
        -ms-flex-align: center;
            align-items: center;
    display: block;
    z-index: 5;
  }
  #menu-toggle ~ .menu li {
    height: 0;
    margin: 0;
    padding: 0;
    border: 0;
    margin-top: -80px;
    -webkit-transition: 700ms;
    transition: 700ms;
  }
  #menu-toggle:checked ~ .menu li {
    height: 2.5em;
    padding: 0.5em;
    -webkit-transition: 700ms;
    transition: 700ms;
    z-index: 2;
    margin-right: 0;
    margin-top: 0px;
    -webkit-box-pack: center;
        -ms-flex-pack: center;
            justify-content: center;
  }
  #menu-toggle:checked ~ .menu li a {
    margin-right: 0;
    -webkit-box-pack: center;
        -ms-flex-pack: center;
            justify-content: center;
  }
  .menu > li {
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-pack: center;
        -ms-flex-pack: center;
            justify-content: center;
    margin: 0;
    padding: 0.5em 0;
    width: 100%;
    color: #8C5E52;
    background-color: #433D41;
  }
}
    /*slide*/
  
    #slider{
        margin-top: 100px;
        height: 500px;
        display: flex;
        justify-content: center;
        align-items: center;
        background-repeat: no-repeat;
        background: linear-gradient(
            to top,
            #433D41 0%,
            #433D41 30%,
            #F4ECEA 30%,
            #F4ECEA 100%
        );
    }
  
    .container {
        width: 1600px;
        margin: auto;
    }
  
    .subcontainer {
        width: 65%;
        margin: auto;
    }
  
    .slide-img{
        width: 100%;
        height: 500px;
        border-radius: 5px;
        background-position: center;
        background-size: cover;
        display: flex;
        justify-content: center;
        align-items: center;
        transition: 0.5s;
        background-attachment: fixed;
    }
  
    .img-1{
        background-image: url(image/food5-show1.jpg);
    }
    .img-2{
        background-image: url(image/food5-show2.jpg);
    }
    .img-3{
        background-image: url(image/food5-show3.jpg);
    }
  
    @media screen and (min-width: 480px) and (max-width: 808px){
        .subcontainer {
            width: 90%;
        }
        .slide-img{
            height: 320px;
        }
    
    }
    @media(max-width:1600px){
        .container{
            width: 100%;
        }
    }
  
    .box{
        text-align: center;
        padding: 50px;
        font-size: 30px;
        letter-spacing: 20px;
        background-color: #433D41;
        color: #F4ECEA;
    }
    #letter {
        padding-bottom: 10px;
    }
  
    .location{
        display: flex;
        flex-wrap: wrap;
        justify-content: space-around;
        justify-items: center;
        padding-top: 100px;
        padding-bottom: 100px;
        border-color: #433D41;
        border-style: solid;
        border-width: 10px 10px 0 10px;
    }
    #state {
        height: 100%;
        margin-top: 150px;
    }
  
    .about{
        height: 300vh;
        display: flex;
    }
    .about-title{
        width: 50%;
        height: 100vh;
        display: flex;
        justify-content: center;
        align-items: center;
        font-size: 30px;
        margin: 0 !important;
        text-align: center;
        background-color: #DCD7D4;
    }
    .about-pages{
        width: 50%;
    }
  
    .about-pages div{
        height: 100vh;
        display: flex;
        flex-direction: column;
        justify-content: space-around;
        align-items: center;
    }
  
    .about-pages div > p {
        width: 80%;
        font-size: 18px;
        line-height: 30px;
    }
    .image-parallax{
        height:370px;
        width: 513px;
    }
    .about-pages div:nth-child(1){
        background-color: #433D41;
        color: #F4ECEA;
    }
    .about-pages div:nth-child(2){
        background-color: #B1A39A;
        color: #F4ECEA;
    }
    .about-pages div:nth-child(3){
        background-color: #F4ECEA;
        color: #433D41;
    }
  
    @media screen and (min-width: 480px) and (max-width: 700px){
        .image-parallax{
            width: 80%;
            height: 30%;
        }
    }
    @media screen and (min-width: 701px) and (max-width: 1100px){
        .image-parallax{
            width: 80%;
            height: 50%;
        }
    }

    /*Input*/
    .review{
        padding-top: 150px;
        background-color: #B1A39A;
        color: #F4ECEA;
        height: 100%;
        padding-bottom: 50px;
    }
    .input{
        text-align: center;
        background-color: #433D41;
        height: 550px;
        margin: 0 100px 0 100px;
        border-radius: 10px;
    }
    .em{
        margin-top:30px;
        font-weight:bold;
        letter-spacing: 10px;
    }
    input[type=email], select {
        width: 500px;
        padding: 12px 20px;
        margin: 8px 0;
        display: inline-block;
        border: 1px solid #ccc;
        border-radius: 4px;
        box-sizing: border-box;
    }
    .radio-toolbar input[type=radio]{
        opacity: 0;
        position: fixed;
        width: 0;
    }
    .radio-toolbar label{
        display: inline-block;
        background-color: #ddd;
        padding: 10px 20px;
        font-family: sans-serif, Arial;
        font-size: 16px;
        border: 2px solid #433D41;
        border-radius: 4px;
    }
    .radio-toolbar label:hover {
        background-color: #B1A39A;
    }

    .radio-toolbar input[type="radio"]:focus + label {
        border: 2px solid #F4ECEA;
    }

    .radio-toolbar input[type="radio"]:checked + label {
        background-color: #433D41;
        border-color: #F4ECEA;
    }
    input[type=submit] {
        width: 500px;
        background-color: #F4ECEA;
        color: #433D41;
        padding: 14px 20px;
        margin: 8px 0;
        border: none;
        border-radius: 4px;
        cursor: pointer;
    }
    #Title-review{
        padding-top: 50px;
        font-size: 40px;
        font-style: italic;
        margin-left: 50px;
        letter-spacing: 10px;
    }
    .exp{
        margin-top: 20px;
        font-weight:bold;
        letter-spacing: 10px;
    }
    #icon{
        color: #B9974D;
    }
    #comments{
        padding: 10px;
    }
    @media screen and (min-width: 480px) and (max-width: 800px){
        .input{
            width: 100%;
            margin: 0 0 0 0;
            height: 650px;
        }
        input[type=email], select {
            width: 400px;
        }
        input[type=submit] {
            width: 400px
        }
        #comments{
            width:30em;
        }
    }
    /*Output*/
    .outputs{
        margin: 70px;
    }
    .container-single{
        padding: 20px;
        margin: 50px;
        background-color: #F4ECEA;
        color:#433D41;
        border-radius: 10px;
    }
    .profile {
        display: flex;
        font-weight: bold;
        align-items: center;
    }
    #prof{
        border-radius: 50%;
        height: 30px;
        width: 30px;
        margin-right:20px;
    }
    .coms{
        margin-top:20px;
        margin-left: 50px;
    }
    .nores{
        text-align: center;
        font-weight: bold;
    }
    @media screen and (min-width: 480px) and (max-width: 800px){
        .outputs{
            margin: 0;
        }
        .container-single{
            margin-left:5px;
            margin-right:5px;
            margin-top: 20px;
            margin-bottom:20px;
        }
        .coms{
            margin-left: 0;
        }
    }
    footer {
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        background-color: #433D41;
        height: 100px;
        width: 100%;
        text-align: center;
        -webkit-box-pack: center;
            -ms-flex-pack: center;
                justify-content: center;
        -webkit-box-align: center;
            -ms-flex-align: center;
                align-items: center;
        font-size: 30px;
        color: #DCD7D4;
        font-weight: bold;
        letter-spacing: 18px;
    }
    </style>
</head>
<body>
  <!--Navigation Bar-->
  <section class="top-nav">
            <div>
               <a href="../../index.html"><img src="image/-1 (1).png" /></a> 
            </div>
            <input id="menu-toggle" type="checkbox" />
            <label class='menu-button-container' for="menu-toggle">
                <div class='menu-button'></div><!--This will be the Hamburger Icon-->
            </label>
            <ul class="menu">
                <li><a href="../../index.html">Main</a></li>
                <li><a href="../nav/Emirates.html">Emirates</a></li>
                <li><a href="../nav/Activity Page.html" class="dropbtn">Activities </a></li>
                <li><div class="dropdown">
                    <a href="../nav/travelguide.html" class="dropbtn">Travel Guide 
                      <i class="fa fa-caret-down"></i>
                    </a>
                    <div class="dropdown-content">
                        <a href="../nav/booking.html">Booking</a>
                        <a href="../nav/about uae.html">UAE History</a>
                        <a href="../nav/events.html">Events</a>
                    </div></li>
            </ul>
        </section>


    <!--Slider-->
    <section id="slider">
        <div class="container">
            <div class="subcontainer">
                <div class="slider-wrapper">
                    <div class="my-slider">
                        <div>
                            <div class="slide">
                                <div class="slide-img img-1">
                                </div>
                            </div>
                        </div>
                        <div>
                            <div class="slide">
                                <div class="slide-img img-2">
                                </div>
                            </div>
                        </div>
                        <div>
                            <div class="slide">
                                <div class="slide-img img-3">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="box">
        <h1 id="letter">Shakespeare and Co.</h1>
    </div>

    <section class="location">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d230836.79300072053!2d55.24710664123928!3d25.310086714748387!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3e5f5be91aa7b5b9%3A0x4ba4282c38cc0569!2sShakespeare%20and%20Co.!5e0!3m2!1sen!2sae!4v1654174209272!5m2!1sen!2sae" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        <img id = "state"src="image/shar.png">
    </section>
    
    <section class="about">
        <div class="about-title">
            <h2>The Activity</h2>
        </div>
        <div class="about-pages">
            <div>
                <img class ="image-parallax" src="image/food5-des1.jpg">
                <p>Making food by yourself is not always a viable option. However, this can be easily mitigated by using restaurants, cafes and other similar establishments. Shakespeare and Co. (Café Restaurant – Pâtisserie – Chocolates – Catering) (rated 4.3 on NiceLocal) works as confectionery shop serves French food. Learn its list of dishes and experience the overall atmosphere by giving a visit to this place in person. </p>
            </div>
            <div>
                <img class ="image-parallax" src="image/food5-des2.jpg">
                <p>Are you or your relatives organizing a populous and long event like a corporate or wedding party? That requires taking care of the obvious hunger issue, among many other things. Shakespeare and Co.</p>
            </div>
            <div>
                <img class ="image-parallax" src="image/food5-des3.jpg">
                <p>The intimate atmosphere of Shakespeare and Co allows visitors to relax after a hard working day. The staff is said to be good here. Prompt service is a strong point that plays a great role for the success of this place. </p>
            </div>
        </div>
    </section>

    <section class="review">
        <div class="input">
        <h1 id="Title-review">Submit Experience</h1>

        <form method="post" action="./php/food5.php">
            <div class="em">
                <label for="email">Email:</label>
                <br>
                <input type="email" id="email" name="email" placeholder="Enter Your Email" required><br>
            </div>
            <div class="radio-toolbar"s>
                <input type="radio" id="1-star" name="rating" value="1">
                <label for="1-star"><i id="icon"class="fa-solid fa-star"></i></label>
                <input type="radio" id="2-star" name="rating" value="2">
                <label for="2-star"><i id="icon" id="icon"class="fa-solid fa-star"></i><i id="icon" class="fa-solid fa-star"></i></label>
                <input type="radio" id="3-star" name="rating" value="3">
                <label for="3-star"><i id="icon" class="fa-solid fa-star"></i><i id="icon"class="fa-solid fa-star"></i><i id="icon" class="fa-solid fa-star"></i></label>
                <input type="radio" id="4-star" name="rating" value="4">
                <label for="4-star"><i id="icon" class="fa-solid fa-star"></i><i id="icon"class="fa-solid fa-star"></i><i id="icon" class="fa-solid fa-star"></i><i id="icon" class="fa-solid fa-star"></i></label>
                <input type="radio" id="5-star" name="rating" value="5">
                <label for="5-star"><i id="icon" class="fa-solid fa-star"></i><i id="icon"class="fa-solid fa-star"></i><i id="icon" class="fa-solid fa-star"></i><i id="icon" class="fa-solid fa-star"></i><i id="icon" class="fa-solid fa-star"></i></label>
            </div>
            <div class="exp">
                <label for="comments" >Enter Your Experience:</label><br>
                <textarea name="comments" id="comments" rows="10" cols="70"></textarea>
            </div>
            <input name="submit_1" type="submit" value="Submit">
        </form>
      </div>
    
      <div class="outputs">
        <?php
                include_once './php/db.php';
                $result = mysqli_query($conn,"SELECT * FROM feedback");
            // $row = mysqli_fetch_array($result);
                if (mysqli_num_rows($result) > 0) {
                    $i=0;
                    while($row = mysqli_fetch_array($result)) { 
            ?>
            <div class="container-single">
                <div class="profile">
                    <img id="prof" src="image/prof2.png">
                    <?php echo $row["email"]; ?>
                    &nbsp; &nbsp;
                    <p><i id="icon"class="fa-solid fa-star"></i>&nbsp;-&nbsp;&nbsp;<p>
                    <?php echo $row["rating"]; ?>
                    &nbsp; &nbsp; <br>
                </div>
                <div class="coms">
                <?php echo $row["comments"]; ?>
                    &nbsp; &nbsp;
                    <br>
                </div>
            </div>
            <?php
                $i++;
                }
            }
                else{
                     echo "No result found";
                }
            ?>
            </div>
        </div>
    </section>

    <footer>YURS 2022</footer>
    <script 
    src="https://cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.6/ScrollMagic.min.js">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.6/plugins/debug.addIndicators.min.js"></script>
    <script src="app.js"></script>
    <script src="SelAct.js"></script>
</body>
</html>