<h3 class="text-center card-header">Bienvenido: <?= $_SESSION['identity']->name ?> <?= $_SESSION['identity']->surname ?></h3>

<div class="container">

  <div class="row">
    <div class="col-lg-8 col-12">
      <!--==================================================================================-->
      <!--Start agregar horario-->
      <div class="row">
        <div class="col-sm-12 col-12">
          <div class="card">
            <h3 class="text-center card-header text-black">Nuevo Email</h3>
            <div class="row">
              <form class="card-body" action="<?= base_url ?>schedule/save_send_email" method="POST" enctype="multipart/form-data">
                <div class="col-md-12">
                  <div class="form-group-textarea">
                    <textarea class="form-control" name="message" id="message" placeholder="Nuevo Horario / Lunes -> 10:00am/3:00pm -> Posición -> Lugar." required="required" data-validation-required-message="Please enter a message."></textarea>
                    <p class="help-block text-danger"></p>
                  </div>
                </div>
                <div class="col-md-12">
                  <div class="form-group">
                    <label for="location1" class="col-form-label text-black">Seleccione Trabajador</label>
                    <?php $worker_show = Utils::showWorkers(); ?>
                    <select class="form-control" name="worker" id="worker">
                    <option value="">-- Select --</option>
                      <?php while ($wor = $worker_show->fetch_object()) : ?>
                        <option value="<?=$wor->id?>|<?=$wor->name?>|<?=$wor->surname?>|<?=$wor->email?>">
                          <?=$wor->name?> <?=$wor->surname?> / <?=$wor->email?>
                        </option>
                      <?php endwhile; ?>
                    </select>
                  </div>
                </div>
                <input type="hidden" name="active" id="active" value="falso">
                <?php $code = Utils::codeId(); ?>
                <input name="code" id='code' value='<?= $code ?>' type='hidden' required>
                <input class="btn btn-success" type="submit" value="Enviar y Guardar" />
              </form>
            </div>
          </div>
        </div>
      </div>
      <br/>
      <br/>

      <div class="row">
        <div class="col-sm-12 col-12">
          <div class="card">
            <h3 class="text-center card-header text-black">Nuevo SMS</h3>
            <div class="row">
              <form class="card-body" action="<?= base_url ?>schedule/save_send_sms" method="POST" enctype="multipart/form-data">
                <div class="col-md-12">
                  <div class="form-group-textarea">
                    <textarea class="form-control" name="message" id="message" placeholder="Nuevo Horario / Lunes -> 10:00am/3:00pm -> Posición -> Lugar." required="required" data-validation-required-message="Please enter a message."></textarea>
                    <p class="help-block text-danger"></p>
                  </div>
                </div>
                <div class="col-md-12">
                  <div class="form-group">
                    <label for="location1" class="col-form-label text-black">Seleccione Trabajador</label>
                    <?php $worker_show = Utils::showWorkers(); ?>
                    <select class="form-control" name="worker" id="worker">
                    <option value="">-- Select --</option>
                      <?php while ($wor = $worker_show->fetch_object()) : ?>
                        <option value="<?=$wor->id?>|<?=$wor->name?>|<?=$wor->surname?>|<?=$wor->phone?>">
                          <?=$wor->name?> <?=$wor->surname?> / <?=$wor->phone?>
                        </option>
                      <?php endwhile; ?>
                    </select>
                  </div>
                </div>
                <input type="hidden" name="active" id="active" value="falso">
                <?php $code = Utils::codeId(); ?>
                <input name="code" id='code' value='<?= $code ?>' type='hidden' required>
                <input class="btn btn-success" type="submit" value="Enviar y Guardar" />
              </form>
            </div>
          </div>
        </div>
      </div>
      
      <!--end agregar horario-->
      <!--==================================================================================-->
      <!--start mostrar workers-->
      <div class="row">
        <div class="col-md-12 col-12">
          <div class="card">
        
            <div class="row text-black">
              <div class="col-md-12">

              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <hr>
    <!--end mostrar worker-->
    <!--==================================================================================-->
    <!--start agregar worker-->
    <div class="col-lg-4 col-12">
      <div class="row mx-0">
        <div class="col-12 card bg-light mx-auto">

          <?php if (isset($edit) && isset($pro) && is_object($pro)) : ?>
            <h3 class="text-center card-header text-black">Editar Trabajador</h3>
            <?php $url_action = base_url . "worker/save&id=" . $pro->id; ?>

          <?php else : ?>
            <h3 class="text-center card-header text-black">Nuevo Trabajador</h3>
            <?php $url_action = base_url . "worker/save"; ?>
          <?php endif; ?>

          <form class="card-body" action="<?= $url_action ?>" method="POST" enctype="multipart/form-data">
            <div class="form-group row">
              <label for="name" class="col-form-label text-black">Nombre</label>
              <input class="form-control" name="name" id="name" type="text" required value="<?= isset($pro) && is_object($pro) ? $pro->name : ''; ?>" />
            </div>

            <div class="form-group row">
              <label for="surname" class="col-form-label text-black">Apellido</label>
              <input class="form-control" name="surname" id="surname" type="text" required value="<?= isset($pro) && is_object($pro) ? $pro->surname : ''; ?>" />
            </div>

            <div class="form-group row">
              <label for="email" class="col-form-label text-black">Email</label>
              <input class="form-control" name="email" id="email" type="email" required value="<?= isset($pro) && is_object($pro) ? $pro->email : ''; ?>" />
            </div>

            <div class="form-group row">
              <label for="phone" class="col-form-label text-black">Teléfono</label><small>Format: 1234567890 usar codigo pais, sin espacios </small>
              <input class="form-control" name="phone" id="phone" type="tel" required value="<?= isset($pro) && is_object($pro) ? $pro->email : ''; ?>" />
            </div>

            <div class="form-group row">
              <label for="image" class="col-form-label text-black">Image</label>
              <?php if (isset($pro) && is_object($pro) && !empty($pro->image)) : ?>
                <img src="<?= base_url ?>uploads/images/<?= $pro->image ?>" />
              <?php endif; ?>
              <input class="text-black" name="image" id="image" type="file" />
            </div>

            <input class="btn btn-success" onclick="processData()" type="submit" value="Guardar" />
          </form>

          <!--<form class="card-body">
            <div class="form-group row">
              <label for="location1" class="col-form-label">Location</label>
              <select class="form-control" name="location" id="location1">
                <option value="">Any</option>
                <option value="">1</option>
                <option value="">2</option>
              </select>
            </div>
            <div class="form-group row">
              <label for="pricefrom" class="col-form-label">Price From</label>
              <div class="input-group">
                <div class="input-group-prepend">
                  <div class="input-group-text" id="basic-addon1">$</div>
                </div>
                <input type="text" class="form-control" id="pricefrom" aria-describedby="basic-addon1">
              </div>
            </div>
            <div class="form-group row">
              <label for="priceto" class="col-form-label">Price To</label>
              <div class="input-group">
                <div class="input-group-prepend">
                  <div class="input-group-text" id="basic-addon2">$</div>
                </div>
                <input type="text" class="form-control" id="priceto" aria-describedby="basic-addon2">
              </div>
            </div>
            <p class="text-center"><a href="#" class="btn btn-danger" role="button">Search </a></p>
          </form>-->
          <!--end form-->
        </div>
      
      </div>
    </div>
  </div>
</div>
<hr>
<script>
function processData(){

 var message = document.getElementById("message").value;
 var worker = document.getElementById("worker").value;


 var strArray = worker.split("|");
        
        // Display array values on page
        for(var i = 0; i < strArray.length; i++){
            document.write("<p>" + strArray[i] + "</p>");
        }


    console.log(message);
    console.log(worker);
    console.log(worker[3]);
    
}
</script>
