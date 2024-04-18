<?php include('header.php'); ?>

<body>
<div>
<div class="tab">
  <button class="tablinks" onclick="openTab(event, 'firstTab')" id="defaultOpen">Profile</button>
  <button class="tablinks" onclick="openTab(event, 'secondTab')">Adoption History</button>
  <button class="tablinks" onclick="openTab(event, 'thirdTab')">Volientier Application</button>
  <button class="tablinks" onclick="openTab(event, 'fourthTab')">Donations</button>
  <a href="backend/logout.php"><button class="tablinks">Logout</button></a>

</div>

<div id="firstTab" class="tabcontent">
  <h3>Profile</h3>
  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin dignissim maximus enim, nec dictum diam pellentesque nec. Nulla facilisis, massa ut egestas bibendum, ex libero varius nisl, a aliquet dui ante sed purus. Donec vitae ullamcorper lacus, ut vehicula metus. Duis molestie ipsum quis nisl ultrices feugiat. Nam at purus ut ligula ultrices aliquet vitae nec eros. Aenean condimentum tellus eu urna tincidunt volutpat. Nunc bibendum quam ut congue dignissim. Aliquam congue velit at tortor consequat cursus ut ut diam. Fusce iaculis auctor purus.</p>
</div>

<div id="secondTab" class="tabcontent">
  <h3>Adoption History</h3>
  <?php
// Start the session


// Include database connection
include 'backend/db_connect.php';

// Assuming you have a user authentication system and the user ID is stored in session
$userId = $_SESSION['user_id'];

// Retrieve adoption form data for the logged-in user
$sql = "SELECT * FROM adoption_data WHERE user_id = '$userId'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Output data of each row
    while($row = $result->fetch_assoc()) {
        echo "Name: " . $row["name"]. "<br>";
        echo "Email: " . $row["email"]. "<br>";
        echo "Phone: " . $row["phone"]. "<br>";
        echo "Address: " . $row["address"]. "<br>";
        echo "Pet Type: " . $row["pet_type"]. "<br>";
        echo "Reason for Adoption: " . $row["reason"]. "<br>";
    }
} else {
    echo "No adoption data found for this user.";
}

// Close connection
$conn->close();
?>

</div>

<div id="thirdTab" class="tabcontent">
  <h3>Volientier Application</h3>
  <p>Suspendisse lacinia sapien eget risus porttitor, sit amet faucibus velit ullamcorper. Quisque dictum erat neque, placerat dignissim ante tempor at. Nullam ullamcorper justo felis, nec pulvinar ex suscipit vel. Donec viverra leo ut ante iaculis, sit amet porta leo vehicula. Suspendisse fermentum congue ligula sed molestie. Praesent lacinia, massa non fringilla scelerisque, tellus arcu sodales nunc, in ultrices sapien ante et ante. In iaculis tellus urna, at convallis massa porta in. Proin vehicula facilisis varius. Pellentesque vitae purus non mauris ultricies porttitor nec sodales nulla.</p>
</div>

<div id="fourthTab" class="tabcontent">
  <h3>Donations</h3>
  <p>Suspendisse lacinia sapien eget risus porttitor, sit amet faucibus velit ullamcorper. Quisque dictum erat neque, placerat dignissim ante tempor at. Nullam ullamcorper justo felis, nec pulvinar ex suscipit vel. Donec viverra leo ut ante iaculis, sit amet porta leo vehicula. Suspendisse fermentum congue ligula sed molestie. Praesent lacinia, massa non fringilla scelerisque, tellus arcu sodales nunc, in ultrices sapien ante et ante. In iaculis tellus urna, at convallis massa porta in. Proin vehicula facilisis varius. Pellentesque vitae purus non mauris ultricies porttitor nec sodales nulla.</p>
</div>

</body>

<?php

include('footer.php');
?>

<script src="main.js"></script>
<script>
    function openTab(evt, cityName) {
        var i, tabcontent, tablinks;
        tabcontent = document.getElementsByClassName("tabcontent");
        for (i = 0; i < tabcontent.length; i++) {
            tabcontent[i].style.display = "none";
        }
        tablinks = document.getElementsByClassName("tablinks");
        for (i = 0; i < tablinks.length; i++) {
            tablinks[i].className = tablinks[i].className.replace(" active", "");
        }
        document.getElementById(cityName).style.display = "block";
        evt.currentTarget.className += " active";
    }
    document.getElementById("defaultOpen").click();
</script>

<style>
footer{
    display: flow-root;
}
.tab {
  float: left;
  border: 1px solid #ccc;
  background-color: #dfe8eb;
  width: 30%;
  height: 500px;
  border-radius: 10px 0 0 10px;
}
.tab button {
  display: block;
  background-color: inherit;
  color: black;
  padding: 22px 16px;
  width: 90%;
  border: none;
  outline: none;
  text-align: left;
  cursor: pointer;
  transition: 0.3s;
  font-size: 17px;
  margin: 5%;
  border-radius: 4px;
}

.tab button:hover {
  background-color: #bee9f7;
}

.tab button.active {
  background-color: #6398a8;
}

.tabcontent {
  float: left;
  padding: 0px 12px;
  border: 1px solid #ccc;
  width: 70%;
  border-left: none;
  height: 500px;
  border-radius: 0 10px 10px 0;
}
</style>