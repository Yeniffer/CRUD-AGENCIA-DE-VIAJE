<h1 class ="page-header">Viajeros</h1>

<div class="well well-sm text-right">
    <a class="btn btn-primary" href="?cont=viajero&a=Nuevo">Nuevo viajero</a>
   <!-- <a class="btn btn-primary" href="?cont=viajeroo&a=Nuevo">Nuevo Producto</a>-->
</div>

<table class="table table-striped">
    <thead>
        <tr>
            <th style="width:180px;">ID Persona</th>
            <th style="width:120px;">Name</th>
            <th style="width:120px;">Personal Identification</th>
            <th style="width:120px;">Address</th>
            <th style="width:120px;">Phone</th>
        </tr>
    </thead>
    <tbody>
    <?php foreach($this->model->Table() as $r): ?>
        <tr>
            <td><?php echo $r->ID_persona; ?></td>
            <td><?php echo $r->Name; ?></td>
            <td><?php echo $r->{'Personal Identification'}; ?></td>
            <td><?php echo $r->Address; ?></td>
            <td><?php echo $r->Phone; ?></td>

            <td>
                <a href="?cont=viajero&a=Crud&id_persona=<?php echo $r->id_persona; ?>">Editar</a>
            </td>
            <td>
              <!--  <a onclick="javascript:return confirm('¿Seguro de eliminar este registro?');" href="?cont=viajero&a=Eliminar&nit=<?php echo $r->nit; ?>">Eliminar</a>-->
            </td>
        </tr>
    <?php endforeach; ?>
    </tbody>
</table>
