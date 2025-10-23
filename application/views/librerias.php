<div class="container-fluid">
    <div class="row">
        <div class="col-sm-6 text-center">
            <h1><?=$titulo?></h1>
            <p><?=$descripcion;?></p>
        </div>
        <div class="col-sm-6 text-center">
            <h1>Texto 2</h1>
            <p>Texto de ejemplo</p>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-12 table-responsive">
            <table id='tbllibrerias' class="table table-striped table-borderless border-bottom border-light dataTable no-footer table-condensed compact">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Librería</th>
                        <th>Descripción</th>
                        <th>Documentación</th>
                        <th>Registro</th>
                    </tr>
                </thead>
                <?php
                if(!empty($librerias)){
                    echo "<tbody>";
                    $i=1;
                    foreach($librerias as $item){
                        echo "<tr>";
                            echo "<td>".$i."</td>";
                            echo "<td>".$item->nombre."</td>";
                            echo "<td>".$item->descripcion."</td>";
                            echo "<td><a href='".$item->documentacion."' target='_blank'>Link</a></td>";
                            echo "<td>".date('d/m/Y',strtotime($item->registro))."</td>";
                        echo "</tr>";
                        $i+=1;
                    }
                    echo "</tbody>";
                }
                ?>
            </table>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-12 text-justify">
            <h3>Libreria Fontawesome</h3>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-12">
            <i class="fa fa-address-book" aria-hidden="true"></i>
            <i class="fa fa-envelope-open-o" aria-hidden="true"></i>
            <i class="fa fa-bookmark" aria-hidden="true"></i>
            <i class="fa fa-cubes" aria-hidden="true"></i>
            <i class="fa fa-database" aria-hidden="true"></i>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-12 text-justify">
            <h3>Select 2</h3>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-4">
            <select id="mi_select" style="width:100%;" class="js-example-basic-single">
                <option value="AL">Alabama</option>
                <option value="WY">Wyoming</option>
                <option value="NY">New York</option>
                <option value="CA">California</option>
                <option value="TX">Texas</option>
                <option value="FL">Florida</option>
            </select>
    </div>
</div>
<script type='text/javascript'>
    if($("#tbllibrerias").length){
        tabla=$('#tbllibrerias').DataTable({
            //aaSorting: [[7, "desc"]],
            "oLanguage": {
                "sProcessing": "Procesando...",
                "sLengthMenu": "Mostrar _MENU_ registros",
                "sZeroRecords": "No se encontraron resultados",
                "sEmptyTable": "Ningún dato disponible en esta tabla",
                "sInfo": "Mostrando registros del _START_ al _END_ de un total de _TOTAL_ registros",
                "sInfoEmpty": "Mostrando registros del 0 al 0 de un total de 0 registros",
                "sInfoFiltered": "(filtrado de un total de _MAX_ registros)",
                "sSearch": "Buscar:",
                "sInfoThousands": ",",
                "sLoadingRecords": "Cargando...",
                "oPaginate": {
                    "sFirst": "Primero",
                    "sLast": "Último",
                    "sNext": "Siguiente",
                    "sPrevious": "Anterior"
                }
            },
            "responsive":true,
            dom:"Bftip",
        });
        tabla.draw();
    }//Fin del if

    $(document).ready(function() {
    $('.js-example-basic-single').select2();
});
</script>