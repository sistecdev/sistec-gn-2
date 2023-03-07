<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Sagar Manufacturers</title>
   <style>
      * {
         margin: 0;
         padding: 0;
         box-sizing: border-box;
      }

      .flex-me {
         display: flex;
         flex-direction: column;
         justify-content: center;
         align-items: center;
         height: 100vh;
         color: #169e48;
         text-align: center;
      }

      .flex-me h1,
      #demo {
         font-size: 5vw;
         margin-bottom: 50px;
         line-height: 1;
      }
   </style>
</head>

<body>
   <div class="flex-me">
      <h1>New Website of SPS Saket Nagar <br> Launching Today</h1>
      <p id="demo"></p>
   </div>

   <script>
      // Set the date we're counting down to
      var countDownDate = new Date("Oct 19, 2022 16:30:00").getTime();

      // Update the count down every 1 second
      var x = setInterval(function() {
         // Get today's date and time
         var now = new Date().getTime();

         // Find the distance between now and the count down date
         var distance = countDownDate - now;

         // Time calculations for days, hours, minutes and seconds
         var days = Math.floor(distance / (1000 * 60 * 60 * 24));
         var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
         var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
         var seconds = Math.floor((distance % (1000 * 60)) / 1000);

         // Output the result in an element with id="demo"
         document.getElementById("demo").innerHTML = hours + "H : " +
            minutes + "M : " + seconds + "S ";

         // If the count down is over, write some text 
         if (distance < 0) {
            clearInterval(x);
            document.getElementById("demo").innerHTML = "EXPIRED";
         }
      }, 1000);
   </script>
</body>

</html>