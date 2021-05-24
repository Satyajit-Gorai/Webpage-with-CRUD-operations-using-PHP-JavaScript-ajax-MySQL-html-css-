$(document).ready(function(){
    $('#updateOrder').submit(function(){
    
    // Call ajax for pass data to other place
    $.ajax({
    type: 'POST',
    url: './php/update.php',
    data: $(this).serialize() // getting filed value in serialize form-- porte hbe
    })
    .done(function(data){ // if getting done then call.
    
    // show the response
    alert( "Request Sent to Database..." );
    alert("Successfully updated...");//printing php data in div
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