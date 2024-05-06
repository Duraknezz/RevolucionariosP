<?php 
include("../../bd.php");

$sentencia=$conexion->prepare("SELECT * FROM `tbl_usuario`");
$sentencia->execute();
$lista_usuario=$sentencia->fetchAll(PDO::FETCH_ASSOC);

include("../../templates/header.php"); 
?>

<br/>
<div class="card">
    <div class="card-header">
    <a name="" id="" class="btn btn-primary" href="crear.php"role="button">Agregar usuario</a>
    </div>
    <div class="card-body">
        
    <div
        class="table-responsive-sm">
        <table
            class="table">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Usuario</th>
                    <th scope="col">Password</th>
                    <th scope="col">Correo</th>
                    <th scope="col">Acciones</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($lista_usuario as $registro) { ?>
                <tr class="">
                    <td><?php echo $registro["ID"];?></td>
                    <td><?php echo $registro["usuario"];?></td>
                    <td><?php echo $registro["password"];?></td>
                    <td><?php echo $registro["correo"];?></td>
                    <td>
                    <a name=""id=""class="btn btn-info"href="editar.php?txtID=<?php echo $registro['ID']; ?>"role="button">Editar</a>
                            <a name=""id=""class="btn btn-danger"href="index.php?txtID=<?php echo $registro['ID']; ?>" role="button">Eliminar</a>
                    </td>
                </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
    

    </div>
    <div class="card-footer text-muted"></div>
</div>


<?php include("../../templates/footer.php"); ?>