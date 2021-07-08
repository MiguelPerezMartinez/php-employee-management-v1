var current = window.location.href;
current = current.split("/");
var last = current.length;
if (current[last - 1].includes("dashboard")) {
  $("#dash").addClass("active");
  $("#emp").removeClass("active");
}
if (current[last - 1].includes("employee")) {
  $("#emp").addClass("active");
  $("#dash").removeClass("active");
}
