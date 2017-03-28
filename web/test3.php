<?php
echo "파일의 내용을 읽어와 다른 파일로 기록하는 함수 <br />";
$fn = "a.txt";
echo "읽어올 파일 $fn <br />";
if(file_exists($fn)){
    $fp = fopen($fn,"r");
    echo "file load success <br />";
    echo "다음은 $fn 의 파일 내용입니다. <hr /><br />";
} else {
    echo "there is no file <br />";
    exit;
}

$content = fread($fp, filesize($fn));
$content = str_replace("\n","<br>",$content);
echo $content;

$fw = fopen("b.txt","a");
fwrite($fw,$content);
fclose($fp);
echo "<hr />";
echo "file explorer <br />";
echo "please confirm b.txt <br />";
?>