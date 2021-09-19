document.write("<p>hello from external declaration!</p>");

var name;
var yearOfBirth;

name = prompt("What is your name?");
yearOfBirth = prompt("What year were you born?");

yearOfBirth = parseInt(yearOfBirth);

var age = 2021 - yearOfBirth;
document.write("<h2>Hello <em>" + name + "</em>, you are <em>" + age + "</em> years old</h2>");
