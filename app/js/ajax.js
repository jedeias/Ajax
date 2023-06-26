let responseArray = false;

$(function() {

    $(".ArrayTrigger").on("click", function(){
        if (responseArray === false){

            $.ajax({
                url: "/ajax/app/PHP/array.php",
                success: function(result){
                    $(".response").html(result);
                    responseArray = true
                },
                error: function name(result) {
                    $(".response").html("Has a error in this request. Please try again");
                    responseArray = true
                }
            })
        }else{
            $(".response").html("");
            responseArray = false
        }
    });

})