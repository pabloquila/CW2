$(document).ready(function() {
    var table = $('#data').DataTable();

   

});


   function clickAndDisable(link) {
     // disable subsequent clicks
     link.onclick = function(event) {
        event.preventDefault();
     }
   } 