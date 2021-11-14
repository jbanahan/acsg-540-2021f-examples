// This is the ajax method from jQuery
// function getMake(model) {
//     $.ajax('server.php?model=' + model, {
//         type: "PUT",
//         success: function (data, status, xhr) {
//             document.getElementById("make").value = xhr.responseText;
//         },
//         error: function(jqXhr, textStatus, errorMessage) {
//             // console.warn(textStatus + " - " + errorMessage);
//         }
//     })
// }

// The shorthand jQuery ajax request method
// function getMake(model) {
//     $.get('server.php?model=' + model, function (data, status, xhr) {
//             document.getElementById("make").value = xhr.responseText;
//     })
// }

// Shorthand with non-anonymized function
function getMake(model) {
    $.get('server.php?model=' + model, updateMakeField)
}

function updateMakeField(data, status, xhr) {
    document.getElementById("make").value = xhr.responseText;
}