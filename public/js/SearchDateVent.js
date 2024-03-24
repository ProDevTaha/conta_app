$(document).ready(function(){ 
    //::::::::::::::::la date:::::::::::::::::::::   
    $(document).ready(function(){
      $.datepicker.setDefaults({  
          dateFormat: 'yy-mm-dd'     
      });  
          
      $(function(){  
        $("#date").datepicker();
        $("#date_échéance").datepicker();   
        $("#from_date").datepicker();  
        $("#to_date").datepicker();    
      });   
  }); 
    //:::::::::::::get TVA mHT mTTC:::::::::::::::   
      $(document).ready(function(){
        $.ajax({  
          url:$('#TMM').val(),   
          method:"POST",        
          success:function(data)  
          {  
            $('#tmm').html(data);       
          }      
        });  
      });    
    //::::::::::::::::::::::get FRS and Chantier from data base and fill select:::::::::::::::::::::::::::   
    $(document).ready(function(){ 
        $('.bi').click(function(){   
          $.ajax({    
            url:$('#autoCompleteClient').val(),    
            method:'POST',
          }).done(function(response){   
            $('#Client').html(response);  
          });   
        });   
      });       
    //:::::::::::::::search par date or client and get sum for search::::::::::::::::::::::::::    
   $('#filterDate').click(function(){  
      var from_date = $('#from_date').val();   
      var to_date = $('#to_date').val();
      var client = $('#Client').val(); 
      $.ajax({  
        url:$('#TMM').val(),      
        method:"POST",   
        data:{from_date:from_date,to_date:to_date,client:client},            
        success:function(data){ 
            console.log(data);
          $('#tmm').html(data);   
        }    
      }); 
      $.ajax({  
        url:$('#view').val(),      
        method:"POST",  
        data:{from_date:from_date,to_date:to_date,client:client},       
        success:function(data){  
            console.log(data);
          $('#table').html(data);  
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
 