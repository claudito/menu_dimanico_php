<?php 


function menu($tipo)
{
$db = new Conexion();
$query  = "SELECT * FROM menu  WHERE tipo='".$tipo."'";
$result = $db->query($query);
while ($fila = mysqli_fetch_assoc($result) )
{
 $dato[] = $fila;
}

return $dato;

}

function sub_menu($menu)
{

$db = new Conexion();
$query  = "SELECT * FROM sub_menu WHERE menu_id='".$menu."' ORDER BY nombre";
$result = $db->query($query);
while ($fila = mysqli_fetch_assoc($result) )
{
 $dato[] = $fila;
}

return $dato;

}

function menu_form($url,$color,$tipo,$valor,$placeholder)
{

return '<form class="navbar-form navbar-left" method="'.$tipo.'" action="'.$url.'">
        <div class="form-group">
          <input type="text" name="'.$valor.'" class="form-control" placeholder="'.$placeholder.'" required>
        </div>
        <button type="submit" class="btn btn-'.$color.'">Consultar</button>
      </form>';

}


 ?>