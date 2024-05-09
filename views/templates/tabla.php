
<div class="wrapper" style="margin-top: 20px;">

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card card-primary card-outline">
              <div class="card-header">
                <div class="d-flex justify-content-between">
                  <h3>Datos Estudiantes</h3>
                  <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal-default">Agregar</button>
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example2" class="table table-bordered table-hover">
                  <thead>
                  <tr>
                    <th>Nombres</th>
                    <th>Apellidos</th>
                    <th>Telefono</th>
                    <th>Grado</th>
                    <th>Acciones</th>
                  </tr>
                  </thead>
                  <tbody>
                  <tr>
                    <td>Erian</td>
                    <td>Aleman</td>
                    <td>87654321</td>
                    <td> 4</td>
                    <td class="text-center">       
                    <button type="button" class="btn btn-sm btn-danger" data-toggle="modal" data-target="#modal-delete">
                    <i class="fa fa-trash"></i>
                    </button>
                    <button type="button" class="btn btn-sm btn-success" data-toggle="modal" data-target="#modal-edit">
                    <i class="fa fa-edit"></i>
                    </button>
                    </td>
                  </tr>
                  <tr>
                  <td>Erian</td>
                    <td>Aleman</td>
                    <td>87654321</td>
                    <td>5</td>
                    <td class="text-center">       
                    <button type="button" class="btn btn-sm btn-danger" data-toggle="modal" data-target="#modal-delete">
                    <i class="fa fa-trash"></i>
                    </button>
                    <button type="button" class="btn btn-sm btn-success" data-toggle="modal" data-target="#modal-edit">
                    <i class="fa fa-edit"></i>
                    </button>
                    </td>
                  </tr>
                  <tr>
                  <td>Erian</td>
                    <td>Aleman</td>
                    <td>87654321</td>
                    <td>5.5</td>
                    <td class="text-center">       
                    <button type="button" class="btn btn-sm btn-danger" data-toggle="modal" data-target="#modal-delete">
                    <i class="fa fa-trash"></i>
                    </button>
                    <button type="button" class="btn btn-sm btn-success" data-toggle="modal" data-target="#modal-edit">
                    <i class="fa fa-edit"></i>
                    </button>
                    </td>
                  </tr>
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->

            
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
    
  <div class="modal fade" id="modal-default">
<div class="modal-dialog modal-lg">
<div class="modal-content">
<div class="modal-header bg-primary">
<h4 class="modal-title">Agregar estudiante</h4>
<button type="button" class="close" data-dismiss="modal" aria-label="Close">
<span aria-hidden="true">&times;</span>
</button>
</div>

<div class="card-body">
<?php
include 'inputs.php' 
?>

</div>

<div class="modal-footer justify-content-between">
<button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
<button type="button" class="btn btn-primary">Guardar</button>
</div>
</div>

</div>

  </div>


  <div class="modal fade" id="modal-edit">
<div class="modal-dialog modal-lg">
<div class="modal-content">
<div class="modal-header bg-success">
<h4 class="modal-title">Editar estudiante</h4>
<button type="button" class="close" data-dismiss="modal" aria-label="Close">
<span aria-hidden="true">&times;</span>
</button>
</div>

<div class="card-body">
<?php
include 'inputs.php' 
?>

</div>

<div class="modal-footer justify-content-between">
<button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
<button type="button" class="btn btn-primary">Guardar</button>
</div>
</div>

</div>

  </div>


  <div class="modal fade" id="modal-delete">
<div class="modal-dialog modal-lg">
<div class="modal-content">
<div class="modal-header bg-danger">
<h4 class="modal-title">Editar estudiante</h4>
<button type="button" class="close" data-dismiss="modal" aria-label="Close">
<span aria-hidden="true">&times;</span>
</button>
</div>

<div class="card-body">
<div class="alert alert-danger" role="alert">
  A simple danger alert—check it out!
</div>

</div>

<div class="modal-footer justify-content-between">
<button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
<button type="button" class="btn btn-primary">Guardar</button>
</div>
</div>

</div>

  </div>

  <!-- /.content-wrapper -->
  <!-- <footer class="main-footer">
    <div class="float-right d-none d-sm-block">
      <b>Version</b> 3.2.0
    </div>
    <strong>Copyright &copy; 2014-2021 <a href="https://adminlte.io">AdminLTE.io</a>.</strong> All rights reserved.
  </footer> -->

  
</div>
