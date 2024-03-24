function DeleteAchat(id_Achat){    
    if(window.confirm('Voulez-vous vraiment supprimer ?')) 
    {
       $.ajax({  
        url:$('#deleteAchat').val(), 
        method:'POST',
        data:{id_Achat:id_Achat},
        sweet:Swal.fire({ 
            position: 'top-center',
            icon: 'success',  
            title: 'Vous avez suprimer achat', 
            showConfirmButton: false,
            timer: 1500
        }), 
        success:function(){  
            load_data();
            document.write(sweet); 
        }   
       });       
    }    
}  

// ::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::
$(document).ready(function(){  
    $('#addAchat').click(function(e){  
        e.preventDefault(); 
        var date=$('#date').val();var designation=$('#Designation').val();var type=$('#Type').val();
        var frs=$('#frs').val();var Quantité=$('#Quantité').val(); var prix_Unitaire=$('#prix_Unitaire').val();
        var id_Achat=$('#id_Achat').val();
        var Mantant_HT=$('#Mantant_HT').val(); var Chantier=$('#Chantier').val();
       
        if(id_Achat == "" && date != ''&& designation != ''&& type != ''&& frs != ''&& Quantité != '' && prix_Unitaire !=''  &&  Mantant_HT !='' && Chantier != ''){
            $.ajax({  
                url:$('#insetAchat').val(),  
                method:'POST',    
                data:{date:date,designation:designation,type:type,frs:frs,Quantité:Quantité,prix_Unitaire:prix_Unitaire,Mantant_HT:Mantant_HT,Chantier:Chantier},
                sweet:Swal.fire({
                    position: 'top-center',
                    icon: 'success',
                    title: 'Vous avez enregistrer achat',
                    showConfirmButton: false,
                    timer: 1500
                }),    
                success:function(){
                    load_data(); 
                    document.write(sweet);
                }     
            });  
        }else if(id_Achat != "" && date != '' && designation != ''&& type != ''&& frs != ''&& Quantité != '' && prix_Unitaire !='' &&  Mantant_HT !='' && Chantier != ''){  
            $.ajax({
                url:$('#modifyAchat').val(),     
                method:'POST',  
                data:{id_Achat:id_Achat,date:date,designation:designation,type:type,frs:frs,Quantité:Quantité,prix_Unitaire:prix_Unitaire,Mantant_HT:Mantant_HT,Chantier:Chantier},
                swee:Swal.fire({
                    position: 'top-center',
                    icon: 'success',
                    title: 'Vous avez enregistrer achat',
                    showConfirmButton: false,
                    timer: 1500
                }),    
                success:function(){
                    load_data();
                    document.write(swee);  
                }      
            });   
        }else{   
            sweet:Swal.fire({
                icon: 'error',
                title: 'Oops...',
                text: "Vous n'avez pas rempli tous les champs",
            })
            load_data();
            document.write(sweet); 
        }  
    });   
});  

function insertAchat(){  
    document.getElementById('date').value="";  
    document.getElementById('Designation').value="";
    document.getElementById('Type').value="TYPE"; 
    document.getElementById('frs').value="";
    document.getElementById('Quantité').value="";
    document.getElementById('prix_Unitaire').value="";
    document.getElementById('Mantant_HT').value="";
    document.getElementById('Chantier').value="";
    document.getElementById('id_Achat').value=""; 
}  

function UpdateAchat(id_Achat,date,designation,Type,Fas,Quantité,prix_Unitaire,Mantant_HT,Chantie){ 
    document.getElementById('exampleModalLabel').innerText='modifier achat'; 
    document.getElementById('date').value=date; 
    document.getElementById('Designation').value=designation; 
    document.getElementById('Type').value=Type; 
    document.getElementById('frs').value=Fas;
    document.getElementById('Quantité').value=Quantité;
    document.getElementById('prix_Unitaire').value=prix_Unitaire;
    document.getElementById('Mantant_HT').value=Mantant_HT;
    document.getElementById('Chantier').value=Chantie;
    document.getElementById('id_Achat').value=id_Achat; 
}   


  