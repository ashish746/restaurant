
// session_start();


$(document).ready(function () {
    $("#item").click (function () {
      var category = $("#item").val();    
         
        $.ajax({
          url:"backend1.php",
          type:"POST",
          data:{
            item : category,
            action : "cat",
                },
          success:function(result){
            $("#as").html(result);
                }

                });
              });           
            

$(document).on("change","#select",function(){
  // $("#getitems").click (function (){
    //  var id = $_SESSION['id'].val();
    var item = $("#item").val();
    $("#buyitems").click (function (){
     var x = $("#select").val();
     var desc = $("#desc").val();
     var quantity = $("#quantity").val();
        // alert(x);

      $.ajax({
        url:"backend1.php",
        type:"POST",
        data:{
          item : item,
          y : x,
          desc : desc,
          quantity : quantity,
          action : "item",
        },
        success:function(result){
          alert(result);
          // $("#as").html(result);
        }

      })
    })
    // })
})
}); 
l