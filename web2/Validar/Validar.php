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
    
    if ($user=='admin' && $pass =='admin')
    {
        /*$_SESSION["usuario"] = $user;*/
        echo '<script>location.href = "../index.html"</script>';
    }
    else
    {
        echo '<strong> ERROR!</strong> Usuario o Contraseña incorrecto.';
    }
}   
?>