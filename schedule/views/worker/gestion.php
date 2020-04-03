<div class="container">
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
                                            <th scope="col">Email</th>
                                            <th scope="col">Acciones</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?= $i = 1; ?>
        
                                        <?php while ($sche = $schedules->fetch_object()) : ?>
                                            <tr>
                                                <th scope="row"><?= $i++; ?> </th>
                                                <td><?= $sche->updated_at; ?></td>
                                                <td class="hidden"><?= $sche->name; ?></td>
                                                <td><?= $sche->surname; ?></td>
                                                <td><?= $sche->email; ?></td>
                                           

                                                <td>
                                                <a type="button" class="btn btn-warning" href="<?= base_url ?>worker/edit&id=<?= $sche->id?>">Editar</a>
                                                    <a type="button" class="btn btn-danger" href="<?= base_url ?>worker/eliminar&id=<?= $sche->id?>">Eliminar</a>
                                              </td>
                                            </tr>
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