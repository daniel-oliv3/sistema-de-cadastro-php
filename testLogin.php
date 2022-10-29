<?php



//print_r($_REQUEST);
/* ======= Validação ======= */
if(isset($_POST['submit']) && !empty($_POST['email']) && !empty($_POST['senha'])){
    //acessa
    include_once('config.php');
    $email = $_POST['email'];
    $senha = $_POST['senha'];

    /*print_r('E-mail: ' . $email);
    print_r('<br>');
    print_r('Senha: ' . $senha);*/

    $sql = "SELECT * FROM usuarios WHERE email = '$email' and senha = '$senha'";

    $result = $conexao->query($sql);

    /*print_r($sql);
    print_r($result);*/

    //verificar o numero de linhas(rows)existe no Db
    if(mysqli_num_rows($result) < 1){
        //print_r('Não existe!');
        header('Location: login.php');
    }else {
        //print_r('Existe!');
        header('Location: sistema.php');
    }

}else {
    //não acessa
    header('Location: login.php');
}


?>