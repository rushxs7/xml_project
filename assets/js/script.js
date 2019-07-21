function loadFeeds(){
    $("#feedContainer").empty();
    $("#animator").show();
    $.get("resources/modules/feed_cards.php", function (data, status) {
        $("#feedContainer").html(data);
        console.log("Get data from feed_cards.php. Status: " + status);
    }).done(function(){
        $("#animator").fadeOut(500, function(){
            $(this).hide();
        });
        $("animator").fadeIn(200);
    });
}

$(document).ready(function(){
    
    loadFeeds();
    setInterval(loadFeeds, 300000);

    $("#importButton").click(function(event){
        $("#importIcon").hide();
        $("#loadingIcon").show();
        var url = $("#importUrl").val();
        $("#importUrl").val(null);
        $.post("app/import_rss.php", {
            urlPost: url,
        }, function(data){
            var jsonData = JSON.parse(data);
            console.log(jsonData);
            if(jsonData.validation){
                Swal.fire({
                    toast: true,
                    position: 'top-end',
                    timer: 3000,
                    showConfirmButton: false,
                    title: 'Valid!',
                    text: jsonData.message,
                    type: 'success',
                    onClose: secondAlert,
                });
                function secondAlert(){
                    if (jsonData.insertion) {
                        Swal.fire({
                            timer: 2000,
                            showConfirmButton: false,
                            title: 'Successful Import!',
                            text: jsonData.insertionMessage,
                            type: 'success',
                        })
                        loadFeeds();
                    } else {
                        Swal.fire({
                            toast: true,
                            position: 'top-end',
                            timer: 3000,
                            showConfirmButton: false,
                            title: 'Error!',
                            text: 'Check the log for details.',
                            type: 'error',
                        })
                        console.log(jsonData.insertionMessage);
                    }
                }
            }else{
                Swal.fire({
                    toast: true,
                    position: 'top-end',
                    timer: 3000,
                    showConfirmButton: false,
                    title: 'Error!',
                    text: jsonData.message,
                    type: 'error',
                })
            }
        }).done(function(){
            $("#importIcon").show();
            $("#loadingIcon").hide();
        });
    });

});