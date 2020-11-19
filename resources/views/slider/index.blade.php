<h3>helothegioi</h3>
<a href="">helo</a>
<a href="">balo</a>
<?php
echo "3 ";
$linklist =route($controllerName);
$linkAdd= route($controllerName.'/from');
$linkEdit=route($controllerName.'/from123',['id'=>12]);
$linkDelete=route($controllerName.'/delete',['id'=>12]);
$linkStatus=route($controllerName.'/status',['status'=>'incative','id'=>3]);
echo "2";
echo'<h3 style="color :red"' .$linklist.'</h3>';
echo'<h3 style="color :red"' .$linkAdd.'</h3>';
echo'<h3 style="color :red"' .$linkEdit.'</h3>';
echo'<h3 style="color :red"' .$linkDelete.'</h3>';
echo'<h3 style="color :red"' .$linkStatus.'</h3>';
echo'<h3 style="color :red"' .$linklist.'</h3>';
  echo "1";

?>
<a href="<?php echo $linkEdit ; ?>">ADD</a>