$(document).ready(function() {
  $('#form').submit(function(e) {
    e.preventDefault(); 
    var formData = $(this).serialize(); 
    $.ajax({
      type: 'POST',
      url: 'Store.php',
      url2: 'Store2.php',
      data: formData, 
      success: function(response) {
        alert(response);
      },
      error: function(xhr, status, error) {
        alert('Error: ' + error);
      }
      });
    });
  });