$(document).ready(
    function(){
        $('#button').click(
            function(){
                var toAdd = $('input[name=ListItem]').val();
                 $('ol').append('<li>' + toAdd + '</li>');
            });
       
       $("input[name=ListItem]").keyup(function(event){
          if(event.keyCode == 13){
            $("#button").click();
          }         
      });
      
      $(document).on('click','li', function(){
        $(this).toggleClass('strike');    
      });
      $(document).on('dblclick','li', function(){
        $(this).fadeOut('slow');    
      });

      $('input').focus(function() {
        $(this).val('');
      });
      
      $('ol').sortable();  
      
    }
);