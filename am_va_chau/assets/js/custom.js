(function countInLoveDate() {
    var inLoveDate = new Date("May 31, 2017 15:37:25").getTime();

    // Update the count down every 1 second
    var x = setInterval(function () {

        // Get todays date and time
        var now = new Date().getTime();

        // Find the distance between now an the count down date
        var distance = now - inLoveDate;

        // Time calculations for days, hours, minutes and seconds
        var days = Math.floor(distance / (1000 * 60 * 60 * 24));
        var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
        var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
        var seconds = Math.floor((distance % (1000 * 60)) / 1000);

        // Display the result in the element with id="demo"
        document.getElementById("love_countup").innerHTML = "We have been in love for " + days + " days";
        document.getElementById("love_countup_detail").innerHTML = "Specificly, it is " + days + " days, " + hours + " hours, " + minutes + " minutes, " + seconds + " seconds.";
    }, 1000);
})();

// (function countAmReturn() {
//     var returnVNDate = new Date("Dec 22, 2017 09:00:00").getTime();

//     // Update the count down every 1 second
//     var x = setInterval(function () {

//         // Get todays date and time
//         var now = new Date().getTime();

//         // Find the distance between now an the count down date
//         var distance = returnVNDate - now;

//         // Time calculations for days, hours, minutes and seconds
//         var days = Math.floor(distance / (1000 * 60 * 60 * 24));
//         var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
//         var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
//         var seconds = Math.floor((distance % (1000 * 60)) / 1000);

//         // Display the result in the element with id="demo"
//         document.getElementById("returnVN_countdown").innerHTML = "I will return to Vietnam in " + days + " days";
//         document.getElementById("returnVN_countdown_detail").innerHTML = "Specificly, it is " + days + " days, " + hours + " hours, " + minutes + " minutes, " + seconds + " seconds.";
//     }, 1000);
// })();

// var countDownDate = new Date("Jan 5, 2018 15:37:25").getTime();

// // Update the count down every 1 second
// var x = setInterval(function() {

//   // Get todays date and time
//   var now = new Date().getTime();

//   // Find the distance between now an the count down date
//   var distance = countDownDate - now;

//   // Time calculations for days, hours, minutes and seconds
//   var days = Math.floor(distance / (1000 * 60 * 60 * 24));
//   var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
//   var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
//   var seconds = Math.floor((distance % (1000 * 60)) / 1000);

//   // Display the result in the element with id="demo"
//   document.getElementById("demo").innerHTML = days + "d " + hours + "h "
//   + minutes + "m " + seconds + "s ";

//   // If the count down is finished, write some text 
//   if (distance < 0) {
//     clearInterval(x);
//     document.getElementById("demo").innerHTML = "EXPIRED";
//   }
// }, 1000);