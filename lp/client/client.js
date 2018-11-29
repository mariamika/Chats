function listen(time) {
    time = time || 0;

    var data = {time: time};

    $.ajax({
        type: 'GET',
        data: data,
        url: 'http://longpollin/server/server.php',
        success: function(response){
            console.log(response);
            response = JSON.parse(response);
            $("#chat").html(response.data);
            listen(response.time);
        }
    });
}

$(function () {
   listen()
});