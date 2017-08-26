<?php

include('./../../../app/api/sso.class.php');
SSO::sessionAuth('loginTest','check=roleID&value=1','http://127.0.0.1/kod/kod_dev/');
echo '登陆成功!'.$_GET['a'];
