<?php
  if($login == 1){
    echo 
    '<div class="alert alert-success alert-dismissible" role="alert">
      <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
      <strong>Você está autenticado!</strong>
    </div>';
  }
?>

<?php
  if($logout == 1){
    echo 
    '<div class="alert alert-danger alert-dismissible" role="alert">
      <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
      <strong>Até mais!</strong>
    </div>';
  }
?>