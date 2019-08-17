<h1 class="page-header">
    Nuevo Registro
</h1>

<ol class="breadcrumb">
  <li><a href="?cont=viajero">Viajeros</a></li>
  <li class="active">Nuevo Registro</li>
</ol>

<form id="frm-viajero" action="?cont=viajero&a=Guardar" method="post" enctype="multipart/form-data">

    <div class="form-group">
      <label>Name</label>
      <input type="text" name="name" value="<?php echo $vjro->name; ?>" class="form-control" placeholder="Juan Rivera" data-validacion-tipo="requerido|min:20" />
    </div>

    <div class="form-group">
        <label>Personal Identification</label>
        <input type="text" name="Personal Identification" value="<?php echo $vjro->personal_identification; ?>" class="form-control" placeholder="8-888-9087" data-validacion-tipo="requerido|min:100" />
    </div>

    <div class="form-group">
        <label>Address</label>
        <input type="text" name="address" value="<?php echo $vjro->address; ?>" class="form-control" placeholder="Panama, Panama" data-validacion-tipo="requerido|min:100" />
    </div>

    <div class="form-group">
        <label>Phone</label>
        <input type="text" name="phone" value="<?php echo $vjro->phone; ?>" class="form-control" placeholder="6457-9876" data-validacion-tipo="requerido|min:10" />
    </div>

    <hr />

    <div class="text-right">
        <button class="btn btn-success">Save</button>
    </div>
</form>

<script>
    $(document).ready(function(){
        $("#frm-viajero").submit(function(){
            return $(this).validate();
        });
    })
</script>