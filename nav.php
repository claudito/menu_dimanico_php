<nav class="navbar navbar-default">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="<?php echo PATH; ?>">Inicio</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">  
<?php 
$lista_menu = menu('menu_central'); 
foreach ($lista_menu as $key_menu => $value_menu) 
{
echo '
<ul class="nav navbar-nav">';
echo '
<li class="dropdown">
<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">'.$value_menu['nombre'].'<span class="caret"></span></a>';

echo '
<ul class="dropdown-menu">';

$lista_sub_menu = sub_menu($value_menu['id']);
foreach ($lista_sub_menu as $key_sub_menu => $value_sub_menu)
 {
  if ($value_sub_menu['permiso']=='disabled')
  {
  echo '<li class="'.$value_sub_menu['permiso'].'"><a href="#">'.$value_sub_menu['nombre'].'</a></li>';
  } 
  else
  {
  echo '<li class="'.$value_sub_menu['permiso'].'"><a href="'.PATH.$value_sub_menu['ruta'].'">'.$value_sub_menu['nombre'].'</a></li>';
  }
   
 }

echo'
</ul>
</li>
</ul>';
}
      ?>

  
  <?php 

   echo  menu_form(PATH,'primary','GET','codigo','Ingrese el Código');

   ?>



<ul class="nav navbar-nav navbar-right">
<li><a href="#"><i class="glyphicon glyphicon-user text-success"></i>  Luis Claudio</a></li>

<?php 

$lista_menu_izq = menu('menu_config'); 

foreach ($lista_menu_izq as $key_menu_izq => $value_menu_izq) 
{
  echo '<li class="dropdown">
<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">'.$value_menu_izq['nombre'].'<span class="caret"></span></a>
<ul class="dropdown-menu">';
$lista_sub_menu_izq = sub_menu($value_menu_izq['id']);
foreach ($lista_sub_menu_izq as $key_sub_menu_izq => $value_sub_menu_izq) 
{
  echo '<li><a href="#">'.$value_sub_menu_izq['nombre'].'</a></li>';
}
echo'
</ul>
</li>';

}


 ?>

</ul>



    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>