
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Restaurant</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" referrerpolicy="no-referrer" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    
</head>
<body>

    <header id="header">
        <nav>
            <ul>
                <li><a href="#home">Home</a></li>
                <li><a href="#special">Special</a></li>
                <li><a href="#about">About Us</a></li>
                <li><a href="#dish">Dishes</a></li>
                <li><a href="#contact">Book Table</a></li>
            </ul>
        </nav>
        
<div class="fas fa-hamburger"></div>
        
<a href="#" class="logo"><img src="images/logo.png" alt=""></a>
   
    </header>

<section id= "home" class="container-fluid">
    
    <div class="row min-vh-100 align-items-center">
        <div class="col-md-8 m1-md-5 text-md-left text-center content">
            <h1>Unique <span> view,table,food</span></h1><br><br>
            <h2>enjoy your day!</h2>
            <p>You are expected at the newest and most private restaurant on the 9th floor.</p><br><br>
            <a href="#contact"><button>book now</button></a>
        </div>
        
        
        <div class="video-container">
        <video src="images/restaurant.MP4" autoplay loop class="vid vid1"></video>
        </div>
        
    </div>
    
</section>


<section id="special" class="container-fluid">
    
    <div class="heading text-center">
        <h1>Our <span>special</span></h1>
        <p>Lorem ipsum dolor sit amet.</p>
    </div>
    
    <div class="card-container">
       
        <div class="card 1">
            <img src="images/eggs.jpg" alt="">
            <p><b>Eggs & Avocado</b><br>Sounds good?</p>
            <a href="#contact"><button>book&eat now</button></a>
        </div>
        
        <div class="card 2">
            <img src="images/quesadilla.jpg" alt="">
           <p><b>Quesadilla</b><br>Sounds good?</p>
            <a href="#contact"><button>book&eat now</button></a>
        </div>
        
        <div class="card 3">
            <img src="images/pasta.jpg" alt="">
            <p><b>pasta arabiatta</b><br>Sounds good?</p>
            <a href="#contact"><button>book&eat now</button></a>
        </div>
    </div>
    
</section>


<section id="about" class="container">
       
     <div class="heading text-center">
        <h1><span>about </span>us</h1>
    </div>
    
    <div class="row">
        <div class="row min-vh-100">
            <div class="col-md-6 text-center text-md-left align-self-center content">
               <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quae quia facere, aspernatur porro quas fuga culpa, beatae sed illo neque consequuntur quos voluptatum? Soluta tempora blanditiis, quisquam tempore quam delectus.</p> 
               <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Error velit perferendis possimus incidunt quaerat repudiandae assumenda obcaecati praesentium, iusto nisi qui voluptatum dolore nesciunt laboriosam ducimus, distinctio adipisci. Sequi, asperiores.</p>
               <a href="#contact"><button>book now</button></a>
            </div>
            
            <div class="col-md-6 image">
                <img src="images/aboutus.jpg" alt="">
            </div>
        </div>
    </div>
    
    
</section>


<section id="dish" class="container">
    <div class="heading text-center">
        <h1>our <span>dishes</span></h1>
    </div>
    
    <div class="box-container">
       
        <div class="box">
            <img src="images/dish1.jpg" alt="">
            <div class="info">
                <h3>pizza margherita</h3>
                <p>Basil, mozzarela, tomato</p>
               
            </div>
        </div>
        
        <div class="box">
            <img src="images/dish2.jpg" alt="">
            <div class="info">
                <h3>crispy chicken</h3>
                <p>with garlic sauce</p>

            </div>
        </div>
        
        
        <div class="box">
            <img src="images/dish3.jpg" alt="">
            <div class="info">
                <h3>Pasta salad</h3>
                <p>Lorem ipsum dolor sit amet</p>
        
            </div>
        </div>
        
        <div class="box">
            <img src="images/dish4.jpg" alt="">
            <div class="info">
                <h3>somon&vegetables</h3>
                <p>Lorem ipsum dolor sit amet</p>
              
            </div>
        </div>
        
        <div class="box">
            <img src="images/dish5.jpg" alt="">
            <div class="info">
                <h3>Crispy fries</h3>
                <p>with aioli sauce</p>
              
            </div>
        </div>
        
        <div class="box">
            <img src="images/dish6.jpg" alt="">
            <div class="info">
                <h3>sushi</h3>
                <p>Lorem ipsum dolor sit amet</p>
             
            </div>
        </div>
        
        <div class="box">
            <img src="images/dish7.jpg" alt="">
            <div class="info">
                <h3>beaf burger</h3>
                <p>Lorem ipsum dolor sit amet</p>
              
            </div>
        </div>
        
        <div class="box">
            <img src="images/dish8.jpg" alt="">
            <div class="info">
                <h3>home speciality</h3>
                <p>Lorem ipsum dolor sit amet</p>
               
            </div>
        </div>
        
        <div class="box">
            <img src="images/dish9.jpg" alt="">
            <div class="info">
                <h3>lasagna</h3>
                <p>Lorem ipsum dolor sit amet</p>
              
            </div>
        </div>
        
    </div>
    
