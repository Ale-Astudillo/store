<?php
session_start();

if(!$_SESSION['user_email'])
{

    header("Location: ../index.php");
}

?>

<?php
 include("config.php");
 extract($_SESSION); 
		  $stmt_edit = $DB_con->prepare('SELECT * FROM users WHERE user_email =:user_email');
		$stmt_edit->execute(array(':user_email'=>$user_email));
		$edit_row = $stmt_edit->fetch(PDO::FETCH_ASSOC);
		extract($edit_row);
		
		?>

<?php
 include("config.php");
		  $stmt_edit = $DB_con->prepare("select sum(order_total) as total from orderdetails where user_id=:user_id and order_status='Ordered'");
		$stmt_edit->execute(array(':user_id'=>$user_id));
		$edit_row = $stmt_edit->fetch(PDO::FETCH_ASSOC);
		extract($edit_row);
		
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

    <script type="text/javascript" src="js/jquery-1.10.2.min.js"></script>
    <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>



</head>

<body>
    <div id="wrapper">
        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only"> Pagina de Navegación</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.php"> Shopping On-line</a>
            </div>
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav side-nav">
                    <li><a href="index.php"> &nbsp; <span class='glyphicon glyphicon-home'></span> Inicio</a></li>
                    <li><a href="shop.php?id=1"> &nbsp; <span class='glyphicon glyphicon-shopping-cart'></span> Comprar ahora</a></li>
                    <li><a href="cart_items.php"> &nbsp; <span class='fa fa-cart-plus'></span> Carrito de compras</a>
                    </li>
                    <li class="active"><a href="orders.php"> &nbsp; <span class='glyphicon glyphicon-list-alt'></span>
                            Mis Ordenes</a></li>
                    <li><a href="view_purchased.php"> &nbsp; <span class='glyphicon glyphicon-eye-open'></span> Ordenes Anteriores</a></li>
                    <li><a data-toggle="modal" data-target="#setAccount"> &nbsp; <span class='fa fa-gear'></span> 
                            Configuración</a></li>
                    <li><a href="logout.php"> &nbsp; <span class='glyphicon glyphicon-off'></span> Cerrar Sesión</a></li>


                </ul>
                <ul class="nav navbar-nav navbar-right navbar-user">
                    <li class="dropdown messages-dropdown">
                        <a href="#"><i class="fa fa-calendar"></i> <?php
                            $Today=date('y:m:d');
                            $new=date('l, F d, Y',strtotime($Today));
                            echo $new; ?></a>

                    </li>
                    <li class="dropdown user-dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown"><span
                                class='glyphicon glyphicon-shopping-cart'></span> Total Pagar: 	&#x24;
                            <?php echo $total; ?> </b></a>

                    </li>


                    <li class="dropdown user-dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i>
                            <?php echo $user_email; ?><b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li><a data-toggle="modal" data-target="#setAccount"><i class="fa fa-gear"></i> Configuración</a>
                            </li>
                            <li class="divider"></li>
                            <li><a href="logout.php"><i class="fa fa-power-off"></i> Cerrar Sesión</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </nav>

        <div id="page-wrapper">


            <div class="alert alert-default" style="color:white;background-color:#008CBA">
                <center>
                    <h3> <span class="glyphicon glyphicon-list-alt"></span> Mis Ordenes</h3>
                </center>
            </div>

            <br />

            <div class="table-responsive">
                <table class="display table table-bordered" id="example" cellspacing="0" width="100%">
                    <thead>
                        <tr>
                            <th>Artículo</th>
                            <th>Precio</th>
                            <th>Cantidad</th>
                            <th>Total</th>


                        </tr>
                    </thead>
                    <tbody>
                        <?php
include("config.php");
 
	$stmt = $DB_con->prepare("SELECT * FROM orderdetails where order_status='Ordered' and user_id='$user_id'");
	$stmt->execute();
	
	if($stmt->rowCount() > 0)
	{
		while($row=$stmt->fetch(PDO::FETCH_ASSOC))
		{
			extract($row);
			
			
			?>
                        <tr>

                            <td><?php echo $order_name; ?></td>
                            <td>	&#x24; <?php echo $order_price; ?> </td>
                            <td><?php echo $order_quantity; ?></td>
                            <td>	&#x24; <?php echo $order_total; ?> </td>


                        </tr>


                        <?php
		}
		 include("config.php");
		  $stmt_edit = $DB_con->prepare("select sum(order_total) as totalx from orderdetails where user_id=:user_id and order_status='Ordered'");
		$stmt_edit->execute(array(':user_id'=>$user_id));
		$edit_row = $stmt_edit->fetch(PDO::FETCH_ASSOC);
		extract($edit_row);
		
		echo "<tr>";
		echo "<td colspan='3' align='right'>Total a Pagar:";
		echo "</td>";
		
		echo "<td>	&#x24; ".$totalx;
		echo "</td>";
		
		
		
		echo "</tr>";
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
                                <span class="glyphicon glyphicon-info-sign"></span> &nbsp; No se encontró ningún artículo ...
                            </div>
                        </div>
                        <?php
	}
	
?>

            </div>
        </div>




    </div>



    </div>
    <!-- /#wrapper -->


    <!-- Mediul Modal -->
    <div class="modal fade" id="setAccount" tabindex="-1" role="dialog" aria-labelledby="myMediulModalLabel">
        <div class="modal-dialog modal-sm">
            <div style="color:white;background-color:#008CBA" class="modal-content">
            <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                            aria-hidden="true">&times;</span></button>
                    <h2 style="color:white" class="modal-title" id="myModalLabel">Configuración de Cuenta</h2>
                </div>
                <div class="modal-body">
                    <form enctype="multipart/form-data" method="post" action="settings.php">
                        <fieldset>
                            <p>Nombre:</p>
                            <div class="form-group">

                                <input class="form-control" placeholder="Firstname" name="user_firstname" type="text"
                                    value="<?php  echo $user_firstname; ?>" required>
                            </div>

                            <p>Apellido:</p>
                            <div class="form-group">

                                <input class="form-control" placeholder="Lastname" name="user_lastname" type="text"
                                    value="<?php  echo $user_lastname; ?>" required>
                            </div>

                            <p>Dirección:</p>
                            <div class="form-group">

                                <input class="form-control" placeholder="Address" name="user_address" type="text"
                                    value="<?php  echo $user_address; ?>" required>
                            </div>

                            <p>Contraseña:</p>
                            <div class="form-group">

                                <input class="form-control" placeholder="Password" name="user_password" type="password"
                                    value="<?php  echo $user_password; ?>" required>
                            </div>

                            <div class="form-group">

                                <input class="form-control hide" name="user_id" type="text"
                                    value="<?php  echo $user_id; ?>" required>

                            </div>

                        </fieldset>


                </div>
                <div class="modal-footer">

                    <button class="btn btn-block btn-success btn-md" name="user_save">Guardar</button>

                    <button type="button" class="btn btn-block btn-danger btn-md" data-dismiss="modal">Cancelar</button>


                    </form>
                </div>
            </div>
        </div>
    </div>
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