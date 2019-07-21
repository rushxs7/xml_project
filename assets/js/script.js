function loadFeeds(){
    $("#feedContainer").empty();
    $("#animator").show();
    $("#reloadButton i").addClass("fa-spin");
    $.get("resources/modules/feed_cards.php", function (data, status) {
        $("#feedContainer").html(data);
        console.log("Get data from feed_cards.php. Status: " + status);
    }).done(function(){
        $("#reloadButton i").removeClass("fa-spin");
        $("#animator").fadeOut(500, function(){
            $(this).hide();
        });
        $("animator").fadeIn(200);
    });
    setInterval(loadFeeds, 600 * 1000);
}

function deleteSource(id){
    event.preventDefault();
    var sourceid = id;
    if(confirm('Are you sure you want to remove this source?')){
        $.post("app/delete_source.php", { feed:sourceid }, function(data){
            var jsonData = JSON.parse(data);
            if(jsonData.deletion){
                Swal.fire({
                    toast: true,
                    position: 'top-end',
                    timer: 4000,
                    showConfirmButton: false,
                    title: 'Success!',
                    text: jsonData.message,
                    type: 'success',
                    onClose: ()=>{
                        loadFeeds();
                    }
                });
            }else{
                Swal.fire({
                    toast: true,
                    position: 'top-end',
                    timer: 3000,
                    showConfirmButton: false,
                    title: 'Error!',
                    text: jsonData.message,
                    type: 'error',
                });
            }
        });
        // console.log(sourceId);
    }else{
        // console.log('pressed cancel');
        return false;
    }
}

$(document).ready(function(){
    
    loadFeeds();

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