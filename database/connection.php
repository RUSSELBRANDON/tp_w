
<?php
function connection(){
    $_SETTINGS = parse_ini_file('./../../settings.ini', true);

    $db = new \PDO(
        "mysql:hostname={$_SETTINGS['db']['host']};dbname={$_SETTINGS['db']['name']}",
        $_SETTINGS['db']['user'],
        $_SETTINGS['db']['pass'],
        [
        \PDO::ATTR_DEFAULT_FETCH_MODE => \PDO::FETCH_ASSOC,
        \PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES 'utf8'"
        ]
    );

    if ($db != null){
        return $db;
    }else{
        throw new PDOException('impossible de se connecter a votre base de donnees\n');

}}
?>