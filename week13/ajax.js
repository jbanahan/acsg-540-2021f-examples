function getMake(model) {
    var xhr = new XMLHttpRequest();

    // Set the callback
    xhr.onreadystatechange = function () { // Function is not named
      if (xhr.readyState == 4 && xhr.status == 200) {
        document.getElementById("make").value = xhr.responseText;
      }
    }
    xhr.open("GET", "server.php?model=" + model);
    xhr.send(null);
  }
  