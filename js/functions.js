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

experimental
$(document).ready(function() {
    var x=1;
    $('#submit').click(function(){ 
      //\\
   
         var fieldValue = document.getElementById('username').value;
   
         sessionStorage.setItem('username', fieldValue);
   
         var fieldValue = document.getElementById('password').value;
   
         sessionStorage.setItem('password', fieldValue); 
     //\\
     //\\
     });
     $('#disconnect').click(function(){
      //\\
      document.getElementById('username').value='';
      sessionStorage.removeItem('username');
      document.getElementById('password').value='';
      sessionStorage.removeItem('password');
      //\\
      //\\
     });
     
    if (x==1)
   
           { 
     $.mobile.changePage("#home");
     
     
    }
   
         else {
     $('#submit').click(function(){ 
      //\\
   
         var fieldValue = document.getElementById('username').value;
   
         sessionStorage.setItem('username', fieldValue);
   
         var fieldValue = document.getElementById('password').value;
   
         sessionStorage.setItem('password', fieldValue); 
     //\\
     //\\
     });
     $('#disconnect').click(function(){
      //\\
      document.getElementById('username').value='';
      sessionStorage.removeItem('username');
      document.getElementById('password').value='';
      sessionStorage.removeItem('password');
      //\\
      //\\
   
         }); }
   
    
    
   });
   