function validateForm() {
    var x = document.forms["username"]["password"].value;
    if (x == null || x == "") {
        alert("Name must be filled out");
        return false;
    }
}