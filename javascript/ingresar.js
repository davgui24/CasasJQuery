  $(document).ready(function(){

    listarCasas = function(){

      $.ajax({
        url: 'server/listar.php'
      }).done(function(datos) {
        if (datos) {
          location.reload(true);
          let data = JSON.parse(datos)


          for(var i=0;i<data.length;i++){
                // añadimos las columnas
                let codigo = data[i].codigo;
                let direccion = data[i].direccion;v
                let propietario = data[i].propietario;
                let valor = data[i].valor;
                $("#tbody").html('');
                $("#tbody").append("<tr><td>"+data[i].codigo+"</td><td>"+data[i].direccion+"</td><td>"+data[i].propietario+"</td><td>"+data[i].valor+"</td><td><img src='img/edit.png' id='id"+data[i].codigo+"' class='ancla' style='width: 20px; height: 20px;'>&nbsp;&nbsp;<a href='server/eliminar.php?codigo="+data[i].codigo+"'><img src='img/garbage.png' style='width: 20px; height: 20px;'></a></td></tr>");

                $("#id"+data[i].codigo).click(function(){
                  $("#formulario1").hide();
                  $("#formulario2").show();
                  $("#atras").show();
                  $("#codigo2").val(codigo);
                  $("#direccion2").val(direccion);
                  $("#propietario2").val(propietario);
                  $("#valor2").val(valor);
                })
              }
            }else{
              alert('Error al Editar');

            }
        // $("#tbody").html(data);
      })
        // $("#nombre").val("");
        // $("#edad").val("");

      }




      $("#guardar").click(function(){
        var formulario = $("#formulario").serialize();
        $.ajax({
          url: 'server/ingresar.php',
          type: 'POST',
          data: formulario
        }).done(function(datos) {
          if (datos) {
          // listarCasas();
          alert('La casa fué creada con éxito');
          //  $("#tbody").html('');
          listarCasas();

        }else{
          alert('Error al ingresar');
        }
        // $("#tbody").html(datos);
        $("#codigo").val("");
        $("#direccion").val("");
        $("#propietario").val("");
        $("#valor").val("");
      })
        // $("#nombre").val("");
        // $("#edad").val("");
        
      })
    });