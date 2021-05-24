$(document).ready(function(){
    $('#placeOrder').submit(function(){
    
    // Call ajax for pass data to other place
    $.ajax({
    type: 'POST',
    url: './php/form.php',
    data: $(this).serialize() // getting filed value in serialize form-- porte hbe
    })
    .done(function(data){ // if getting done then call.
    
    // show the response
    alert( "sucessfull." );
    window.location.href = "./home.html?e=success";
    })
    .fail(function() { // if fail then getting message
    
    // just in case posting your form failed
    alert( "Posting failed." );
    
    });
    
    // to prevent refreshing the whole page page
   return false;
    
    });
});
