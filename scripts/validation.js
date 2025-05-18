function validateFeedbackForm() {
    const name = document.forms["feedback"]["name"].value;
    const nameFormat = /^[A-Za-z]+(?:\s+[A-Za-z]+)*$/;
    const email = document.forms["feedback"]["email"].value;
    const emailFormat = /^\w+@\w+(\.\w{2,3})+$/;
    const userRating = document.querySelector('input[name="rating"]:checked');
    const services = document.querySelector('input[name="service"]:checked');
    const preferences = document.getElementById("preferences");


    if (name === "") {
        alert("Name field is required");
        return false;
    } else if (!nameFormat.test(name)) {
        alert("Enter a valid name");
        return false;
    }

    if (email === "") {
        alert("email field is required");
        return false;
    } else if (!emailFormat.test(email)) {
        alert("Enter a valid email");
        return false;
    }
    
    
    if (userRating == null) {
        alert("User rating is required");
        return false;
    }

    if (services == null) {
        alert("Services used are required");
        return false;
    }

    if (preferences.value == ""){
        alert("Please select a preference");
        return false;
    }

    return true;


  }
  