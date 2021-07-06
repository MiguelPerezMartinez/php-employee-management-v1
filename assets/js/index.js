$("#formLogIn").on("submit", function (e) {
  e.preventDefault();
  var formData = {
    employeePassword: $("#floatingPassword").val(),
    employeeEmail: $("#floatingEmail").val(),
  };

  if (formData) {
    $.ajax({
      type: "POST",
      url: "src/library/loginController.php",
      data: {
        formData: formData,
        valid: "yes",
      },
      success: function (response) {
        console.log(response);
      },
    });
  }
});
