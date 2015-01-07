$('#signuptabs a').click(function (e) {
  e.preventDefault()
  $(this).tab('show')
});

$('#signuptabs a:first').tab('show');