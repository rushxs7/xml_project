function loadFeeds(){
    $("#feedContainer").empty();
    $.get("resources/modules/feed_cards.php", function (data, status) {
        $("#feedContainer").html(data);
        console.log("Get data from feed_cards.php. Status: " + status);
    });
}

$(document).ready(function(){
    
    loadFeeds();
    // setInterval(loadFeeds, 10000);

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
                    timer: 5000,
                    showConfirmButton: false,
                    title: 'Success!',
                    text: jsonData.message,
                    type: 'success',
                })
            }else{
                Swal.fire({
                    toast: true,
                    position: 'top-end',
                    timer: 5000,
                    showConfirmButton: false,
                    title: 'Error!',
                    text: jsonData.message,
                    type: 'error',
                })
            }
        });
    });

});