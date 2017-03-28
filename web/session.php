<?php
/**
 * Created by IntelliJ IDEA.
 * User: 권영민
 * Date: 2017-03-22
 * Time: 오전 10:06
 */
session_start();
$_SESSION['device'] = 'iphons';
$_SESSION['color'] = 'red';
echo "making Session <br />";
echo "===================<br/>";
echo "1. 세션 초기화 session_start()사용";
echo "<a href=session2.php>이동<br/>";