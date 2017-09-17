<?php
    $user=$_POST['user'];
    $pass=$_POST['pass'];
echo '<span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>';

if ($user == null)
{
    echo '<strong> ERROR!</strong> Ingrese Usuario.';
}
elseif ($pass == null) {
    echo '<strong> ERROR!</strong> Ingrese Contraseña';
}
else
{
    
    if ($user=='pnpusuario' && $pass =='pnpusuario')
    {
        /*$_SESSION["comisaria"] = $user;*/
        echo '<script>location.href = "modulos/comisaria.html"</script>';
    }
    elseif ($user=='pjusuario' && $pass =='pjusuario'){
        echo '<script>location.href = "modulos/poderjudicial.html"</script>';
    }
    elseif ($user=='mpusuario' && $pass =='mpusuario'){
        echo '<script>location.href = "modulos/ministeriopublico.html"</script>';
    }
    elseif ($user=='cemusuario' && $pass =='cemusuario'){
        echo '<script>location.href = "modulos/cem.html"</script>';
    }
    elseif ($user=='mlusuario' && $pass =='mlusuario'){
        echo '<script>location.href = "modulos/medicinalegal.html"</script>';
    }
    else
    {
        echo '<strong> ERROR!</strong> Usuario o Contraseña incorrecto.';
    }
}   
?>