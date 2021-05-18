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
      background-image: linear-gradient(rgba(92, 91, 91, 0.5),
          rgba(85, 81, 81, 0.5)),
        url(/background.jpg);
      /* background-image: url("/background.jpg"); */
      background-size: 100%;
      opacity: 0 - 1;
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
      width: 50%;
    }

    /* Right column */
    .rightcolumn {
      float: left;
      width: 50%;
      padding-left: 30px;
    }

    .dashLeftcolumn {
      float: left;
      width: 65%;
    }

    /* Right column */
    .dashRightcolumn {
      float: left;
      width: 45%;
    }

    .midcolumn {
      margin-top: 12px;
      margin-bottom: 12px;
      float: left;
      padding: 12px;
      width: 100%;
      color: #333333;
    }

    /* Fake image */
    .fakeimg {
      width: 100%;
      padding: 4px;
    }

    /* Add a card effect for articles */
    .card {
      background-color: rgb(228, 226, 226);
      padding: 8px;
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
      table {
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
      table {
        font-size: 14px;
      }

      .topnav a {
        float: none;
        width: 100%;
      }
    }

    table {
      border-collapse: collapse;
      width: 100%;
      color: black;
      font-family: monospace;
      font-size: 24px;
      text-align: left;
    }

    th {
      background-color: #333333;
      color: white;
    }

    tr:nth-child(even) {
      background-color: #f2f2f2;
    }
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

  <!--Navigation Bar-->
  <div class="topnav">
    <a href="index.php">Home</a>
    <a href="site.html">Site Layout</a>
  </div>

  <!--5 Cards for oven updates.  -->

  <div class="row">
      <!-- card 1 -->
      <div class="leftcolumn">
        <div class="card">
          <a href="gcoc1.php">
            <h2>Oven 1</h2>
          </a>
          <table>
            <tr>
              <th>Time of entry</th>
              <th>Temperature</th>
              <th>Humidity</th>
            </tr>
            <?php
            $mysqli = new mysqli("localhost", "example", "pswd", "example", 0000);

            if ($mysqli->connect_errno) {
              echo "Failed to connect to MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
            }

            $sqlQuery = "SELECT currTime, temp_1, humid_1 FROM oven1 ORDER BY id DESC LIMIT 3";
            $result = $mysqli->query($sqlQuery);

            if ($result->num_rows > 0) {
              while ($row = $result->fetch_assoc()) {
                echo "<tr>
              <td>" . $row["currTime"] . "</td>
              <td>" . $row["temp_1"] . "</td>
              <td>" . $row["humid_1"] . "</td>
              </tr>";
              }
              echo "</table>";
            } else {
              echo "Result == 0.  ";
            }
            $mysqli->close();
            ?>
          </table>
        </div>
      </div>

      <!-- card 2 -->
      <div class="rightcolumn">
        <div class="card">
          <a href="gcoc2.php">
            <h2>Oven 2</h2>
          </a>
          <table>
            <tr>
              <th>Time of entry</th>
              <th>Temperature</th>
              <th>Humidity</th>
            </tr>
            <?php
            $mysqli = new mysqli("localhost", "example", "pswd", "example", 0000);

            if ($mysqli->connect_errno) {
              echo "Failed to connect to MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
            }

            $sqlQuery = "SELECT currTime, temp_1, humid_1 FROM oven1 ORDER BY id DESC LIMIT 3";
            $result = $mysqli->query($sqlQuery);

            if ($result->num_rows > 0) {
              while ($row = $result->fetch_assoc()) {
                echo "<tr>
              <td>" . $row["currTime"] . "</td>
              <td>" . $row["temp_1"] . "</td>
              <td>" . $row["humid_1"] . "</td>
              </tr>";
              }
              echo "</table>";
            } else {
              echo "Result == 0.  ";
            }
            $mysqli->close();
            ?>
          </table>
        </div>
      </div>
      <!-- card 3 -->
      <div class="leftcolumn">
        <div class="card">
          <a href="gcoc3.php">
            <h2>Oven 3</h2>
          </a>
          <table>
            <tr>
              <th>Time of entry</th>
              <th>Temperature</th>
              <th>Humidity</th>
            </tr>
            <?php
            $mysqli = new mysqli("localhost", "example", "pswd", "example", 0000);

            if ($mysqli->connect_errno) {
              echo "Failed to connect to MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
            }

            $sqlQuery = "SELECT currTime, temp_1, humid_1 FROM oven1 ORDER BY id DESC LIMIT 3";
            $result = $mysqli->query($sqlQuery);

            if ($result->num_rows > 0) {
              while ($row = $result->fetch_assoc()) {
                echo "<tr>
              <td>" . $row["currTime"] . "</td>
              <td>" . $row["temp_1"] . "</td>
              <td>" . $row["humid_1"] . "</td>
              </tr>";
              }
              echo "</table>";
            } else {
              echo "Result == 0.  ";
            }
            $mysqli->close();
            ?>
          </table>
        </div>
      </div>
      <!-- card 4 -->
      <div class="rightcolumn">
        <div class="card">
          <a href="gcoc4.php">
            <h2>Oven 4</h2>
          </a>
          <table>
            <tr>
              <th>Time of entry</th>
              <th>Temperature</th>
              <th>Humidity</th>
            </tr>
            <?php
            $mysqli = new mysqli("localhost", "example", "pswd", "example", 0000);

            if ($mysqli->connect_errno) {
              echo "Failed to connect to MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
            }

            $sqlQuery = "SELECT currTime, temp_1, humid_1 FROM oven1 ORDER BY id DESC LIMIT 3";
            $result = $mysqli->query($sqlQuery);

            if ($result->num_rows > 0) {
              while ($row = $result->fetch_assoc()) {
                echo "<tr>
              <td>" . $row["currTime"] . "</td>
              <td>" . $row["temp_1"] . "</td>
              <td>" . $row["humid_1"] . "</td>
              </tr>";
              }
              echo "</table>";
            } else {
              echo "Result == 0.  ";
            }
            $mysqli->close();
            ?>
          </table>
        </div>
      </div>
      <!-- card 5 -->
      <div class="leftcolumn">
        <div class="card">
          <a href="gcoc5.php">
            <h2>Oven 5</h2>
          </a>
          <table>
            <tr>
              <th>Time of entry</th>
              <th>Temperature</th>
              <th>Humidity</th>
            </tr>
            <?php
            $mysqli = new mysqli("localhost", "example", "pswd", "example", 0000);

            if ($mysqli->connect_errno) {
              echo "Failed to connect to MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
            }

            $sqlQuery = "SELECT currTime, temp_1, humid_1 FROM oven1 ORDER BY id DESC LIMIT 3";
            $result = $mysqli->query($sqlQuery);

            if ($result->num_rows > 0) {
              while ($row = $result->fetch_assoc()) {
                echo "<tr>
              <td>" . $row["currTime"] . "</td>
              <td>" . $row["temp_1"] . "</td>
              <td>" . $row["humid_1"] . "</td>
              </tr>";
              }
              echo "</table>";
            } else {
              echo "Result == 0.  ";
            }
            $mysqli->close();
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
<!-- 
Remember to chnge the Oven table number for each card when added.   -->