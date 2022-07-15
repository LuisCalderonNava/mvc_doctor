<?php
class enlacesPaginasControlador
{
    static public function enlacesPaginasModelo($enlace)
    {
        if($enlace == "principal")
        {
            $modulo = "vistas/modulos/principal.php";
        }
        elseif($enlace == "alta_espe")
        {
            $modulo = "vistas/modulos/alta_especialidad.php"
        }
        elseif($enlace == "alta_habitacion")
        {
            $modulo = "vistas/modulos/alta_habitacion.php"
        }
        elseif($enlace == "alta_ingreso")
        {
            $modulo = "vistas/modulos/alta_ingreso.php"
        }
        elseif($enlace == "alta_medico")
        {
            $modulo = "vistas/modulos/alta_medico.php"
        }
        elseif($enlace == "alta_persona")
        {
            $modulo = "vistas/modulos/alta_persona.php"
        }
        elseif($enlace == "alta_paciente")
        {
            $modulo = "vistas/modulos/alta_paciente.php"
        }
        elseif($enlace == "alta_poblacion")
        {
            $modulo = "vistas/modulos/alta_poblacion.php"
        }
        elseif($enlace == "alta_provincia")
        {
            $modulo = "vistas/modulos/alta_provincia.php"
        }
        // AHORA SIGUEN LOS DE MOSTRAR
        elseif($enlace == "mostrar_espe")
        {
            $modulo = "vistas/modulos/mostrar_especialidad.php"
        }
        elseif($enlace == "mostrar_habitacion")
        {
            $modulo = "vistas/modulos/mostrar_habitacion.php"
        }
        elseif($enlace == "mostrar_ingreso")
        {
            $modulo = "vistas/modulos/mostrar_ingreso.php"
        }
        elseif($enlace == "mostrar_medico")
        {
            $modulo = "vistas/modulos/mostrar_medico.php"
        }
        elseif($enlace == "mostrar_persona")
        {
            $modulo = "vistas/modulos/mostrar_persona.php"
        }
        elseif($enlace == "mostrar_paciente")
        {
            $modulo = "vistas/modulos/mostrar_paciente.php"
        }
        elseif($enlace == "mostrar_poblacion")
        {
            $modulo = "vistas/modulos/mostrar_poblacion.php"
        }
        elseif($enlace == "mostrar_provincia")
        {
            $modulo = "vistas/modulos/mostrar_provincia.php"
        }
        else
        {
            $modulo = "vistas/modulos/principal.php";
        }
        
    }
}



?>