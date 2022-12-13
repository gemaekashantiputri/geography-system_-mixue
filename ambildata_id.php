<?php
include "koneksi.php";
$Q = mysqli_query($koneksi,"SELECT * FROM mixuepwt where id_mixue=".$id)or die(mysql_error());
if($Q){
 $posts = array();
      if(mysqli_num_rows($Q))
      {
             while($post = mysqli_fetch_assoc($Q)){
                     $posts[] = $post;
             }
      }  
      $data = json_encode(array('results'=>$posts));             
}
