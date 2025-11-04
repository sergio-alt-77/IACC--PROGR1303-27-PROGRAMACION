<?php
// Actividad 1:
// Definimos un arreglo bidimensional para los alumnos con su apellido, y las calificaciones de tres asignaturas.
$notas_alumnos = array(
    array("Honoria", "González", 6.2, 6.5, 5.8),
    array("Jacinta", "Muñoz", 5.4, 5.1, 5.1),
    array("Epifanio", "Rojas", 6.8, 6.1, 6.4),
    array("Celso", "Díaz", 6.9, 6.3, 6.3)
);

// Actividad 2:
// Un arreglo bidimensional nos permite crear una matriz tipo tabla con filas y columnas, dándonos estructura y orden para el uso de los valores (las notas de cada materia), con esta facilidad dentro del mismo array podemos almacenar todos los datos que nos piden y posteriormente realizar operaciones.

// Actividad 3:
// Declaramos variables para evitar problemas al crearlas el bucle con valor null.
$m1_nota_top = 0;
$m1_alum_top = "";
$m2_nota_top = 0;
$m2_alum_top = "";
$m3_nota_top = 0;
$m3_alum_top = "";
$promedio_gral_curso = 0;
// El for evalua cuantos subindices tiene el array para despues entrar en cada uno y realizar distintias comparaciones y operaciones, más abajo comentado.
for ($i = 0; $i < count($notas_alumnos); $i++) {
    // Le pasamos los indices de las materias y calculamos el promedio de las tres notas.
    $promedio_alumno = ($notas_alumnos[$i][2] + $notas_alumnos[$i][3] + $notas_alumnos[$i][4]) / 3;
    // Se agrega el promedio como nuevo valor en el ultimo indice, quedando en el 5.
    array_push($notas_alumnos[$i], $promedio_alumno);

    // Envia a pantalla los valores de cada indice solicitado.
    echo "Nombre: " . $notas_alumnos[$i][0] . " " . $notas_alumnos[$i][1] .
        ", Promedio general: " . round($notas_alumnos[$i][5], 1) . "<br>";
    // El bucle for itera sobre la matriz y con un IF se compara sobre el indice 2 consigo mismo para obtener el valor más alto y guardarlo en una variable junto con el alumno. Despues en cada IF se ejecuta lo mismo para las demas materias.
    if ($notas_alumnos[$i][2] > $m1_nota_top) {
        $m1_nota_top = $notas_alumnos[$i][2];
        $m1_alum_top = $notas_alumnos[$i][0] . " " . $notas_alumnos[$i][1];
    }
    if ($notas_alumnos[$i][3] > $m2_nota_top) {
        $m2_nota_top = $notas_alumnos[$i][3];
        $m2_alum_top = $notas_alumnos[$i][0] . " " . $notas_alumnos[$i][1];
    }
    if ($notas_alumnos[$i][4] > $m3_nota_top) {
        $m3_nota_top = $notas_alumnos[$i][4];
        $m3_alum_top = $notas_alumnos[$i][0] . " " . $notas_alumnos[$i][1];
    }
    // Los promedios generales del indice 5 y lo guardamos en una variable.
    $promedio_gral_curso += $notas_alumnos[$i][5] / 4;
}
echo "<br>" . "La nota más alta en Matemáticas es " . $m1_nota_top . " de " . $m1_alum_top . ".<br>"; // La nota más alta en la materia 1.
echo "La nota más alta en Historia es " . $m2_nota_top . " de " . $m2_alum_top . ".<br>"; // La nota más alta en la materia 2.
echo "La nota más alta en Ciencias es " . $m3_nota_top . " de " . $m3_alum_top . ".<br><br>"; // La nota más alta en la materia 3.
echo "El promedio general del curso es: " . round($promedio_gral_curso, 1) . ".";
