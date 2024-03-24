load_vent();
function load_vent(search){
  $.ajax({
    url:$('#view').val(),   
      method:'POST',
      data:{search:search},   
      success:function(data){
        $('#table').html(data);
      } 
  });  
}    
  
  $('#search').keyup(function(){
    var search=$('#search').val(); 
    load_vent(search); 
  }); 
  
  // ::::::::::::::::::::::controle page::::::::::::::::::::::::::::::
  load_table(); 
function load_table(page){  
    
  $.ajax({ 
    url:$('#view').val(),   
    method:'POST', 
    data:{page:page},    
    success:function(data){   
      $('#table').html(data);    
    }  
  });             
}   
$(document).ready(function(){ 
  $(document).on('click','.pagination',function(){
    var page=$(this).attr("id"); 
    load_table(page) 
  });    
});  

// ::::::::::::::::::::::::::::::::::::::::::::
$('#imprimer').click(function(){
  $('#imprimer').css('visibility','hidden'); 
  $('#form').css('visibility','visible');
}); 
