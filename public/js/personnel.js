load_table();
function load_table(search=null,page=null){ 
    $.ajax({
        url:$('#view').val(),
        method:'POST',
        data:{search,page},  
        success:function(data){  
            $('#table').html(data); 
        }
    });
}
function Delete(id_persone){     
    if(window.confirm('Voulez-vous vraiment supprimer ?'))  
    {
       $.ajax({    
        url:$('#delete').val(), 
        method:'POST',
        data:{id_persone},    
        sweet:Swal.fire({ 
            position: 'top-center',
            icon: 'success',  
            title: 'Vous avez suprimer cette persone', 
            showConfirmButton: false,
            timer: 1500
        }), 
        success:function(){  
            load_table();  
            document.write(sweet);  
        }   
       });       
    }    
    }      

    $('#Ajouter').click(function(){
       var date=$('#date').val();var nom=$('#nom').val();var durée=$('#durée').val();var absence=$('#absence').val();var justification=$('#justification').val();var id_persone=$('#id_persone').val();
       //console.log(date,nom,durée,absence,justification) 
       if(id_persone =="" && date !="" && nom !="" && durée !="" && absence !="" && justification !=""){
           $.ajax({
                url:$('#insert').val(),
                method:'POST',
                sweet:Swal.fire({ 
                    position: 'top-center',
                    icon: 'success',  
                    title: 'Vous avez enregistrer cette persone', 
                    showConfirmButton: false,
                    timer: 1500
                }),   
                data:{date,nom,durée,absence,justification},
                success:function(){
                  load_table();
                  document.write(sweet);   
               }
           });
       }else if( id_persone !="" && date !="" && nom !="" && durée !="" && absence !="" && justification !=""){
            $.ajax({
                url:$('#edit').val(),
                method:'POST',
                sweet:Swal.fire({ 
                    position: 'top-center',
                    icon: 'success',  
                    title: 'Vous avez enregistrer cette persone', 
                    showConfirmButton: false,
                    timer: 1500
                }),   
                data:{id_persone,date,nom,durée,absence,justification},
                success:function(){ 
                  load_table();
                  document.write(sweet);   
               }
            });  
       }else{
        sweet:Swal.fire({
            icon: 'error',
            title: 'Oops...',
            text: "Vous n'avez pas rempli tous les champs",
        })
        load_table();  
        document.write(sweet);  
       }
    });

    function empty(){
        $('#date').val("");$('#nom').val("");$('#durée').val("");$('#absence').val("");$('#justification').val("");$('#id_persone').val("");
    }
    function fill(id_persone,date,nom,absence,durée,justification){ 
        $('#date').val(date);$('#nom').val(nom);$('#durée').val(durée);$('#absence').val(absence);$('#justification').val(justification);$('#id_persone').val(id_persone);
    }

    $('#search').keyup(function(){
        var search=$('#search').val();
        load_table(search);
    });
    // ::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::
    $(document).ready(function(){ 
        $(document).on('click','.pagination',function(){
          var page=$(this).attr("id"); 
          load_table(null,page)
        });      
    });   
    // ::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::: 
    $.datepicker.setDefaults({  
        dateFormat: 'yy-mm-dd'    
    });   

    $(function(){  
        $("#date").datepicker();  
        $("#absence").datepicker();  
    });      