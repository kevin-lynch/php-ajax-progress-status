$( document ).ready(function() {
    var jsonResponse = '', lastResponseLen = false;

    $("form").submit(function( e ) {
        $('.ajax-res').slideDown();
        $.ajax({
            url: $(this).attr('action'),
            xhrFields: {
                onprogress: function(e) {
                    var thisResponse, response = e.currentTarget.response;
                    if(lastResponseLen === false) {
                        thisResponse = response;
                        lastResponseLen = response.length;
                    } else {
                        thisResponse = response.substring(lastResponseLen);
                        lastResponseLen = response.length;
                    }

                    jsonResponse = JSON.parse(thisResponse);

                    $('.ajax-res p').text('Processed '+jsonResponse.count+' of '+jsonResponse.total);
                    $(".progress-bar").css('width', jsonResponse.progress+'%').text(jsonResponse.progress+'%');
                }
            },
            success: function(text) {
                console.log('done!');
                $('.ajax-res p').text('Process completed successfully');
                $(".progress-bar").css({
                    width:'100%',
                    backgroundColor: 'green'
                });
            }
        });
        e.preventDefault();
    });
});