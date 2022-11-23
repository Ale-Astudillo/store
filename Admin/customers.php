<?php
session_start();

if(!$_SESSION['admin_username'])
{

    header("Location: ../index.php");
}

?>
<?php

	require_once 'config.php';
	
	if(isset($_GET['delete_id']))
	{
		
		
		
	
		$stmt_delete = $DB_con->prepare('DELETE FROM users WHERE user_id =:user_id');
		$stmt_delete->bindParam(':user_id',$_GET['delete_id']);
		$stmt_delete->execute();
		
		header("Location: customers.php");
	}

?>

<?php

	require_once 'config.php';
	
	if(isset($_GET['order_id']))
	{
		
		
		
	
		$stmt_delete = $DB_con->prepare('update orderdetails set order_status="Ordered_Finished"  WHERE user_id =:user_id and order_status="Ordered"');
		$stmt_delete->bindParam(':user_id',$_GET['order_id']);
		$stmt_delete->execute();
		
		header("Location: customers.php");
	}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shopping On-Line</title>
    <link rel="shortcut icon" href="../assets/img/logo.png" type="image/x-icon" />
    <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" href="font-awesome/css/font-awesome.min.css" />
    <link rel="stylesheet" type="text/css" href="css/local.css" />

    <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
    <script src="js/datatables.min.js"></script>



</head>

<body>
    <div id="wrapper">
        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Página de Navegación</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.php">Shopping On-line - Panel de Administrador</a>
            </div>
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav side-nav">
                    <li><a href="index.php"> &nbsp; &nbsp; &nbsp; Inicio</a></li>
                    <li><a data-toggle="modal" data-target="#uploadModal"> &nbsp; &nbsp; &nbsp; Carggar Artículos </a>
                    </li>
                    <li><a href="items.php"> &nbsp; &nbsp; &nbsp; Gestión de artículos</a></li>
                    <li class="active"><a href="customers.php"> &nbsp; &nbsp; &nbsp; Gestión de clientes</a></li>
                    <li><a href="orderdetails.php"> &nbsp; &nbsp; &nbsp; Detalle de Orden</a></li>
                    <li><a href="logout.php"> &nbsp; &nbsp; &nbsp; Cerrar Sesión</a></li>


                </ul>
                <ul class="nav navbar-nav navbar-right navbar-user">
                    <li class="dropdown messages-dropdown">
                        <a href="#"><i class="fa fa-calendar"></i> <?php
                            $Today=date('y:m:d');
                            $new=date('l, F d, Y',strtotime($Today));
                            echo $new; ?></a>

                    </li>
                    <li class="dropdown user-dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i>
                            <?php   extract($_SESSION); echo $admin_username; ?><b class="caret"></b></a>
                        <ul class="dropdown-menu">

                            <li><a href="logout.php"><i class="fa fa-power-off"></i> Cerrar Sesión</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </nav>

        <div id="page-wrapper">



            <div class="alert alert-danger">

                <center>
                    <h3><strong>Gestión de clientes</strong> </h3>
                </center>

            </div>

            <br />

            <div class="table-responsive">
                <table class="display table table-bordered" id="example" cellspacing="0" width="100%">
                    <thead>
                        <tr>
                            <th>Email</th>
                            <th>Nombre del Cliente</th>
                            <th>Dirección del Cliente</th>
                            <th>Operación</th>

                        </tr>
                    </thead>
                    <tbody>
                        <?php
include("config.php");
	$stmt = $DB_con->prepare('SELECT * FROM users');
	$stmt->execute();
	
	if($stmt->rowCount() > 0)
	{
		while($row=$stmt->fetch(PDO::FETCH_ASSOC))
		{
			extract($row);
			
			
			?>
                        <tr>

                            <td><?php echo $user_email; ?></td>
                            <td><?php echo $user_firstname; ?>
                            <?php echo $user_lastname; ?></td>
                            <td><?php echo $user_address; ?></td>

                            <td>



                                <a class="btn btn-success"
                                    href="view_orders.php?view_id=<?php echo $row['user_id']; ?>"><span
                                        class='glyphicon glyphicon-shopping-cart'></span> Ver pedidos</a>
                                <a class="btn btn-warning" href="?order_id=
                                <?php echo $row['user_id']; ?>" title="Haga clic para eliminar"
                                    onclick="return confirm('¿Estás seguro de restablecer los artículos del cliente pedidos?')">
                                    <span class='glyphicon glyphicon-ban-circle'></span>
                                    Restablecer orden</a>
                                <a class="btn btn-primary"
                                    href="previous_orders.php?previous_id=<?php echo $row['user_id']; ?>"><span
                                        class='glyphicon glyphicon-eye-open'></span> Pedidos anteriores </a>


                                <a class="btn btn-danger" href="?delete_id=<?php echo $row['user_id']; ?>"
                                    title="click for delete"
                                    onclick="return confirm('Está seguro de eliminar a esta cliente?')">
                                    <span class='glyphicon glyphicon-trash'></span>
                                    Eliminar cuenta</a>

                            </td>
                        </tr>

                        <?php
		}
		echo "</tbody>";
		echo "</table>";
		echo "</div>";
		echo "<br />";
	
		echo "</div>";
	}
	else
	{
		?>
                        <div class="col-xs-12">
                            <div class="alert alert-warning">
                                <span class="glyphicon glyphicon-info-sign"></span> &nbsp; Datos no encontrados ...
                            </div>
                        </div>
                        <?php
	}	
?>

            </div>
        </div>

        <br />
        <br />
    </div>



    </div>
    <!-- /#wrapper -->


    <!-- Mediul Modal -->
    <div class="modal fade" id="uploadModal" tabindex="-1" role="dialog" aria-labelledby="myMediulModalLabel">
        <div class="modal-dialog modal-md">
            <div style="color:white;background-color:#008CBA" class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                            aria-hidden="true">&times;</span></button>
                    <h2 style="color:white" class="modal-title" id="myModalLabel">Cargar elementos</h2>
                </div>
                <div class="modal-body">
                    <form enctype="multipart/form-data" method="post" action="additems.php">
                        <fieldset>
                            <p>Nombre del artículo:</p>
                            <div class="form-group">

                                <input class="form-control" placeholder="Nombre del artículo" name="item_name" type="text"
                                    required>
                            </div>

                            <p>Precio:</p>
                            <div class="form-group">

                                <input id="priceinput" class="form-control" placeholder="Precio" name="item_price"
                                    type="text" required>
                            </div>
                            <p>Elegir imagen:</p>
                            <div class="form-group">


                                <input class="form-control" type="file" name="item_image" accept="image/*" required />

                            </div>


                        </fieldset>


                </div>
                <div class="modal-footer">

                    <button class="btn btn-success btn-md" name="item_save">Guardar</button>

                    <button type="button" class="btn btn-danger btn-md" data-dismiss="modal">Cancelar</button>


                    </form>
                </div>
            </div>
        </div>
    </div>

    <script type="text/javascript" charset="utf-8">
    $(document).ready(function() {
        $('#example').dataTable();
    });
    </script>
    <script>
    $(document).ready(function() {
        $('#priceinput').keypress(function(event) {
            return isNumber(event, this)
        });
    });

    function isNumber(evt, element) {

        var charCode = (evt.which) ? evt.which : event.keyCode

        if (
            (charCode != 45 || $(element).val().indexOf('-') != -1) &&
            (charCode != 46 || $(element).val().indexOf('.') != -1) &&
            (charCode < 48 || charCode > 57))
            return false;

        return true;
    }
    </script>
</body>

</html>