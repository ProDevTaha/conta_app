// :::::::::::::::::::::::View::::::::::::::::::::::::
// load_vent(); 
// function load_vent(){
//     $.ajax({ 
//         url:$('#select').val(),    
//         method:'POST',
//     })   
//     .done(function(response){ 
//         $('#table').html(response);   
//     });            
// }                         
// :::::::::auto complete calc mentant HT::::::::::::::::::::::::: 
    $('#quantité').keyup(function(){
        var unitaire=$('#prix_unitaire').val(); 
        var quantité=$(this).val();
        var result=(quantité)*(unitaire);
        $('#mentant_HT').val(result); 
    });
// :::::::::::::::::::::::::::delete:::::::::::::::::::::::::::::
function Delete(id_vents){    
    if(window.confirm('Voulez-vous vraiment supprimer ?')) 
    {
       $.ajax({    
        url:$('#delete').val(), 
        method:'POST',
        data:{id_vents:id_vents},  
        sweet:Swal.fire({ 
            position: 'top-center',
            icon: 'success',  
            title: 'Vous avez suprimer achat', 
            showConfirmButton: false,
            timer: 1500
        }), 
        success:function(){  
            load_vent(); 
            document.write(sweet); 
        }   
       });       
    }    
}  
// :::::::::::::::::::::::insert && update:::::::::::::::::::::::::  
var btn=document.getElementById('save');
btn.addEventListener('click',function(){ 
    var client=$('#client').val();var  date=$('#date').val();var date_échéance=$('#date_échéance').val();                                         
    var prix_unitaire=$('#prix_unitaire').val();var  mentant_HT=$('#mentant_HT').val();var  situation=$('#situation').val();                                         
    var modde_reg=$('#modde_reg').val();var  Type=$('#Type').val();var  quantité=$('#quantité').val();var id_vent=$('#id_vent').val() 
    
if(id_vent == "" && client!='' && prix_unitaire!='' && modde_reg!='' && date!='' && mentant_HT!='' && quantité!='' && date_échéance!='' && situation!='' && Type!=''){
    $.ajax({
      url:$('#insert').val(),
      method:'POST',        
      data:{client,prix_unitaire,modde_reg,date,mentant_HT,quantité,date_échéance,situation,Type},
      sweet:Swal.fire({ 
        position: 'top-center',
        icon: 'success',  
        title: 'Vous avez enregister vent', 
        showConfirmButton: false,
        timer: 1500 
      }),  
      success:function(){ 
        load_vent(); 
        document.write(sweet); 
      }
    });      
}else if(id_vent !='' && client!='' && prix_unitaire!='' && modde_reg!='' && date!='' && mentant_HT!='' && quantité!='' && date_échéance!='' && situation!='' && Type!=''){
    $.ajax({
        url:$('#edit').val(), 
        method:'POST',
        data:{client,prix_unitaire,modde_reg,date,mentant_HT,quantité,date_échéance,situation,Type,id_vent},
        sweet:Swal.fire({ 
            position: 'top-center',
            icon: 'success',  
            title: 'Vous avez enregister vent',  
            showConfirmButton: false,
            timer: 1500
        }),  
        success:function(){
            load_vent(); 
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
    $('#client').val("");$('#date').val("");$('#date_échéance').val("");                                         
    $('#prix_unitaire').val("");$('#mentant_HT').val("");$('#id_vent').val("");                                          
    $('#quantité').val("");
}
// ::::::::::::::::::::fill modal:::::::::::::::::::::::
function update(id_vent,client,date,modde_Reg,situation,date_échéance,type,quantité,prix_unitaire,manant_HT){
    $('#client').val(client);$('#date').val(date);$('#date_échéance').val(date_échéance);                                         
    $('#prix_unitaire').val(prix_unitaire);$('#mentant_HT').val(manant_HT);$('#type').val(type);                                          
    $('#quantité').val(quantité);$('#id_vent').val(id_vent); $('#modde_Reg').val(modde_Reg); $('#situation').val(situation);     
}