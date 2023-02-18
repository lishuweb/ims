<style>
<?php session_start(); include 'css/style1.css'; ?>
<?php include 'css/footer.css'; ?>
</style>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
	<!-- <link rel="stylesheet" href="css/style1.css"> -->
	<link rel="stylesheet" type="text/css" href="css/all.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"/>
	<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- Linking the Jquery script -->
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>

    <!-- <script>
        $(document).ready(function() {
            $(".fa-search").click(function() {
                $(".icon").toggleClass("active");
                $("input[type='text']").toggleClass("active");
            });
        });
    </script> -->
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
</head>
<body>
	
	<div class="nav_bar">

        <div class="logo">
            <a href="home.php"><img src="image/logo.png"></a>
        </div>

        <ul class="navlist"> 
            <li class="navlistitem"><a class="active" href="home.php">Home</a></li>
            <li class="navlistitem"><a href="product.php">Products</a></li>
            <li class="navlistitem"><a href="aboutus.php">About Us</a></li>
            <li class="navlistitem"><a href="contact.php">Contact</a></li>
        </ul>

        <div class="but">
            <?php
            if(isset($_SESSION['username']))
            {
                ?>
                    <a href="layout/logout.php">Log Out</a>
                <?php
            }
            else
            {
                ?>
                    <a href="layout/login.php">Log In</a>

                <?php
            }
            ?>
        </div>

    </div>


    <div class="slider">
        <div class="slides">
            <!--radio buttons start-->
            <input type="radio" name="radio-btn" id="radio1">
            <input type="radio" name="radio-btn" id="radio2">
            <input type="radio" name="radio-btn" id="radio3">
            <input type="radio" name="radio-btn" id="radio4">
            <!--radio buttons end-->

            <!--slide images start-->
            <div class="slide first">
                <img src="image/1.jpg" alt="">
                <h2>Simple & Modern</h2>
                <h1>Furniture</h1>
                <p>| Now Available |</p>
            </div>
            <div class="slide">
                <img src="image/cupboard1.jfif" alt="">
                <div class="bx">
                    <h5>"Art<br>Happens<br>Here."</h5>
                    <p>- Store<br>
                       - Optimize
                   </p> 
               </div>
           </div>
           <div class="slide">
            <img src="image/SS2.jpg" alt="">
            <div class="bx2">
                <p>
                    - Sleep<br>
                    - Rest<br>
                    - Relax<br>
                </p>
            </div>
        </div>
        <div class="slide">
            <img src="image/ss3.jpg" alt="">
            <div class="bx1">
                <p>- Comfort<br>
                   - Support<br>
                   - Light 
               </p>
           </div>
       </div>
       <!--slide images end-->

       <!--automatic navigation start-->
       <div class="navigation-auto">
          <div class="auto-btn1"></div>
          <div class="auto-btn2"></div>
          <div class="auto-btn3"></div>
          <div class="auto-btn4"></div>
      </div>
      <!--automatic navigation end-->
  </div>

  <!--manual navigation start-->
  <div class="navigation-manual">
    <label for="radio1" class="manual-btn"></label>
    <label for="radio2" class="manual-btn"></label>
    <label for="radio3" class="manual-btn"></label>
    <label for="radio4" class="manual-btn"></label>
</div>
<!--manual navigation end-->
</div>
<!--image slider end-->

<script type="text/javascript">
    var counter = 1;
    setInterval(function(){
      document.getElementById('radio' + counter).checked = true;
      counter++;
      if(counter > 4){
        counter = 1;
    }
}, 5000);
</script>


<div class="furniture">

  <h1>Explore Our Furniture Range</h1>

  <div class="items">

   <div class="box1">
    <a href="bed.php"><img src="image/bed.jpg"></a>
    <p>Beds</p>
</div>	

<div class="box2">
    <a href="mattress.php"><img src="image/mattress.jpg"></a>
    <p>Mattresses</p>
</div>

<div class="box3">
    <a href="sofa.php"><img src="image/sofa.png"></a>
    <p>Sofas</p>
</div>

<div class="box4">
    <a href="cupboard.php"><img src="image/cupboard.jpg"></a>
    <p>Cupboards</p>
</div>

</div>

</div> 

<div class="thumbnail-slider">
    <h1>Our Products</h1>
    <div class="thumbnail-container">
        <div class="item">
            <a href="sofa.php"><img src="image/1.jpg"></a>
        </div>
        <div class="item">
            <a href="bed.php"><img src="image/bed12.jpg"></a>
        </div>
        <div class="item">
            <a href="sofa.php"><img src="image/sofa1.jpg"></a>
        </div>
        <div class="item">
            <a href="bed.php"><img src="image/plz.jpg"></a>
        </div>
        <div class="item">
            <a href="sofa.php"><img src="image/ls1.jpg"></a>
        </div>

    </div>

    <!-- controls slides -->
    <div class="controls">
    </div>

</div>


