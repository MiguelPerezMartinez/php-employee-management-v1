$("#formLogIn").on("submit", function (e) {
  e.preventDefault();
  var formData = {
    employeePassword: $("#floatingPassword").val(),
    employeeEmail: $("#floatingInput").val(),
  };

  console.log(formData);
  if (formData) {
    $.ajax({
      type: "POST",
      url: "../src/library/loginController.php",
      data: { formData: formData, valid: "yes" },
      success: function (data) {},
    });
  }
});
