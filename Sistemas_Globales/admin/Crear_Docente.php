<html>
<head>
	<title>Sistema de Planes Globales</title>
	<link rel="stylesheet" type="text/css" href="Style.css">
</head>
<body>
	<center><h2>Sistema de Planes Globales</h2></center>
	<hr></hr>
	
	<div id="menu">
    <div id="titulo">Inicio</div>
    <div id="titulo">
    <a id="titulo" href="Crear_Docente.php">Crear Docente</a>
    <a id="titulo"href="Crear_Plan_Global_Root.php">Crear Nuevo Plan Global</a>
    <a id="titulo" href="listado_Planes_Globales.php">Lista de Planes Globales</a>
    </div>
    <div id="titulo">Plan Analitico</div>
    <div id="titulo">Busqueda</div>
    <div id="titulo">Manual de Usuario</div>

	</div>

<div id="cuerpo">
	<?php?>
     
     
          <form method="post" action="">
         
          <hr>
            <table id="tabla_Plan_Global">
          	
          	<tr><td colspan="3"><h3>I. Crear Nuevo Docente</h3></td></tr>
          	<tr><td> &bull;Nombre Completo :</td><td colspan="2"><input type="text" size="70"></td></tr>
            <tr><td> &bull;Apellido Paterno :</td><td colspan="2"><input type="text" size="70"></td></tr>
            <tr><td> &bull;Apellido Materno:</td><td colspan="2"><input type="text" size="70"></td></tr>
            <tr><td> &bull;CI/NIT:</td><td colspan="2"><input type="text" size="70"></td></tr>
            <tr><td> &bull;Direccion :</td><td colspan="2"><input type="text" size="70"></td></tr>
            <tr><td> &bull;Telefono :</td><td colspan="2"><input type="text" size="30"></td></tr>
            <tr><td> &bull;Celular :</td><td colspan="2"><input type="text" size="30"></td></tr>
            <tr><td> &bull;E-Mail:</td><td colspan="2"><input type="text" size="70"></td></tr>
            <tr><td> &bull;Carrera:</td><td colspan="2"><input type="text" size="70"></td></tr>
            <tr><td colspan="2"><center><input type="submit" value="Registrar"></center></td></tr>
          </table>
          <br>
          
          
	</form>

	
    
    
</div>


	

</body>


</footer>
</html>

<html>
<head>
  <title>Sistema de Planes Globales</title>
  <link rel="stylesheet" type="text/css" href="Style.css">
</head>
<body>
  <header><center><h2 id="titulo_Principal">Sistema de Planes Globales y Programas Analiticos</h2></center>
  <hr></hr>
  </header>
  
  <aside id="menu">
    <div id="titulo"><a id="titulo" href="index.php">Inicio</a></div>
    <div id="titulo"><a id="titulo" href="Plan_Global_Publico.php">Planes Globales</a></div>
    <div id="titulo"><a id="titulo" href="Programa_Analitico_Publico.php">Programas Analiticos</a></div>
    <div id="titulo"><a id="titulo" href="Manual_de_Usuario.php">Manual de Usuario</a></div>
    
    <form method="post" action="redireccion.php">
    <table id="tabla">
    <tr > <td id="t">usuario</td>
         <td id="t"><input type ="text" name="Txt_User" size="30" class="Txt_Input" placeholder="Nombre Usuario"></td></tr>
    <tr > <td id="t">password</td>
        <td id="t"><input type ="password" name="Password_User" size="30" class="Txt_Input" placeholder="Contrasenia"></td></tr>
        <tr><td id="t">cargo</td><td id="t">
        <select class="tipo_usuario" name="select[]">
          
          <option value=""></option>  
          <option value="Docente">Docente</option>
          <option value="Administrador">Administrador</option>
        </select></td></tr>
    <tr > <td id="t"  colspan="2"><center><input type ="submit" name="BtnIngreso" value="Ingresar" size="30" class="Bottom"></center></td></tr>

  </table>
  </form>




  </aside>

<article id="cuerpo">
    <center><img src="imagen.JPG"></center>

</article>

</body>


<footer>




<article id="footer">
<hr>
 <center>

 <h3 id="titulo_footer">Paginas Amigas</br>
 <a id="link_footer" href=""> Fcyt </a>
 <a id="link_footer" href=""> Umss </a>
 <a id="link_footer" href=""> Saga </a>
 <a id="link_footer" href=""> Moodle </a>
 <a id="link_footer" href=""> Caroline </a>
 </h3>
 

 </center>


</article>



</footer>
</html>