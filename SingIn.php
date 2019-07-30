<?php
if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $name = $_REQUEST['name'];
    $pass = $_REQUEST['pass'];
    $email = $_REQUEST['email'];
    $phone = $_REQUEST['phone'];
    if (!empty($name) && !empty($pass) && !empty($email) && !empty($phone)) {
        $dataJson = file_get_contents('data.json');
        $arrData = json_decode($dataJson, true);
        $newData = array('name' => $name, 'pass' => $pass, 'email' => $email, 'phone' => $phone);
        array_push($arrData, $newData);
        file_put_contents('data.json', json_encode($arrData));
        echo '<h1 style="color: red">Bạn đã đăng ký thành công</h1>';
    }
    else {
        echo '<h1 style="color: red">Bạn đăng ký thất bại </h1>';
    }
}
?>