</section>


<section id="contact" class="container-fluid">
    
     <div class="heading text-center">
        <h1><span>book</span> table</h1>
    </div>
    
   
     <?php
function build_calendar($month, $year) {
    $mysqli = new mysqli('localhost', 'root', '', 'bookingcalendar');
    $stmt = $mysqli->prepare("select * from bookings where MONTH(date) = ? AND YEAR(date) = ?");
    $stmt->bind_param('ss', $month, $year);
    $bookings = array();
    if($stmt->execute()){
        $result = $stmt->get_result();
        if($result->num_rows>0){
            while($row = $result->fetch_assoc()){
                $bookings[] = $row['date'];
            }
            
            $stmt->close();
        }
    }
    
    
    
     $daysOfWeek = array('Sunday','Monday','Tuesday','Wednesday','Thursday','Friday','Saturday');

     // prima zi a unei luni
     $firstDayOfMonth = mktime(0,0,0,$month,1,$year);

     // cate zile are o luna
     $numberDays = date('t',$firstDayOfMonth);


     $dateComponents = getdate($firstDayOfMonth);

     // numele lunii
     $monthName = $dateComponents['month'];

     // indexul primei zile a unei luni
     $dayOfWeek = $dateComponents['wday'];


     
    $datetoday = date('Y-m-d');
    
    
    
    $calendar = "<table class='table table-bordered'>";
    $calendar .= "<center><h2>$monthName $year</h2>";
    $calendar.= "<a class='btn btn-xs btn-primary' href='?month=".date('m', mktime(0, 0, 0, $month-1, 1, $year))."&year=".date('Y', mktime(0, 0, 0, $month-1, 1, $year))."'>Previous Month</a> ";
    
    $calendar.= " <a class='btn btn-xs btn-primary' href='?month=".date('m')."&year=".date('Y')."'>Current Month</a> ";
    
    $calendar.= "<a class='btn btn-xs btn-primary' href='?month=".date('m', mktime(0, 0, 0, $month+1, 1, $year))."&year=".date('Y', mktime(0, 0, 0, $month+1, 1, $year))."'>Next Month</a></center><br>";
    
    
        
      $calendar .= "<tr>";



     foreach($daysOfWeek as $day) {
          $calendar .= "<th  class='header'>$day</th>";
     } 



     $currentDay = 1;

     $calendar .= "</tr><tr>";



     if ($dayOfWeek > 0) { 
         for($k=0;$k<$dayOfWeek;$k++){
                $calendar .= "<td  class='empty'></td>"; 

         }
     }
    
     
     $month = str_pad($month, 2, "0", STR_PAD_LEFT);
  
     while ($currentDay <= $numberDays) {

         

          if ($dayOfWeek == 7) {

               $dayOfWeek = 0;
               $calendar .= "</tr><tr>";

          }
          
          $currentDayRel = str_pad($currentDay, 2, "0", STR_PAD_LEFT);
          $date = "$year-$month-$currentDayRel";
          
            $dayname = strtolower(date('l', strtotime($date)));
            $eventNum = 0;
            $today = $date==date('Y-m-d')? "today" : "";
         if($date<date('Y-m-d')){
             $calendar.="<td><h4>$currentDay</h4> <button class='btn btn-danger btn-xs'>N/A</button>";
         }else if(in_array($date, $bookings)){
             $calendar.="<td class='$today'><h4>$currentDay</h4> <button class='btn btn-danger btn-xs'>Already Booked</button>";
         }else{
             $calendar.="<td class='$today'><h4>$currentDay</h4> <a href='book1.php?date=".$date."' class='btn btn-success btn-xs'>Book</a>";
         }
            
 
          $calendar .="</td>";
      
 
          $currentDay++;
          $dayOfWeek++;

     }
     
     


     if ($dayOfWeek != 7) { 
     
          $remainingDays = 7 - $dayOfWeek;
            for($l=0;$l<$remainingDays;$l++){
                $calendar .= "<td class='empty'></td>"; 

         }

     }
     
     $calendar .= "</tr>";

     $calendar .= "</table>";

     echo $calendar;

}
    
