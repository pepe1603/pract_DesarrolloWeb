

$(document).ready(function(){

    //console.log('Hola a tdos'+nombre);

    




        $('#btn-generar').click(function(){

                var primeras4;
            var nombre =$('#nom').val().substring(0,1).toUpperCase();
            var pater =$('#apep').val().substring(0,2).toUpperCase();
            var mater =$('#apem').val().substring(0,2).toUpperCase();
            var fecha =$('#fechaN').val();

            var año=$('#fechaN').val().substr(2,2);
            var mes = $('#fechaN').val().substr(5,2);
            var dia=$('#fechaN').val().substr(8,2);

            var aleatorio1= Math.floor(Math.random() * 3);//obtenemos un num1 leatorio del 0-9
            var aleatorio2= Math.floor(Math.random() * 3);//obtenemos un num2 leatorio del 0-9
            var aleatorioABC= Math.random();//obtenemos un num leatorio del 0-25 para el abcedario

            var abc='ABCDEFGHIJKLMNÑOPQRSTUVWXYZ';
            var letra = abc.substring(aleatorioABC, 1);
            primeras4 =pater+mater+nombre;
            var homoclave=aleatorio1+letra+aleatorio2;
            
            console.log('primeras 4 letras del RFC: '+primeras4+'homoclave; '+aleatorio1+
            ' ale2: '+aleatorio2+'letra: '+letra);
            var res=primeras4+año+mes+dia+homoclave;
            
            $('#res').val(res)
                
                
           
            
        });




        $('#btn-consultar').click(function(){

 var id_user =$('#id_user').val();


        $.ajax({
            url:'https://jsonplaceholder.typicode.com/users/'+id_user,
            metod:'get',
            success: function(data){
                $('#name').val(data.name);
                $('#username').val(data.username);
                $('#email').val(data.email);
                $('#address').val(data.address.city);
                $('#phone').val(data.phone);
                $('#website').val(data.website);
                

            }


        })
       


        });


        
});
