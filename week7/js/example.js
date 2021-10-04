var textEntry = prompt("Enter a list of words separated by a space");

// Instead of making our own array, lets get one from the user
// textArray = new Array("a", "b", "c");

if (textEntry == null || textEntry == "") {
    document.write('<p class="error">You must enter a list of words!</p>');
} else {
    textArray = textEntry.split(' ');

    document.write("<p>Here is the array of strings: <code>" + textArray + "</code></p>");

    for(var i = 0; i < textArray.length; i++ ) {
        textArray[i] = textArray[i].toUpperCase();
    }

    document.write("<p>Here is the modified array of strings: <code>" + textArray + "</code></p>");

    // Don't do this, but it's available. Along with error and warn.
    // console.log(textArray)
}
