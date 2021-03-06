<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>支付宝APP支付示例</title>
</head>
<body>
<form action="" method="post">
    <table>
        <thead>
            <td></td>
            <td>支付宝APP支付示例</td>
        </thead>
        <tr>
            <td>商户订单号: </td>
            <td>
                <input type="text" name="out_trade_no" value="<?php echo (isset($_POST['out_trade_no'])?$_POST['out_trade_no']:'');?>">
            </td>
        </tr>

        <tr>
            <td>金额: </td>
            <td>
                <input type="text" name="total_amount" value="<?php echo (isset($_POST['total_amount'])?$_POST['total_amount']:'');?>">
            </td>
        </tr>


        <tr>
            <td>标题: </td>
            <td>
                <input type="text" name="subject" value="<?php echo (isset($_POST['subject'])?$_POST['subject']:'');?>">
            </td>
        </tr>


        <tr>
            <td>商品描述: </td>
            <td>
                <input type="text" name="body" value="<?php echo (isset($_POST['body'])?$_POST['body']:'');?>">
            </td>
        </tr>

        <tr>
            <td> </td>
            <td>
                <button type="submit">立即支付</button>
            </td>
        </tr>
    </table>
</form>
</body>
</html>
<?php
include_once __DIR__.'/../src/autoload.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $config = include_once __DIR__.'/config/ali-app.php';
    $pay = \Jueneng\Pay::getInstance('alipay.app');
    $pay->setConfig($config);
    $result = $pay->createOrder($_POST);

    var_dump($result);
    var_dump('执行结束');
}


