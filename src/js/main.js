$(function() {
    let btn = $('input[name=searchBtn');
    btn.on('click', function(e){
        e.preventDefault();
        console.warn('clicked');
        let product = $('#searchFor').val();
        let category = $('#inCategory').val();
        
            // Send the data using post
        let search = $.post( 'functions.php', { search: {item: product, in:category} } );
        
        // Put the results in a div
        search.done(function( data ) {
            $( "#result" ).empty().append( data );
        } );
    });
});