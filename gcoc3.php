<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <style>
    * {
      box-sizing: border-box;
    }

    body {
      font-family: Arial;
      padding: 20px;
      height: auto;
      background-image: linear-gradient(rgba(92, 91, 91, 0.5), rgba(85, 81, 81, 0.5)), url(/background.jpg);
      /* background-image: url("/background.jpg"); */
      background-size: 100%;
      opacity: 0.0 - 1.0;
    }

    /* Header/Blog Title */
    .header {
      color: white;
      padding: 4px;
      text-align: center;
      background: #333333;
    }

    .header h1 {
      font-size: 50px;
      margin: 4px;
    }

    /* Style the top navigation bar */
    .topnav {
      overflow: hidden;
      background-color: rgb(75, 75, 75);
    }

    /* Style the topnav links */
    .topnav a {
      float: left;
      display: block;
      color: #f2f2f2;
      text-align: center;
      padding: 14px 16px;
      text-decoration: none;
    }

    /* Change color on hover */
    .topnav a:hover {
      background-color: #ddd;
      color: rgb(0, 0, 0);
    }

    /* Create two unequal columns that floats next to each other */
    /* Left column */
    .leftcolumn {
      float: left;
      width: 60%;
    }

    /* Right column */
    .rightcolumn {
      float: left;
      width: 40%;
      padding-left: 30px;
    }

    .midcolumn {
      float: left;
      width: 100%;
    }

    /* Fake image */
    .fakeimg {
      width: 100%;
      padding: 4px;
    }

    /* Add a card effect for articles */
    .card {
      background-color: rgb(228, 226, 226);
      padding: 20px;
      margin-top: 30px;
    }

    /* Clear floats after the columns */
    .row:after {
      content: "";
      display: table;
      clear: both;
    }

    /* Footer */
    .footer {
      padding: 20px;
      color: white;
      text-align: center;
      background: #333333;
      margin-top: 40px;
    }

    /* Responsive layout - when the screen is less than 800px wide, make the two columns stack on top of each other instead of next to each other */
    @media screen and (max-width: 800px) {
      table{
        font-size: 14px;
      }
      .leftcolumn,
      .rightcolumn {
        width: 100%;
        padding: 0;
      }
    }

    /* Responsive layout - when the screen is less than 400px wide, make the navigation links stack on top of each other instead of next to each other */
    @media screen and (max-width: 400px) {
      table{
        font-size: 14px;
      }
      .topnav a {
        float: none;
        width: 100%;
      }
    }

    table{
      border-collapse: collapse;
      width: 100%;
      color: black;
      font-family: monospace;
      font-size: 24px;
      text-align: left;
    }

    th{
      background-color: #333333;
      color: white;
    }

    tr:nth-child(even) {background-color: #f2f2f2;}


  </style>
  <title>GCOC - Oven 1</title>
  <meta name="description" content="Oven.  " />
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="robots" content="index,follow" />
  <link rel="icon" href="/forklift_truck_transport_warehouse_icon_148904.png" />

  <!--HEAD-->
</head>

<body>
  <div class="header">
    <h1>GCOC DASHBOARD</h1>
  </div>

  <div class="topnav">
    <a href="/index.php">Home</a>
    <a href="/site.html">Site Layout</a>
  </div>

  <div class="row">
    

    <!--Left Half.  -->
    <div class="leftcolumn">
      <div class="card">
        <h2>Oven 1</h2>
      </div>
    </div>

    <!--Right Half.  -->
    <div class="rightcolumn">
      <div class="card">
        <img class="fakeimg" height="400px" width="400px" src="gcoc3.png" alt="" />
      </div>
    </div>

    <!--Middle column containing DB data-->
    <div class="midcolumn">
      <div class="card">
      <table>
          <tr>
            <th>Date/Time</th>
            <th>Temp 1</th>
            <th>Humid 1</th>
            <th>Temp 2</th>
            <th>Humid 2</th>
            <th>Fan Status</th>
            <th>Hours Running</th>
          </tr>
          <?php
          $mysqli = new mysqli("localhost", "example", "pswd", "example", 0000);

          if ($mysqli->connect_errno) {
            echo "Failed to connect to MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
          }

          //echo $mysqli->host_info . "\n";

          $sqlQuery = "SELECT currTime, temp_1, humid_1, temp_2, humid_2, fan_status, hours_running FROM oven1";
          $result = $mysqli-> query($sqlQuery);
          
          if($result-> num_rows > 0){
            while($row = $result-> fetch_assoc()) {
              echo "<tr>
              <td>". $row["currTime"] ."</td>
              <td>". $row["temp_1"] ."</td>
              <td>". $row["humid_1"] ."</td>
              <td>". $row["temp_2"] ."</td>
              <td>". $row["humid_2"] ."</td>
              <td>". $row["fan_status"] ."</td>
              <td>". $row["hours_running"] ."</td>
              </tr>";
            }
            echo "</table>";
          }
          else{
            echo "Result == 0.  "; 
          }
          $mysqli-> close();
          ?>
        </table>
      </div>
    </div>
  </div>

  <div class="footer">
    <h5>GCOC - Division of Green Charcoal SA Pty (Ltd) 2021</h5>
  </div>
</body>

</html>