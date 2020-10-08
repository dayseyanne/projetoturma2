<?php
        
	 session_start(); 
     include("conn.php");
   
    if((isset($_POST['login'])) && (isset($_POST['senha']))){
        $usuario = mysqli_real_escape_string($conn, $_POST['login']); 
        $senha = mysqli_real_escape_string($conn, $_POST['senha']);
       // $senha = md5($senha);
            
      
        $result_usuario = "SELECT * FROM aluno WHERE emailAluno = '".$usuario."' && senhaAluno = '".$senha."' LIMIT 1";
        $resultado_usuario = mysqli_query($conn, $result_usuario);
        $resultado = mysqli_fetch_assoc($resultado_usuario);
        
     
        if(isset($resultado)){
			unset(
			    $_SESSION['login'],
				$_SESSION['senha']
			);   
           //echo $usuario." "."logado";
           header("Location: userlogado.php");
        }else{    
            
            $_SESSION['loginErro'] = "Usuário ou senha Inválido";
            header("Location: index.php");
        }
   
    }else{
        $_SESSION['loginErro'] = "Usuário ou senha inválido";
        header("Location: index.php");
    }
?>