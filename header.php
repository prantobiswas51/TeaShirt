<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://kit.fontawesome.com/2aee2ea5d2.js" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="/style/nav.css">
  <link rel="stylesheet" href="/style/main.css">
  <title>Nav</title>
</head>

<body>
  <div class="nav-container">
    <div class="logo-container">
      <img class="logo" src="https://techland360.com/wp-content/themes/woodmart/images/wood-logo-dark.svg" alt="logo">
    </div>

    <div class="w3-container">
      <div class="w3-right dropdown">
        <i onclick="myFunction()" class="dropbtn fa-solid fa-caret-down fa-2x"></i>
        <div id="myDropdown" class="dropdown-content">
          <a class="navlink" href="#">Home</a>
          <a class="navlink" href="#">Blog</a>
          <a class="navlink" href="#">Privacy</a>
          <a class="navlink" href="#">Contact</a>
          <a class="navlink" href="#">About</a>
        </div>
      </div>

      <div class="w3-clear"></div>
    </div>
  </div>


  <script>
    function myFunction() {
      document.getElementById("myDropdown").classList.toggle("show");
    }

    // Close the dropdown if the user clicks outside of it
    window.onclick = function (event) {
      if (!event.target.matches('.dropbtn')) {
        var dropdowns = document.getElementsByClassName("dropdown-content");
        var i;
        for (i = 0; i < dropdowns.length; i++) {
          var openDropdown = dropdowns[i];
          if (openDropdown.classList.contains('show')) {
            openDropdown.classList.remove('show');
          }
        }
      }
    }
  </script>

</body>

</html>