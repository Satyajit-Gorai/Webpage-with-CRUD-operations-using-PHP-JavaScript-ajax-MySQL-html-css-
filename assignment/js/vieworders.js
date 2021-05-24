$(document).ready(function(){
    $('#viewDetails').submit(function(){
    
    // Call ajax for pass data to other place
    $.ajax({
    type: 'POST',
    url: './php/view_data.php',
    data: $(this).serialize() // getting filed value in serialize form-- porte hbe
    })
    .done(function(data){ // if getting done then call.
    
    // show the response
    alert( "sucessfull." );
    $('#responseforViewData').html(data);//printing php data in div
    
    })
    .fail(function() { // if fail then getting message
    
    // just in case posting your form failed
    alert( "Posting failed." );
    
    });
    
    // to prevent refreshing the whole page page
    return false;
    
    });
});
