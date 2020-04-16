<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CORONA - HOME</title>
    
    <?php include'links.php' ?>
    
</head>
<body onload="fetch()">
<section  class="container-fluid">

<div class="mb-3 text-center">
    <h1 style="color:blue;">COVID 19 WEBSITE</h1>
    <h3>World COVID19 Data of Cases</h3>
    <p>This Website Create By David RS</p>
</div>
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

    <script>
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