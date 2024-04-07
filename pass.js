
function validate() {

    var pass1 = document.getElementById("pass1").value;
    var pass2 = document.getElementById("pass2").value;


    if (pass1.length < 8 || pass2.length < 8) {
        alert("Password must be at least eight characters long.");
    } else if (pass1 !== pass2) {
        alert("Passwords do not match. Please try again.");
    } else {
        alert("Passwords matched successfully!");
    }
}