<script type="text/javascript">
  const controls=document.querySelector(".controls");
  const container=document.querySelector(".thumbnail-container");
  const allBox=container.children;
  const containerWidth=container.offsetWidth;
  const margin=30;
  var items=0;
  var totalItems=0;
  var jumpSlideWidth=0;


  // item setup per slide

  responsive=[
  {breakPoint:{width:0,item:1}}, //if width greater than 0 (1 item will show) 
  {breakPoint:{width:600,item:2}}, //if width greater than 600 (2  item will show) 
  {breakPoint:{width:1000,item:4}} //if width greater than 1000 (4 item will show) 
  ]

  function load(){
     for(let i=0; i<responsive.length;i++){
        if(window.innerWidth>responsive[i].breakPoint.width){
            items=responsive[i].breakPoint.item
        }
    }
    start();
}

function start(){
 var totalItemsWidth=0
 for(let i=0;i<allBox.length;i++){
         // width and margin setup of items
         allBox[i].style.width=(containerWidth/items)-margin + "px";
         allBox[i].style.margin=(margin/2)+ "px";
         totalItemsWidth+=containerWidth/items;
         totalItems++;
     }

    // thumbnail-container width set up
    container.style.width=totalItemsWidth + "px";

    // slides controls number set up
    const allSlides=Math.ceil(totalItems/items);
    const ul=document.createElement("ul");
    for(let i=1;i<=allSlides;i++){
      const li=document.createElement("li");
      li.id=i;
      li.innerHTML=i;
      li.setAttribute("onclick","controlSlides(this)");
      ul.appendChild(li);
      if(i==1){
        li.className="active";
    }
}
controls.appendChild(ul);
}

    // when click on numbers slide to next slide
    function controlSlides(ele){
       // select controls children  'ul' element 
       const ul=controls.children;

       // select ul children 'li' elements;
       const li=ul[0].children

       
       var active;

       for(let i=0;i<li.length;i++){
        if(li[i].className=="active"){
            // find who is now active
            active=i;
            // remove active class from all 'li' elements
            li[i].className="";
        }
    }
       // add active class to current slide
       ele.className="active";

       var numb=(ele.id-1)-active;
       jumpSlideWidth=jumpSlideWidth+(containerWidth*numb);
       container.style.marginLeft=-jumpSlideWidth + "px";
   }

   window.onload=load();
</script>


<div class="wrapper">
    <div class="cus">
        <h1>Customer's Review</h1>
    </div>
    <div class="box">
        <i class="fas fa-quote-left quote"></i>
        <p>So far, every piece of furniture I've bought has been of high quality. Both its price and quality are reasonable.</p>
        <div class="content">
            <div class="info">
                <div class="name">Mina Mina</div>
            </div>
            <div class="image">
                <img src="image/boy.png" alt="">
            </div>
        </div>
    </div>

    <div class="box">
        <i class="fas fa-quote-left quote"></i>
        <p>The things are all nicely supplied. I'm glad I made a buy from them. Additionally, the staff was really welcoming.</p>
        <div class="content">
            <div class="info">
                <div class="name">Shinomiya ya</div>
            </div>
            <div class="image">
              <img src="image/girl.png" alt="">
            </div>
        </div>
    </div>

    <div class="box">
        <i class="fas fa-quote-left  quote"></i>
        <p>We purchased so many products from Lishu Furniture and we would recommend Lishu Furniture to everyone who needs quality and decent looking furniture.</p>
        <div class="content">
            <div class="info">
                <div class="name">Lany Lany</div>
            </div>
            <div class="image">
                <img src="image/boy.png" alt="">
            </div>
        </div>
    </div>
</div>


<div class="footer">
    <div class="details1">
        <div class="ig">
            <a href="home.php"><img src="image/logo.png"></a>
        </div>
        <div class="define">
            <p> For more than 20 years, the company has been supplying high-quality furniture made in India, China, and Nepal, including beds, mattresses, closets, sofas, and much more. In addition, the group takes orders for furniture made in their own factory.</p>
        </div>
    </div>
    <div class="details2">
        <div class="txt1">
            <p>Links</p>
        </div>
        <div class="define1">
            <a href="home.php">Home</a><br>
            <a href="product.php">Product</a><br>
            <a href="aboutus.php">About Us</a><br>
            <a href="contact.php">Contact Us</a><br>
            <a href="layout/login.php">Login</a>
        </div>
    </div>
    <div class="details3">
        <div class="txt2">
            <p>Location</p>
        </div>
        <div class="define2">
            <p>
                Kalimati, Kathmandu (Opposite to Prabhu Bank)<br>
                Nepal<br>
                <i class="fa-solid fa-envelope"></i>furniture@gmail.com
            </p>
        </div>
        <div class="sm">
            <a href="https://www.facebook.com/"><i class="fa-brands fa-facebook"></i></a>
            <a href="https://www.instagram.com/"><i class="fa-brands fa-instagram"></i></a>
            <a href="https://twitter.com/"><i class="fa-brands fa-twitter"></i></a>
            <a href="https://accounts.google.com/ServiceLogin/signinchooser?service=mail&passive=1209600&osid=1&continue=https%3A%2F%2Fmail.google.com%2Fmail%2Fu%2F0%2F&followup=https%3A%2F%2Fmail.google.com%2Fmail%2Fu%2F0%2F&emr=1&flowName=GlifWebSignIn&flowEntry=ServiceLogin"><i class="fa-solid fa-envelope"></i></a>
        </div>
    </div>
</div>

<div class="right">
    <p><i class="fa-solid fa-copyright"></i> Copyright. All rights reserved.</p>
</div>

</body>
</html>