  $(document).ready(function(){ 
    $.ajax({  
      url:$('#TMM').val(),   
      method:"POST",        
      success:function(data){ 
        $('#tmm').html(data);       
      }      
    });      
  }); 
  //::::::::::::::::::::::::get TMM pendant date:::::::::::::::::::::
  $('#filterDate').click(function(){
    var from_date=$('#from_date').val(); 
    var to_date=$('#to_date').val();
    var Tva=$('#selectTva').val();  
    $.ajax({  
      url:$('#TMM').val(),   
      method:"POST", 
      data:{from_date,to_date,Tva},  
      success:function(data){  
        console.log(Tva);
        $('#tmm').html(data);       
      }      
    });      
  });
  //::::::::::::::::::::::::::::SVG:::::::::::::::::::::::::::::::::
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
  
  
  