<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Dashboard</title>
    <link rel="stylesheet" href="resources\css\index.css" />
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Lato:wght@400;600&display=swap"
    />
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Poppins:wght@500&display=swap"
    />
    <!-- Latest compiled and minified CSS -->
    <link
      rel="stylesheet"
      href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css"
    />

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link
      href="https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css"
      rel="stylesheet"
    />
  </head>
  <body>
    <div class="container-fluid">
      <section class="home-section" style="width: 100%">
        @include('layouts.header');
        <div class="dashboard-parent">
          <div class="dashboard">Dashboard</div>
          <div class="search-here-parent">
            <img
              class="outline-search-magnifer"
              alt=""
              src="public\img\home\mag.png"
            />
            <div class="search-here">Search here</div>
          </div>
        </div>
        <div class="frame-child"></div>
        <div class="frame-item"></div>
      </section>
    </div>

    <script>
      var outlineArrowsAltArrowD = document.getElementById(
        "outlineArrowsAltArrowD"
      );
      if (outlineArrowsAltArrowD) {
        outlineArrowsAltArrowD.addEventListener("click", function () {
          var popup = document.getElementById("frameContainer");
          if (!popup) return;
          var popupStyle = popup.style;
          if (popupStyle) {
            popupStyle.display = "flex";
            popupStyle.zIndex = 100;
            popupStyle.backgroundColor = "rgba(113, 113, 113, 0.3)";
            popupStyle.alignItems = "center";
            popupStyle.justifyContent = "center";
          }
          popup.setAttribute("closable", "");

          var onClick =
            popup.onClick ||
            function (e) {
              if (e.target === popup && popup.hasAttribute("closable")) {
                popupStyle.display = "none";
              }
            };
          popup.addEventListener("click", onClick);
        });
      }

      let sidebar = document.querySelector(".sidebar");
      let closeBtn = document.querySelector("#btn");
      let searchBtn = document.querySelector(".bx-search");

      closeBtn.addEventListener("click", () => {
        sidebar.classList.toggle("open");
        menuBtnChange(); //calling the function(optional)
      });

      searchBtn.addEventListener("click", () => {
        // Sidebar open when you click on the search iocn
        sidebar.classList.toggle("open");
        menuBtnChange(); //calling the function(optional)
      });

      // following are the code to change sidebar button(optional)
      function menuBtnChange() {
        if (sidebar.classList.contains("open")) {
          closeBtn.classList.replace("bx-menu", "bx-menu-alt-right"); //replacing the iocns class
        } else {
          closeBtn.classList.replace("bx-menu-alt-right", "bx-menu"); //replacing the iocns class
        }
      }

      function myFunction() {
        document.getElementById("card").style.backgroundColor = "#c47b37";
      }
      function draw() {
        document.getElementById("card1").style.backgroundColor = "#c47b37";
      }
      function draw1() {
        document.getElementById("card2").style.backgroundColor = "#c47b37";
      }
      function draw2() {
        document.getElementById("card3").style.backgroundColor = "#c47b37";
      }
      function draw3() {
        document.getElementById("card4").style.backgroundColor = "#c47b37";
      }
      function draw4() {
        document.getElementById("card5").style.backgroundColor = "#c47b37";
      }
      function draw5() {
        document.getElementById("card6").style.backgroundColor = "#c47b37";
      }
    </script>
  </body>
</html>

