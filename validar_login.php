// Mostrar errores (solo para desarrollo)
error_reporting(E_ALL);
ini_set('display_errors', 1);

// Iniciar sesión
session_start();

// Conexión a la base de datos
require_once "config/conexion.php";


// Verificar que el formulario fue enviado
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // Obtener datos del formulario
    $correo = trim($_POST["correo"]);
    $password = trim($_POST["password"]);

    // Buscar usuario por correo
    $sql = "SELECT * FROM usuarios WHERE correo = ?";

    $stmt = $conexion->prepare($sql);

    if (!$stmt) {
        die("Error en la consulta: " . $conexion->error);
    }

    $stmt->bind_param("s", $correo);

    $stmt->execute();

    $resultado = $stmt->get_result();

    // Verificar si existe el usuario
    if ($resultado->num_rows == 1) {

        $usuario = $resultado->fetch_assoc();


        // Comparar contraseña (temporalmente en texto plano)
 if (password_verify($password, $usuario["password"])) {
      session_regenerate_id(true);

            $_SESSION["id"] = $usuario["id"];
            $_SESSION["nombre"] = $usuario["nombre"];
            $_SESSION["correo"] = $usuario["correo"];
            $_SESSION["rol"] = $usuario["rol"];

            header("Location: dashboard/index.php");
            exit();

        } else {

            echo "<h2>❌ Contraseña incorrecta.</h2>";
            echo '<a href="login.php">Volver al login</a>';

        }

    } else {

        echo "<h2>❌ El usuario no existe.</h2>";
        echo '<a href="login.php">Volver al login</a>';

    }

} else {


    echo "<h2>Acceso no permitido.</h2>";

}

?>
