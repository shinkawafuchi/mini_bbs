<?PHP 
try{
    $db=new PDO('mysql:dbname=mini_bbs;host=127.0.0.1;charset=utf8','root','root');
}catch(PDOException $e){
    print('DB接続エラー;'.$e->getMessage());
}
?>