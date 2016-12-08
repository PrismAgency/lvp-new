$().ready(function ($) {
        
       console.log("Ready");
       var all_datas = document.getElementsByClassName("slider_images");
       var nbr_datas = all_datas.length -1;
       var i;
       
       //Evenement Open Modal
       $( ".slider_open" ).click(function() {
           i = parseInt(this.getAttribute("id"));
           update();
            $("#overlay").show();
       });
              
       //Evenement Close Modal
        $( ".slider_close" ).click(function() {
            $("#overlay").hide();
       });
       
});
