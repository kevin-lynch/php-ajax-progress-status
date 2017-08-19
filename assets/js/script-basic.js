$( document ).ready(function() {
    $("form").submit(function( e ) {
        $.ajax({
            url: $(this).attr('action'),
            xhrFields: {
                onprogress: function(e) {
                    console.log(e.target.responseText)
                    $("#progress").html(e.target.responseText);
                }
            },
            success: function(text) {
                console.log(text)
                $("#progress").html(text+"<h1>done!</h1>")
            }
        });
        e.preventDefault();
    });
});