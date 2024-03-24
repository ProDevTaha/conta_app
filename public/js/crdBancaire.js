    view();
    function view(){
        $.ajax({
            url:$('#view').val(),
            method:'post',
            success:function(data){  
                $('#table').html(data);  
            }  
        });
    }    
   
    var savee=document.getElementById('save');
    savee.addEventListener('click',save);  
    function save(){  
        var compta_date= document.getElementById('compta_date').value;
        var compta_libelle = document.getElementById('compta_libelle').value;
        var compta_debit = document.getElementById('compta_debit').value;
        var compta_credit = document.getElementById('compta_credit').value;
        var banque_date= document.getElementById('banque_date').value;
        var banque_libelle= document.getElementById('banque_libelle').value;
        var banque_debit= document.getElementById('banque_debit').value;
        var banque_credit = document.getElementById('banque_credit').value; 
        $.ajax({  
            url:$('#insert').val(), 
            method:'POST', 
            data:{compta_date,compta_libelle,compta_debit,compta_credit,banque_date,banque_libelle,banque_debit,banque_credit}, 
            success:function(data){ 
                console.log(data); 
                view(); 
            }  
        });   
    } 

    function Delete(id_bancaire){     
        if(window.confirm('Voulez-vous vraiment supprimer ?')){ 
           $.ajax({  
            url:$('#delete').val(), 
            method:'POST',
            data:{id_bancaire}, 
            success:function(data){  
                console.log(data);
                view();
            }   
           });       
        }    
    }  
    
    function edit(){
        var id_bancaireb=$('#bancaire').val();var Date_comptab=$('#Date_compta').val();var libelle_comptab=$('#libelle_compta').val();var Debit_comptab=$('#Debit_compta').val();var credi_comptab=$('#credi_compta').val();var Date_banqueb=$('#Date_banque').val();var libelle_banqueb=$('#libelle_banque').val();var Debit_banqueb=$('#Debit_banque').val();var credi_banqueb=$('#credi_banque').val();
        $.ajax({
            url:$('#edit').val(),
            method:'POST',
            data:{id_bancaireb,Date_comptab,libelle_comptab,Debit_comptab,credi_comptab,Date_banqueb,libelle_banqueb,Debit_banqueb,credi_banqueb},
            success:function(data){
                console.log(data)
               view(); 
            }
        });
    }
    let btn=document.getElementById('savebanque'); 
    btn.addEventListener('click',edit); 

    function fill(id_bancaireb,Date_comptab,libelle_comptab,Debit_comptab,credi_comptab,Date_banqueb,libelle_banqueb,Debit_banqueb,credi_banqueb){ 
        $('#bancaire').val(id_bancaireb);$('#Date_compta').val(Date_comptab);$('#libelle_compta').val(libelle_comptab);$('#Debit_compta').val(Debit_comptab);$('#credi_compta').val(credi_comptab);$('#Date_banque').val(Date_banqueb);$('#libelle_banque').val(libelle_banqueb);$('#Debit_banque').val(Debit_banqueb);$('#credi_banque').val(credi_banqueb);
    } 
    
    
  
  