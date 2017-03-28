<?php
/**
 * Created by IntelliJ IDEA.
 * User: 권영민
 * Date: 2017-03-22
 * Time: 오전 10:10
 */
session_start();
$id = session_id();
echo "{$id} <br/>";
echo $_SESSION['device'];