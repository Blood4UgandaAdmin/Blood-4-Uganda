var myDate = new Date();
var hrs = myDate.getHours();

var greet;

if (hrs < 12)
  greet = 'Good Morning, ';
else if (hrs >= 12 && hrs <= 16)
  greet = 'Good Afternoon, ';
else if (hrs >= 16 && hrs <= 21)
  greet = 'Good Evening, ';
else if (hrs >= 21 && hrs <= 24)
  greet = 'Good Night, ';

document.getElementById('greetings').innerHTML ='<b>' + greet + '</b>';