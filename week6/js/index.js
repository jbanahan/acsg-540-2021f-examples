document.write("<p>Hello from external declaration!</p>");

var name;
var yearOfBirth;

name = prompt("Enter your name");
yearOfBirth = prompt("What year were you born?");

yearOfBirth = parseInt(yearOfBirth);

var age = 2021 - yearOfBirth;
document.write("<h3>Hello <em>" + name + "</em>, you are <em>" + age + "</em> years old.</h3>");
