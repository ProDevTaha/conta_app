// :::::::::auto complete calc mentant HT::::::::::::::::::::::::: 
$('#M_HT').keyup(function(){ 
    let M_HT=$('#M_HT').val()*1;     
    var TVA=((M_HT)*(0.2));  
    $('#TVA').val(TVA.toFixed(2));  
    var TTC=(M_HT+TVA);   
    $('#M_TTC').val(TTC.toFixed(2));     
    
});  
// :::::::::::::::::::::::::::delete:::::::::::::::::::::::::::::
function Delete(id_TVA){     
if(window.confirm('Voulez-vous vraiment supprimer ?'))  
{
   $.ajax({    
    url:$('#delete').val(), 
    method:'POST',
    data:{id_TVA:id_TVA},   
    sweet:Swal.fire({ 
        position: 'top-center',
        icon: 'success',  
        title: 'Vous avez suprimer achat', 
        showConfirmButton: false,
        timer: 1500
    }), 
    success:function(){  
        load_TVA();  
        document.write(sweet); 
    }   
   });       
}    
}      
// :::::::::::::::::::::::insert && update:::::::::::::::::::::::::  
var btn=document.getElementById('save');
btn.addEventListener('click',function(){  
var ORDER=$('#ORDER').val();var FACT_NUM=$('#FACT_NUM').val();var DESIGNATION=$('#DESIGNATION').val();var M_HT=$('#M_HT').val(); 
var TVA=$('#TVA').val();var M_TTC=$('#M_TTC').val();var IF=$('#IF').val();var ICE_FRS=$('#ICE_FRS').val();var LIB_FRSS=$('#LIB_FRSS').val();  
var TAUX=$('#TAUX').val();var ID_PAIE=$('#ID_PAIE').val();var DATE_PAIE=$('#DATE_PAIE').val();var DATE_FAC=$('#DATE_FAC').val();var id_TVA=$('#id_TVA').val();  
if(id_TVA == "" && ORDER!='' && FACT_NUM!='' && DESIGNATION!='' && M_HT!='' && TVA!='' && M_TTC!='' && IF!='' && ICE_FRS!='' && LIB_FRSS!='' && TAUX!=''&& ID_PAIE!=''&& DATE_PAIE!=''&& DATE_FAC!=''){
$.ajax({
 url:$('#insert').val(), 
 method:'POST',         
 data:{ORDER,FACT_NUM,DESIGNATION,M_HT,TVA,M_TTC,IF,ICE_FRS,LIB_FRSS,TAUX,ID_PAIE,DATE_PAIE,DATE_FAC},
 sweet:Swal.fire({   
   position: 'top-center',
   icon: 'success',  
   title: 'Vous avez enregister TVA',   
   showConfirmButton: false,
   timer: 1500  
 }),  
 success:function(){  
    load_TVA();  
   document.write(sweet);  
 }
});       
}else if(id_TVA != "" && ORDER!='' && FACT_NUM!='' && DESIGNATION!='' && M_HT!='' && TVA!='' && M_TTC!='' && IF!='' && ICE_FRS!='' && LIB_FRSS!='' && TAUX!=''&& ID_PAIE!=''&& DATE_PAIE!=''&& DATE_FAC!=''){
$.ajax({
    url:$('#update').val(),     
    method:'POST', 
    data:{id_TVA,ORDER,FACT_NUM,DESIGNATION,M_HT,TVA,M_TTC,IF,ICE_FRS,LIB_FRSS,TAUX,ID_PAIE,DATE_PAIE,DATE_FAC}, 
    sweet:Swal.fire({ 
       position: 'top-center',
       icon: 'success',  
       title: 'Vous avez modifier TVA',   
       showConfirmButton: false,
       timer: 1500
    }),      
    success:function(data){   
       load_TVA();   
       document.write(sweet);
      
    } 
});      
}else{
sweet:Swal.fire({
   icon: 'error',
   title: 'Oops...',
   text: "Vous n'avez pas rempli tous les champs",
})
load_vent(); 
document.write(sweet);  
}                              
}); 
// ::::::::::::::::::evacuation modal:::::::::::::::::::
function insert(){
    $('#ORDER').val("");$('#DESIGNATION').val("");$('#FACT_NUM').val("");                                         
    $('#M_HT').val("");$('#TVA').val("");$('#M_TTC').val(""); $('#id_TVA').val("");                                          
    $('#IF').val("");$('#ICE_FRS').val(""); $('#LIB_FRSS').val("");$('#TAUX').val("");$('#ID_PAIE').val("");$('#DATE_PAIE').val("");$('#DATE_FAC').val("");    
} 
// ::::::::::::::::::::fill modal:::::::::::::::::::::::
function update(id_TVA,ORDER,DESIGNATION,FACT_NUM,M_HT,TVA,M_TTC,IF,ICE_FRS,LIB_FRSS,TAUX,ID_PAIE,DATE_PAIE,DATE_FACT){
$('#ORDER').val(ORDER);$('#DESIGNATION').val(DESIGNATION);$('#FACT_NUM').val(FACT_NUM);                                         
$('#M_HT').val(M_HT);$('#TVA').val(TVA);$('#M_TTC').val(M_TTC); $('#id_TVA').val(id_TVA);                                          
$('#IF').val(IF);$('#ICE_FRS').val(ICE_FRS); $('#LIB_FRSS').val(LIB_FRSS);$('#TAUX').val(TAUX);$('#ID_PAIE').val(ID_PAIE);$('#DATE_PAIE').val(DATE_PAIE);$('#DATE_FAC').val(DATE_FACT);   
}

// :::::::::::::::::::::::::::::::::::::::::::::::::::::::::::
$(document).ready(function(){
    $.datepicker.setDefaults({  
        dateFormat: 'yy-mm-dd'     
    });  
        
    $(function(){  
        $("#DATE_PAIE").datepicker();
        $("#DATE_FAC").datepicker();  
        $("#from_date").datepicker();
        $("#to_date").datepicker();   
    });   
});  