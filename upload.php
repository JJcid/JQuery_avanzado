<?php
//No utilizar en servidor público ---MUY PELIGROSO----

echo 'Has subido un archivo: '.$_FILES['file']['name'];

move_uploaded_file($_FILES['file']['tmp_name'], $_FILES['file']['name']);