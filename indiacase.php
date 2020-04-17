<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home - India Covid19 Case </title>
    <?php include'links.php'  ?>
    
</head>
<body onload="fetch()">
<!--Menu Bar-->

<header>
    <a href="#" > <img class="logo" src="files/logo-eraser.png" alt=""></a>
    <div class="menu-bar"></div>
    <nav>
        <ul>
        
            <li><a href="#" class="active">Home</a></li>
            <li><a href="about.php">About</a></li>
            <li><a href="dailycase.php">Daily Cases</a></li>
            <li><a href="worldcase.php"> World Cases </a></li>
            <li><a href="contact.php">Contact</a></li>
        </ul>
    
    </nav>
    <div class="clearfix">
    </div>
</header>
<section class="text-center">
    <div class="mb-3  card bg-dark text-white text-uppercase text-center">
        
        <h2 class="card-body">India COVID19 Cases</h2>
    
    </div>

 
    <div class="d-flex justify-content-around cases text-uppercase align-items-center">
        <div class="text-danger totalcase" >
            <h4>Confirm</h4>
            <span style="color:black;">+691</span><p>14,123</p>
        </div>
        <div class="text-primary totalcase">
            <h4>Active</h4>
            <p>11,673</p>
        </div>
        <div class="text-success totalcase">
            <h4>Recovered</h4>
            <span style="color:black;">+208</span><p>1,976</p>
        </div>
        <div class="text-secondary totalcase">
            <h4>Deaths</h4>
            <span style="color:black;">+26</span><p>474</p>
        </div>
    </div>
</section>
<main>


<section  class="container-fluid">



    <div class="table-responsive  text-center">
    
        <table class="table table-bordered table-striped text-center" id="tbval">
        <tr style="color:blue;" class="table-dark  table-hover">
            <th>Last Update Time</th>
            <th>States</th>
            <th>Total Confimed</th>
            <th>Total Active</th>
            <th>Total Recovered</th>
            <th>Total Deaths</th>
            
        </tr>
        
<!---->
        </table>

    </div>


</main>


<footer>

<section class="footer">
     <p class="text">This Website Created by Rajib Sadhu</p>
     <ul>
         <p class="text">Follow me on</p>
         <li><a href="https://www.facebook.com/rajib.sadhu.99/" target="blank"><img src="files/facebook.png"></a></li>
         <li><a href="https://twitter.com/rajib_sadhu"  target="blank"><img src="files/twitter.png"></a></li>
         
     </ul>
 </section>



<!--

<div class="jumbotron text-center" style="margin-bottom:0">
  <p>This Website Create By Rajib Sadhu</p>
</div> -->
</footer>





<script src="https://code.jquery.com/jquery-3.4.1.js"
  integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU="
  crossorigin="anonymous"></script>
<script>
    $(document).ready(function()
    {
        $('.menu-bar').click(function(){
            $('.menu-bar').toggleClass('active')
            $('nav').toggleClass('active')
        });
    });

 





    function fetch()
    {
        $.get("https://api.covid19india.org/data.json", 
        
            function(data)
            {
               //console.log(data['statewise'].length);
              var tbval = document.getElementById('tbval');

              for(var i=1; i<(data['statewise'].length); i++)
              {
                  var x = tbval.insertRow();
                  x.insertCell(0);

                  tbval.rows[i].cells[0].innerHTML = data['statewise'][i]['lastupdatedtime'];
                  tbval.rows[i].cells[0].style.background ='rgb(120, 74, 173)';
                  tbval.rows[i].cells[0].style.color ='#fff';
              

                  x.insertCell(1);
                  tbval.rows[i].cells[1].innerHTML = data['statewise'][i]['state'];
                  tbval.rows[i].cells[1].style.background ='rgb(72, 124, 107)'; 
                  tbval.rows[i].cells[1].style.color ='#fff';

                  x.insertCell(2);
                  tbval.rows[i].cells[2].innerHTML = data['statewise'][i]['confirmed'];
                  tbval.rows[i].cells[2].style.background ='#4bb7d8';

                  x.insertCell(3);
                  tbval.rows[i].cells[3].innerHTML = data['statewise'][i]['active'];
                  tbval.rows[i].cells[3].style.background ='rgb(209, 80, 80)';
                  tbval.rows[i].cells[3].style.color ='#fff';

                  x.insertCell(4);
                  tbval.rows[i].cells[4].innerHTML = data['statewise'][i]['recovered'];
                  tbval.rows[i].cells[4].style.background ='rgb(154, 241, 132)'; 
                  tbval.rows[i].cells[4].style.color ='rgb(27, 85, 12)';
                
                  x.insertCell(5);
                  tbval.rows[i].cells[5].innerHTML = data['statewise'][i]['deaths'];
                  tbval.rows[i].cells[5].style.background ='rgb(135, 165, 152)';
              } 
            }
        );
    }



</script>
</body>
</html>