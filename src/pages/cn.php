<?php 
$conexion= @mysqli_connect("127.0.0.1","3000", "","", "bd_Prueba"); /*para conectarnos a la base de datos primero se pone el localhost, luego el usuario que por defecto es root, luego clave pero como no se pone clave entonces se deja vacio, y luego el nombre de la base de datos*/
if (!$conexion){
	echo "Error al conectarnos a la base de datos";
}else{
	echo "Conectado a la base de datos";
}
 /*$variable = 35;
 $nombre = "Luisa";

 print "Mi nombre es $nombre";*/


// <?php
//     class conectar{
//         private $servidor="localhost";
//         private $usuario="root";
//         private $bd="crud";
//         private $password="fernanda123";

//         public function conexion(){
//             $conexion=mysqli_connect($this->servidor,
//                                     $this->usuario,
//                                     $this->password,
//                                     $this->bd);
//             return $conexion;
//         }
//     }   
// ?>