?>

            
            
                <style>

       @media only screen and (max-width: 760px),
        (min-device-width: 802px) and (max-device-width: 1020px) {

            table, thead, tbody, th, td, tr {
                display: block;

            }
            
            

            .empty {
                display: none;
            }


            th {
                position: absolute;
                top: -9999px;
                left: -9999px;
      
                
            }

            tr {
                border: 1px solid #ccc;
       
            }

            td {

                border: none;
                border-bottom: 1px solid #eee;
                position: relative;
                padding-left: 50%;
                color: white;
            }


            td:nth-of-type(1):before {
                content: "Sunday";
                color: white;
            }
            td:nth-of-type(2):before {
                content: "Monday";
                color: white;
            }
            td:nth-of-type(3):before {
                content: "Tuesday";
                color: white;
            }
            td:nth-of-type(4):before {
                content: "Wednesday";
                color: white;
            }
            td:nth-of-type(5):before {
                content: "Thursday";
                color: white;
            }
            td:nth-of-type(6):before {
                content: "Friday";
                color: white;
            }
            td:nth-of-type(7):before {
                content: "Saturday";
                color: white;
            }


        }

        /* Smartphones (portrait and landscape) */ 
        @media only screen and (min-device-width: 320px) and (max-device-width: 480px) {
            body {
                padding: 0;
                margin: 0;
            }
        }

        /* iPads (portrait and landscape) */
        @media only screen and (min-device-width: 802px) and (max-device-width: 1020px) {
            body {
                width: 495px;
            }
        }

        @media (min-width:641px) {
            table {
                table-layout: fixed;
            }
            td {
                width: 33%;
                color: white;
            }
        }
        
        .row{
            margin-top: 20px;
            color: white;
        }
        
        .today{
            background:yellow;
        }
        
        
        
    </style>
            
     <section id="booking" class="container">

        <div class="row">
            
        
            <div class="col-md-12">
                <?php
                     $dateComponents = getdate();
                     if(isset($_GET['month']) && isset($_GET['year'])){
                         $month = $_GET['month']; 			     
                         $year = $_GET['year'];
                     }else{
                         $month = $dateComponents['mon']; 			     
                         $year = $dateComponents['year'];
                     }
                    echo build_calendar($month,$year);
                ?>
            </div>
         </div>
         
         
    </section>
    

<section id="footer" class="container-fluid">
   
    <div class="row align-items-center">
           
                <div class="col-md-4 brand">
                    
                    <a href="#" class="logo"><img src="images/logo.png" alt=""></a>
                    
                    <div class="icons">
                        <a href="#" class="fab fa-facebook-square"></a>
                        <a href="#" class="fab fa-instagram-square"></a>
                    
                    </div>
                    
                </div>   
                
                  <div class="col-md-4 footer-links">
                      
                      
                      <h3>links:</h3>
                      <a href="#home">Home</a>
                      <a href="#special">special</a>
                      <a href="#about">about</a>
                      <a href="#dish">dish</a>
                      <a href="#contact">contact</a>
                  </div>  
                  
                  <div class="col-md-4 text-center text-md-left letter">
                      <h2>newsletter</h2>
                      <input type="text"><br>
                      <input type="submit" value="subscribe">
                  </div>
    </div>
    
    <h1>&copy; copyright @ 2021 by <span>Andreea Sandulescu</span></h1>
    
</section>



<script>

    $(document).ready(function(){
        $('.fa-hamburger').click(function(){
            $(this).toggleClass('fa-times'); //daca apesi pe hamburger apare x ("close")
            $('nav').toggleClass('nav-toggle'); // se deschide meniul de pe hamburger
    });
        
        $('nav ul li a').click(function(){   //cand apesi se ceva din meniu se inchide fereastra
            $('.fa-hamburger').removeClass('fa-times'); 
            $('nav').removeClass('nav-toggle');
        });
        
         $(window).on('scroll load',function(){  //cand trece de pagina princ cu (videoclipul) apare bara de navigare
        if($(window).scrollTop() > 10){
            $('#header').addClass('header-active');
        }else{
            $('#header').removeClass('header-active');
        }
             
         });
});
    
</script>


</body>
</html>