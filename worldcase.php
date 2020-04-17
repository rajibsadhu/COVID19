<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>World Covid19 Case</title>
    
    <?php include'links-world.php' ?>
    
</head>
<body onload="fetch()">


<!--Menu Bar-->

<header>
    <a href="#" > <img class="logo" src="files/logo-eraser.png" alt=""></a>
    <div class="menu-bar"></div>
    <nav>
        <ul>
        
            <li><a href="index.html" >Home</a></li>
            <li><a href="about.html">About</a></li>
            <li><a href="dailycase.html">Daily Cases</a></li>
            <li><a href="#" class="active"> World Cases </a></li>
            <li><a href="contact.html">Contact</a></li>
        </ul>
    
    </nav>
    <div class="clearfix">
    </div>
</header>
<section class="text-center">
    <div class="mb-3  card bg-dark text-white text-uppercase text-center">
        
        <h2 class="card-body">World COVID19 Cases</h2>
    
    </div>

 
    <div class="d-flex justify-content-around cases text-uppercase align-items-center">
        <div class="text-danger" >
            <h4>Confirm</h4>
            <p>2,214,461</p>
        </div>
        <div class="text-success">
            <h4>Recovered</h4>
            <p>560,309</p>
        </div>
        <div class="text-secondary">
            <h4>Deaths</h4>
           <p>148,979</p>
        </div>
    </div>
</section>











<section  class="container-fluid">

    <div class="table-responsive">
    
        <table class="table table-bordered table-striped text-center" id="tbval">
        <tr>
            <th>Country</th>
            <th>Total Confimed</th>
            <th>Total Recovered</th>
            <th>Total Deaths</th>
            <th>New Confimed</th>
            <th>New Recovered</th>
            <th>New Deaths</th>
        </tr>
        
        </table>

    </div>
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
        $.get("https://api.covid19api.com/summary", 
        
            function(data)
            {
              //  console.log(data['Countries'].length);
              var tbval = document.getElementById('tbval');

              for(var i=1; i<(data['Countries'].length); i++)
              {
                  var x = tbval.insertRow();
                  x.insertCell(0);

                  tbval.rows[i].cells[0].innerHTML = data['Countries'][i-1]['Country'];
                  tbval.rows[i].cells[0].style.background ='#7a4a91';
                  tbval.rows[i].cells[0].style.color ='#fff';
              

                  x.insertCell(1);
                  tbval.rows[i].cells[1].innerHTML = data['Countries'][i-1]['TotalConfirmed'];
                  tbval.rows[i].cells[1].style.background ='#4bb7d8';

                  x.insertCell(2);
                  tbval.rows[i].cells[2].innerHTML = data['Countries'][i-1]['TotalRecovered'];
                  tbval.rows[i].cells[2].style.background ='#4bb7d8';

                  x.insertCell(3);
                  tbval.rows[i].cells[3].innerHTML = data['Countries'][i-1]['TotalDeaths'];
                  tbval.rows[i].cells[3].style.background ='#4bb7d8';

                  x.insertCell(4);
                  tbval.rows[i].cells[4].innerHTML = data['Countries'][i-1]['NewConfirmed'];
                  tbval.rows[i].cells[4].style.background ='#4bb7d8';

                  x.insertCell(5);
                  tbval.rows[i].cells[5].innerHTML = data['Countries'][i-1]['NewRecovered'];
                  tbval.rows[i].cells[5].style.background ='#4bb7d8';

                  x.insertCell(6);
                  tbval.rows[i].cells[6].innerHTML = data['Countries'][i-1]['NewDeaths'];
                  tbval.rows[i].cells[6].style.background ='#4bb7d8';
              }
            }
        );
    }
    </script>

</section>
</body>
</html>
