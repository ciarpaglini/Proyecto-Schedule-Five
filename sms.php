
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Document</title>

    <meta charset="UTF-8">
    <meta name="viewport" content="width, initial-scale=1.0">
    </head>  
    <body>
    <div class="row">
        <div class="col-sm-12 col-12">
          <div class="card">
            <h3 class="text-center card-header text-black">Nuevo Email</h3>
            <div class="row">
              <form class="card-body" action="localhost:8888/sms.html" method="POST" enctype="multipart/form-data">
                <div class="col-md-12">
                    <div>
                    <input type="active" name="active" id="active" value="" placeholder="active">

                    </div>
                    <br/>
                    <div>
                    <input type="nombre" name="nombre" id="nombre" value="" placeholder="nombre">

                    </div>
                    <br/>
                    <div>
                    <input type="apellido" name="apellido" id="apellido" value="" placeholder="apellido">

                    </div>
                    <br/>

                    <select class="form-control" name="worker" id="worker">
                    <option value="">-- Select --</option>
                    <option value="multiple|opciones|enviadas|aqui"> Multiples</option>
                    </select>

                    <br/>

                  <div class="form-group-textarea">
                    <textarea class="form-control" name="message" id="message" placeholder="Nuevo Horario / Lunes -> 10:00am/3:00pm -> Posición -> Lugar." required="required" data-validation-required-message="Please enter a message."></textarea>
                    <p class="help-block text-danger"></p>
</div>
                </div>
                <input class="btn btn-success" onclick="processData()" type="submit" value="Enviar y Guardar" />
              </form>
            </div>
          </div>
        </div>
      </div>
    

<script>
    function processData(){
 x1 = document.getElementById("active").value;
 v1 = document.getElementById("nombre").value;
 a1 = document.getElementById("apellido").value;
 x2 = document.getElementById("message").value;
 z2 = document.getElementById("worker").value;

 var strArray = z2.split("|");
        
        // Display array values on page
        for(var i = 0; i < strArray.length; i++){
            document.write("<p>" + strArray[i] + "</p>");
        }


    var r = [x1, x2, v1, a1];
    

    console.log(r);
    console.log(r[0]);
    console.log(strArray[1]);
    console.log(strArray);

    
}
</script>
    
</body>
</html>