$(document).ready(function(){  
    // :::::::::::::get TVA mHT mTTC::::::::::::::: 
      $(document).ready(function(){
          $.ajax({  
              url:$('#SUM').val(),  
              method:"POST",       
              success:function(data)  
              {  
                $('#tmm').html(data);     
              }    
          }); 
      });   
    //::::::::::::::::::::::get FRS and Chantier from data base and fill select::::::::::::::::::::::::::::::::::
    $(document).ready(function(){ 
      $('.bi').click(function(){   
       $.ajax({ 
        url: $('#autoCompleteFRS').val(),
        method:'POST',
       }).done(function(response){ 
         $('#frsR').html(response);   
       });  
       $.ajax({ 
        url:$('#autoCompleteChentier').val(), 
        method:'POST',
       }).done(function(response){ 
         $('#ChantierR').html(response);   
       });  
      });  
    });         
    //:::::::::::::::search par date or frs and chantier and get sum for search:::::::::::::::::::::::::::  
      $('#filterDate').click(function(){  
        var from_date = $('#from_date').val();   
        var to_date = $('#to_date').val();
        var frsR = $('#frsR').val();   
        var ChantierR = $('#ChantierR').val();  
        $.ajax({  
          url:$('#SUM').val(),    
          method:"POST",   
          data:{from_date:from_date,to_date:to_date,frsR:frsR,ChantierR:ChantierR},        
          success:function(data){ 
            console.log(data);                
            $('#tmm').html(data);
          }    
        }); 
          $.ajax({  
            url:$('#searchDate').val(),   
            method:"POST",  
            data:{from_date:from_date,to_date:to_date,frsR:frsR,ChantierR:ChantierR},     
            success:function(data){  
              console.log(data);        
              $('#fetch').html(data); 
            }  
          });   
      });               
});     

  //:::::::::::::::::::::::::::::::::::::::::SVG:::::::::::::::::::::::::::::::::::::::::
  $(document).ready(function(){
    $('#precise').css('display','none');  
    $('#sélectionner').click(function(){  
      $('#precise').css('display','block');
    });
    $('#sélectionner').dblclick(function(){  
      $('#precise').css('display','none');   
    });   
    $('.search-btn').click(function(){
      $('#from_date').val("");   
      $('#to_date').val("");
      $('#frsR').val("");   
      $('#ChantierR').val(""); 
      $('#precise').css('display','none'); 
    });
  }); 
 