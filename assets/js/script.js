function loadFeeds(){
    $("#feedContainer").empty();
    $.get("resources/modules/feed_cards.php", function (data, status) {
        $("#feedContainer").html(data);
        console.log("Get data from feed_cards.php. Status: " + status);
    });
}

$(document).ready(function(){
    
    loadFeeds();
    setInterval(loadFeeds, 300000);

    $("#importButton").click(function(event){
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
                    title: 'Success!',
                    text: jsonData.message,
                    type: 'success',
                    onClose: secondAlert,
                });
                function secondAlert(){
                    if (jsonData.insertion) {
                        Swal.fire({
                            timer: 3000,
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
        });
    });

});