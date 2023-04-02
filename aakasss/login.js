$(document).ready(function() {
  $("#login-form").submit(function(event) {
    event.preventDefault();
    var username = $("#username").val();
    var password = $("#password").val();
    $.ajax({
      url: "login.php",
      method: "POST",
      data: {username: username, password: password},
      success: function(response) {
        console.log(response);
        if (response == "success") {
          window.location.href = "main.php";
        } else {
          $("#error-message").html("Invalid username or password.");
        }
      }
    });
  });
});
