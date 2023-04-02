function validateLogin() {
    // Get the form inputs
    var username = document.getElementById("username").value;
    var password = document.getElementById("password").value;
  
    // Check if the username is empty
    if (username == "") {
      alert("Please enter a username.");
      return false;
    }
  
    // Check if the password is empty
    if (password == "") {
      alert("Please enter a password.");
      return false;
    }
  
    return true;
  }



  
  