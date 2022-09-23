<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ADMIN PAGE</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css">
</head>
<body style="margin: 50px;">
    <h1>Lista de Doctores</h1>
    <br>
    <a class="btn btn-primary" href="createdoctor.php">Agregar Nuevo Doctor</a>
    <table class="table">
        <thead>
			<tr>
				<th>ID</th>
				<th>Nombre</th>
				<th>Email</th>
				<th>Teléfono</th>
				<th>Dirección</th>
                <th>Fecha de Ingreso</th>
				<th>Acción</th>
			</tr>
		</thead>

        <tbody>
            <?php
            $servername = "localhost";
			$username = "root";
			$password = "clinicaBDD2022$";
			$database = "clinicaBDD";

			// Create connection
			$connection = new mysqli($servername, $username, $password, $database);

            // Check connection
			if ($connection->connect_error) {
				die("Connection failed: " . $connection->connect_error);
			}

            // read all row from database table
			$sql = "SELECT * FROM doctores";
			$result = $connection->query($sql);

            if (!$result) {
				die("Invalid query: " . $connection->error);
			}

            // read data of each row
			while($row = $result->fetch_assoc()) {
                echo "
                <tr>
                    <td>$row[id]</td>
                    <td>$row[name]</td>
                    <td>$row[email]</td>
                    <td>$row[phone]</td>
                    <td>$row[address]</td>
                    <td>$row[created_at]</td>
                    <td>
                        <a type='button' class='btn btn-primary' href='editdoctor.php?id=$row[id]'>Editar</a>
                        <a type='button' class='btn btn-danger' href='deletedoctor.php?id=$row[id]'>Borrar</a>
                </td>
                </tr>";
            }

            $connection->close();
            ?>
            
        </tbody>
    </table>
</body>
</html>