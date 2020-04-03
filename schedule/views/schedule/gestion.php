<div class="container">
<?php
$page = base_url."schedule/gestion";
$sec = "10";
?>
    <meta http-equiv="refresh" content="<?php echo $sec?>;URL='<?php echo $page?>'">

    <h3 class="text-center card-header">Bienvenido: <?= $_SESSION['identity']->name ?> <?= $_SESSION['identity']->surname ?></h3>
    <div class="row">
        <div class="col-lg-12 col-12">
            <!--==================================================================================-->
            <!--Start agregar horario-->
            <div class="row">
                <div class="col-sm-12 col-12">
                    <div class="card">
                        <h3 class="text-center card-header text-black">Horarios enviados</h3>
                        <div class="row">
                            <div class="col-sm-12 col-12">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th scope="col">#</th>
                                            <th scope="col">Fecha</th>
                                            <th class="hidden" scope="col">Nombre</th>
                                            <th scope="col">Apellido</th>
                                            <th scope="col">Estatus</th>
                                            <th scope="col">Mensage</th>
                                            <th scope="col">Acciones</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?= $i = 1; ?>
                                        <?php $identifier = $_SESSION['identity']->id ?>
      
                                                <?php while ($sche = $schedules->fetch_object()) : ?>
                                                    <?= $worker = $sche->user_id; ?>

                                                    <?php if($worker == $identifier) :?>
                                    
                                                        <tr>
                                                            <th scope="row"><?= $i++; ?> </th>
                                                            <td><?= $sche->updated_at; ?></td>
                                                            <td class="hidden"><?= $sche->name; ?></td>
                                                            <td><?= $sche->surname; ?></td>
                                                            <?php if ($sche->active == 'falso') : ?>
                                                                <td class="alert alert-danger">Sin Confirmar</td>
                                                            <?php elseif ($sche->active == 'verdadero') : ?>
                                                                <td class="alert alert-success">Confirmado</td>
                                                            <?php endif; ?>
                                                            <td><?= $sche->schedule; ?></td>
                                                            <td>
                                                                <a type="button" class="btn btn-danger" href="<?= base_url ?>schedule/eliminar&id=<?= $sche->id ?>">Eliminar</a>
                                                            </td>
                                                        </tr>
                        <?php endif ?>
                                        <?php endwhile; ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>