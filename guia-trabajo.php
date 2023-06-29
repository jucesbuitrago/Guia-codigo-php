/**
    Guía de Código

    Introducción

    Una guía de estilo de un lenguaje de programación es un conjunto de recomendaciones sobre la forma de dar formato a los programas. El interés de utilizar un estilo específico es facilitar la re utilización de código y la detección de errores. Existen muchos estilos de programación y no se puede decir que uno sea mejor que otro, pero sí que es conveniente adoptar algún estilo determinado y utilizarlo de forma consistente.

    Esta guia se basa en las recomendaciones hechas por el grupo PHP-FIG (PHP framework Interop Group)[1] en el cual participan los autores de los frameworks PHP mas populares.
*/

/**Guia
    Los archivos DEBEN emplear solamente la codificacion UTF-8 sin BOOM para el código de PHP.

    --------NO USAR---------
    ï»¿<?php
        // Código PHP aquí
    ?>

    -----------------USO NORMAL-------------------
    <?php
        // Código PHP aquí
    ?>
*/

/**
Comentarios

    Todo archivo debe estar comentado en la cabecera.

------------------------- >
<?php
/**
* Nombre del archivo
* Ruta:              /ruta/archivo
* Fecha Creación:    28/Jun/2023
*
* Descripción breve
*
* Descripción extensa (opcional)
*
* @author           Julio Buitrago <jucesbuitrago@gmail.com>
* @copyright        2023 Julio Buitrago
* @license          GPL 2 or later
* @version          2023-02-06
* @link             http://www.example.org
*
* Revisiones:
*       Juan (29/Jun/2023)   - Descripción
*       Valentina (29/Jun/2023)  - Descripción Método modificado
*                           - Otro cambio  
*/
?>
*/

/**
    Todos los métodos deben estar comentados.
*/

/**
 <?php
/**
 * El sistema no está disponible.
 *
 * @param string $message
 * @param array $context
 * @return null
 */
?>
*/
