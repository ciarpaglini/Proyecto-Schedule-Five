<table>
                  <tr>
                    <th>ID</th>
                    <th>NOMBRE</th>
                    <th>PRECIO</th>
                    <th>ACCIONES</th>
                  </tr>
                 
                  <?php while ($pro = $workers_show->fetch_object()) : ?>
                    <tr>
                      <td><?= $pro->id; ?></td>
                      <td><?= $pro->name; ?></td>
                      <td><?= $pro->surname; ?></td>

                      <td>
                        <a href="<?= base_url ?>schedule/editar&id=<?= $pro->id ?>" class="button button-gestion">Editar</a>
                        <a href="<?= base_url ?>schedule/eliminar&id=<?= $pro->id ?>" class="button button-gestion button-red">Eliminar</a>
                      </td>
                    </tr>
                  <?php endwhile; ?>
                </table>


                <?php while ($sche = $schedules->fetch_object()) : ?>
                  <div class="product">
                    <a href="<?= base_url ?>producto/ver&id=<?= $sche->id ?>">
                      <?php if ($sche->imagen != null) : ?>
                        <img src="<?= base_url ?>uploads/images/<?= $sche->imagen ?>" />
                      <?php else : ?>
                        <img src="<?= base_url ?>assets/img/camiseta.png" />
                      <?php endif; ?>
                      <h2><?= $sche->nombre ?></h2>
                    </a>
                    <p><?= $sche->precio ?></p>
                    <a href="<?= base_url ?>carrito/add&id=<?= $sche->id ?>" class="button">Comprar</a>
                  </div>
                <?php endwhile; ?>

<!------------------------------------------------------------------------------------>

<div class="col-12">
          <h3 class="text-center">Agents</h3>
          <hr>
          <div class="media">
            <img class="mr-3" src="file:///Macintosh HD/Users/hermanmartinez/Library/Application Support/Adobe/Dreamweaver CC 2019/es_MX/Configuration/Temp/Assets/eam702e28c0.TMP/images/64X64.gif" alt="Generic placeholder image">
            <div class="media-body">
              <h5 class="mt-0">John Doe</h5>
              <abbr title="Phone">P:</abbr> (123) 456-7890 <a href="mailto:#">first.last@example.com</a>
            </div>
          </div>
          <div class="media mt-2">
            <img class="mr-3" src="file:///Macintosh HD/Users/hermanmartinez/Library/Application Support/Adobe/Dreamweaver CC 2019/es_MX/Configuration/Temp/Assets/eam702e28c0.TMP/images/64X64.gif" alt="Generic placeholder image">
            <div class="media-body">
              <h5 class="mt-0">Linda Smith</h5>
              <abbr title="Phone">P:</abbr> (123) 456-7890 <a href="mailto:#">first.last@example.com</a>
            </div>
          </div>
        </div>


