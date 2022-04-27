let emailValidation = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;

$("#register").on("submit", function (e) {
  e.preventDefault();

  let firstName = $("#firstName").val();
  let middleName = $("#middleName").val();
  let lastName = $("#lastName").val();
  let carModel = $("#carModel").val();
  let plateNumber = $("#plateNumber").val();
  let email = $("#email").val();
  let password = $("#password").val();

  if (firstName == "") {
    Swal.fire({
      icon: "error",
      title: "Oops...",
      text: "First Name is required!",
    }).then((result) => {
      firstName.focus();
      firstName.addClass("is-invalid");
    });
  } else if (lastName == "") {
    Swal.fire({
      icon: "error",
      title: "Oops...",
      text: "Last Name is required!",
    }).then((result) => {
      lastName.focus();
      lastName.addClass("is-invalid");
    });
  } else if (carModel == "") {
    Swal.fire({
      icon: "error",
      title: "Oops...",
      text: "Car Model is required!",
    }).then((result) => {
      carModel.focus();
      carModel.addClass("is-invalid");
    });
  } else if (plateNumber == "") {
    Swal.fire({
      icon: "error",
      title: "Oops...",
      text: "Plate Number is required!",
    }).then((result) => {
      plateNumber.focus();
      plateNumber.addClass("is-invalid");
    });
  } else if (email == "") {
    Swal.fire({
      icon: "error",
      title: "Oops...",
      text: "Email is required!",
    }).then((result) => {
      email.focus();
      email.addClass("is-invalid");
    });
  } else if (!emailValidation.test(email)) {
    Swal.fire({
      icon: "error",
      title: "Oops...",
      text: "Invalid Email!",
    }).then((result) => {
      email.focus();
      email.addClass("is-invalid");
    });
  } else if (password == "") {
    Swal.fire({
      icon: "error",
      title: "Oops...",
      text: "Password is required!",
    }).then((result) => {
      password.focus();
      password.addClass("is-invalid");
    });
  } else {
    $("#createAccBtn").blur();
    $("#createAccBtn").attr("disabled", true);
    $("#createAccBtn").html(
      '<span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span> Creating...'
    );
    $.ajax({
      url: "controllers/loginRegisterController.php",
      method: "POST",
      data: {
        firstName: firstName,
        middleName: middleName,
        lastName: lastName,
        carModel: carModel,
        plateNumber: plateNumber,
        email: email,
        password: password,
        create: true,
      },
      success: function (data) {
        console.log(data);
        $("#createAccBtn").attr("disabled", false);
        $("#createAccBtn").html("Create Account");
        if (data == "1") {
          Swal.fire({
            icon: "info",
            title: "Email Already Exists!",
            text: "Please try again.",
          });
        } else if (data == 2) {
          Swal.fire({
            icon: "error",
            title: "Something went wrong!",
            text: "Please try again later.",
          });
        } else if (data == 3) {
          Swal.fire({
            icon: "success",
            title: "Account Created!",
            text: "Please login to your account",
          }).then((result) => {
            window.location.href = "index.php";
          });
        }
      },
    });
  }
});

$("#login").on("submit", function (e) {
  e.preventDefault();

  let email = $("#email").val();
  let password = $("#password").val();

  if (email == "") {
    Swal.fire({
      icon: "error",
      title: "Oops...",
      text: "Email is required!",
    }).then((result) => {
      email.focus();
      email.addClass("is-invalid");
    });
  } else if (!emailValidation.test(email)) {
    Swal.fire({
      icon: "error",
      title: "Oops...",
      text: "Invalid Email!",
    }).then((result) => {
      email.focus();
      email.addClass("is-invalid");
    });
  } else if (password == "") {
    Swal.fire({
      icon: "error",
      title: "Oops...",
      text: "Password is required!",
    }).then((result) => {
      password.focus();
      password.addClass("is-invalid");
    });
  } else {
    $("#loginBtn").blur();
    $("#loginBtn").attr("disabled", true);
    $("#loginBtn").html(
      '<span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span> Logging in...'
    );

    $.ajax({
      url: "controllers/loginRegisterController.php",
      method: "POST",
      data: {
        email: email,
        password: password,
        login: true,
      },
      success: function (data) {
        console.log(data);
        $("#loginBtn").attr("disabled", false);
        $("#loginBtn").html("Login");
        if (data == "1") {
          Swal.fire({
            icon: "info",
            title: "Account does not exists!",
            text: "Please try again.",
          });
        } else if (data == "2") {
          Swal.fire({
            icon: "error",
            title: "Something went wrong!",
            text: "Please try again later.",
          });
        } else {
          Swal.fire({
            icon: "success",
            title: "Logged In!",
            text: "Welcome!",
          }).then((result) => {
            window.location.href = "index.php?title=Logged In";
          });
        }
      },
    });
  }
});
