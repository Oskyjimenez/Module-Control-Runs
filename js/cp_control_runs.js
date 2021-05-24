jQuery(document).ready(function (e) {
  const table = $("table").DataTable({
    "ajax": {
      url: "ajax/cp_control_runs.php",
      dataType: "json",
    },
    "columns":[
        {"data":"sampleDate"},
        {"data":"sampleName"},
        {"data":"drive"},
        {"data":"nas"}
    ]
  });
});