<section>
  <div class="container">
    <div class="row">
      <div class="col-md-6 col-12">
        <h3>New Properties</h3>
        <hr>
        <div class="row">
          <div class="col-4">
            <div class="text-center"> <img src="file:///Macintosh HD/Users/hermanmartinez/Library/Application Support/Adobe/Dreamweaver CC 2019/es_MX/Configuration/Temp/Assets/eam702e28c0.TMP/images/72X72.gif" alt="Thumbnail Image 1"> </div>
          </div>
          <div class="col-4">
            <div class="text-center"> <img src="file:///Macintosh HD/Users/hermanmartinez/Library/Application Support/Adobe/Dreamweaver CC 2019/es_MX/Configuration/Temp/Assets/eam702e28c0.TMP/images/72X72.gif" alt="Thumbnail Image 1"></div>
          </div>
          <div class="col-4">
            <div class="text-center"> <img src="file:///Macintosh HD/Users/hermanmartinez/Library/Application Support/Adobe/Dreamweaver CC 2019/es_MX/Configuration/Temp/Assets/eam702e28c0.TMP/images/72X72.gif" alt="Thumbnail Image 1"></div>
          </div>
        </div>
        <hr>
        <div class="row">
          <div class="col-4">
            <div class="text-center"> <img src="file:///Macintosh HD/Users/hermanmartinez/Library/Application Support/Adobe/Dreamweaver CC 2019/es_MX/Configuration/Temp/Assets/eam702e28c0.TMP/images/72X72.gif" alt="Thumbnail Image 1"></div>
          </div>
          <div class="col-4">
            <div class="text-center"> <img src="file:///Macintosh HD/Users/hermanmartinez/Library/Application Support/Adobe/Dreamweaver CC 2019/es_MX/Configuration/Temp/Assets/eam702e28c0.TMP/images/72X72.gif" alt="Thumbnail Image 1"></div>
          </div>
          <div class="col-4">
            <div class="text-center"> <img src="file:///Macintosh HD/Users/hermanmartinez/Library/Application Support/Adobe/Dreamweaver CC 2019/es_MX/Configuration/Temp/Assets/eam702e28c0.TMP/images/72X72.gif" alt="Thumbnail Image 1"></div>
          </div>
        </div>
        <hr>
        <div class="row">
          <div class="col-4">
            <div class="text-center"> <img src="file:///Macintosh HD/Users/hermanmartinez/Library/Application Support/Adobe/Dreamweaver CC 2019/es_MX/Configuration/Temp/Assets/eam702e28c0.TMP/images/72X72.gif" alt="Thumbnail Image 1"></div>
          </div>
          <div class="col-4">
            <div class="text-center"> <img src="file:///Macintosh HD/Users/hermanmartinez/Library/Application Support/Adobe/Dreamweaver CC 2019/es_MX/Configuration/Temp/Assets/eam702e28c0.TMP/images/72X72.gif" alt="Thumbnail Image 1"></div>
          </div>
          <div class="col-4">
            <div class="text-center"> <img src="file:///Macintosh HD/Users/hermanmartinez/Library/Application Support/Adobe/Dreamweaver CC 2019/es_MX/Configuration/Temp/Assets/eam702e28c0.TMP/images/72X72.gif" alt="Thumbnail Image 1"></div>
          </div>
        </div>
        <hr>
      </div>
      <div class="col-md-6 col-12">
        <h3>Our Services</h3>
        <nav>
          <div class="nav nav-tabs" id="nav-tab" role="tablist">
            <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">Panel 1</a>
            <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false">Panel 2</a>
            <a class="nav-item nav-link" id="nav-contact-tab" data-toggle="tab" href="#nav-contact" role="tab" aria-controls="nav-contact" aria-selected="false">Panel 3</a>
          </div>
        </nav>
        <div class="tab-content" id="nav-tabContent">
          <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
            <p class="text-center mt-2"><img src="file:///Macintosh HD/Users/hermanmartinez/Library/Application Support/Adobe/Dreamweaver CC 2019/es_MX/Configuration/Temp/Assets/eam702e28c0.TMP/images/3b536b.gif" alt=""></p>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minus maxime aut ea impedit voluptates aperiam dolor laborum officiis autem aspernatur! Lorem ipsum dolor sit amet, consectetur adipisicing elit. Delectus, alias, repudiandae sunt illo consequatur aperiam doloribus nesciunt ut deserunt ipsa est tempora nihil. Totam eveniet aperiam debitis fugit ipsa doloremque. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Optio sequi dolorem suscipit assumenda molestiae voluptatem qui consequuntur magni? Deleniti, corporis.</p>
          </div>
          <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
            <p class="text-center mt-2"><img src="file:///Macintosh HD/Users/hermanmartinez/Library/Application Support/Adobe/Dreamweaver CC 2019/es_MX/Configuration/Temp/Assets/eam702e28c0.TMP/images/3b536b.gif" alt=""></p>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minus maxime aut ea impedit voluptates aperiam dolor laborum officiis autem aspernatur! Lorem ipsum dolor sit amet, consectetur adipisicing elit. Delectus, alias, repudiandae sunt illo consequatur aperiam doloribus nesciunt ut deserunt ipsa est tempora nihil. Totam eveniet aperiam debitis fugit ipsa doloremque. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Optio sequi dolorem suscipit assumenda molestiae voluptatem qui consequuntur magni? Deleniti, corporis.</p>
          </div>
          <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">
            <p class="text-center mt-2"><img src="file:///Macintosh HD/Users/hermanmartinez/Library/Application Support/Adobe/Dreamweaver CC 2019/es_MX/Configuration/Temp/Assets/eam702e28c0.TMP/images/3b536b.gif" alt=""></p>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minus maxime aut ea impedit voluptates aperiam dolor laborum officiis autem aspernatur! Lorem ipsum dolor sit amet, consectetur adipisicing elit. Delectus, alias, repudiandae sunt illo consequatur aperiam doloribus nesciunt ut deserunt ipsa est tempora nihil. Totam eveniet aperiam debitis fugit ipsa doloremque. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Optio sequi dolorem suscipit assumenda molestiae voluptatem qui consequuntur magni? Deleniti, corporis.</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<hr>
<div class="container">
  <div class="row">
    <div class="col-md-8 col-12">
      <div class="row">
        <div class="col-lg-6 col-12">
          <h3>About Us</h3>
          <hr>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Atque, consequatur neque exercitationem distinctio esse! Cupiditate doloribus a consequatur iusto illum eos facere vel iste iure maxime. Velit, rem, sunt obcaecati eveniet id nemo molestiae. In.</p>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Atque, consequatur neque exercitationem distinctio esse! Cupiditate doloribus a consequatur iusto illum eos facere vel iste iure maxime. Velit, rem, sunt obcaecati eveniet id nemo molestiae. In.</p>
        </div>
        <div class="col-lg-6 col-12">
          <h3>Latest News</h3>
          <hr>
          <div>
            <div class="media">
              <div class="media-body">
                <h4 class="mt-0 mb-1">Heading 1</h4>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolorum, quod temporibus veniam deserunt deleniti accusamus voluptatibus at illo sunt quisquam.
              </div>
              <a href="#"><img class="ml-3" src="file:///Macintosh HD/Users/hermanmartinez/Library/Application Support/Adobe/Dreamweaver CC 2019/es_MX/Configuration/Temp/Assets/eam702e28c0.TMP/images/75X.gif" alt="placeholder image"></a>
            </div>
            <div class="media">
              <div class="media-body">
                <h4 class="mt-0 mb-1">Heading 2</h4>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illo, iure nemo earum quae aliquid animi eligendi rerum rem porro facilis.
              </div>
              <a href="#"><img class="ml-3" src="file:///Macintosh HD/Users/hermanmartinez/Library/Application Support/Adobe/Dreamweaver CC 2019/es_MX/Configuration/Temp/Assets/eam702e28c0.TMP/images/75X.gif" alt="placeholder image"></a>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-md-4 col-12 mt-md-0 mt-2">
      <h3>Contact Us</h3>
      <hr>
      <address>
        <strong>MyStoreFront, Inc.</strong><br>
        Indian Treasure Link<br>
        Quitman, WA, 99110-0219<br>
        <abbr title="Phone">P:</abbr> (123) 456-7890
      </address>
      <address>
        <strong>Full Name</strong><br>
        <a href="mailto:#">first.last@example.com</a>
      </address>
    </div>
  </div>
</div>