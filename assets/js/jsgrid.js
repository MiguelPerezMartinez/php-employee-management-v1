$("#jsGrid").jsGrid({
  width: "100%",
  height: "auto",

  inserting: true,
  editing: true,
  sorting: true,
  paging: true,
  autoload: true,
  pageSize: 10,
  pageButtonCount: 5,
  deleteConfirm: "Do you really want to delete data?",

  controller: {
    loadData: function (filter) {
      return $.ajax({
        type: "GET",
        url: "library/employeeController.php",
        data: filter,
        dataType: "json",
      });
    },
    insertItem: function (item) {
      return $.ajax({
        type: "POST",
        url: "library/employeeController.php",
        data: item,
      });
    },
    updateItem: function (item) {
      return $.ajax({
        type: "PUT",
        url: "library/employeeController.php",
        data: item,
      });
    },
    deleteItem: function (item) {
      return $.ajax({
        type: "DELETE",
        url: "library/employeeController.php",
        data: item,
      });
    },
  },

  fields: [
    {
      name: "id",
      type: "hidden",
      css: "hide",
    },
    {
      name: "name",
      type: "text",
      width: 150,
      validate: "required",
    },
    {
      name: "lastName",
      type: "hidden",
      css: "hide",
    },
    {
      name: "email",
      type: "text",
      width: 150,
      validate: "required",
    },
    {
      name: "gender",
      type: "hidden",
      css: "hide",
    },
    {
      name: "city",
      type: "text",
      width: 150,
      validate: "required",
    },
    {
      name: "streetAddress",
      type: "text",
      width: 150,
      validate: "required",
    },
    {
      name: "state",
      type: "text",
      width: 150,
      validate: "required",
    },
    {
      name: "age",
      type: "number",
      width: 150,
      validate: "required",
    },
    {
      name: "postalCode",
      type: "number",
      width: 150,
      validate: "required",
    },
    {
      name: "phoneNumber",
      type: "number",
      width: 150,
      validate: "required",
    },
    {
      type: "control",
    },
  ],
});
