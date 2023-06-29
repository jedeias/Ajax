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


$("#POST").submit(function(e){
    e.preventDefault();

    let user = $(".user").val();
    let text = $(".text").val();

    $(".text").val("");

    $.ajax({

        url: "/ajax/app/PHP/getRequest.php",
        method: "POST",
        data: {user: user,
                text: text},
        dataType: "json",                
    }).done(function(response){
        console.log(response);
        getComment();
    }).fail(function(xhr, status, error){
        console.error(error);
    });
    
});

function getComment() {
    $.ajax({
      url: "/ajax/app/PHP/send.php",
      success: function(result) {

        console.log(result);

        let arrayResponse = (result);
        let divContainer = $("<div></div>");
        
        divContainer.append("Name" + ' / ' + 'Comments');

        result.forEach(element => {
            console.log(element.name + ' / ' + element.text);
          let div = $("<div></div>").text(element.name + " / " +element.text);
          divContainer.append(div);
        });
  
        $(".userResponse").html(divContainer);
      },
      error: function(xhr, status, error) {
        console.error(error);
      }
    });
  }

  getComment();
