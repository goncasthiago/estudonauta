<?php
echo "<header> ";
if (empty($_SESSION['user'])){

    echo "<a href='user-login.php'>Entrar</a>";

}else{
    echo "Olá <strong>" . $_SESSION['nome'] . "</strong> | ";
    echo "<a href='user-dados.php'>Meus Dados</a> | ";
    if (is_admin()){
        echo "<a href='user-dados.php'>Novo Usuário</a> | ";
        echo "<a href='user-dados.php'>Novo Jogo</a> | ";
    }
    echo "<a href='user-logout.php'>Sair</a>";
}
echo "</header> ";