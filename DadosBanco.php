<?php
class Banco
{
    //cadastro de login
    public function Cadlogin()
    {
        if(isset($_POST['btn_cadastrar'])){          
        $name  =$_POST['tNome'];
        $login =$_POST['tLogin'];
        $senha =$_POST['tSenha'];
        $idade =$_POST['tNasc'];        
        $email =$_POST['tMail'];
        $rua   =$_POST['tRua'];
        $num   =$_POST['tNum'];
        $uf    =$_POST['tUF'];
        $cidade=$_POST['tCidade'];
        if ( ! empty( $_POST['tSexo'] ) ) {
		$sexo =$_POST['tSexo'];
	}
        try {
            $conecta= new PDO("mysql:host=127.0.0.1;port=3306;dbname=catalogo_online","root","");
            $conecta->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            echo "ate aqui passei";
            $texto="INSERT INTO cadastro(nome,login,senha,idade,email,rua,numero,estado,sexo,cidade)VALUE('".$name."','".$login."','".$senha."',"
                    . "'".$idade."',"
                    . "'".$email."','".$rua."','".$num."','".$uf."','".$sexo."','".$cidade."')";
            $conecta->exec($texto);
            echo '<script language="javascript">';
            echo 'alert("Dados salvos com sucesso ")';
            echo '</script>';
    
        } catch (PDOException $erro) {
            echo '<script language="javascript">';
            echo 'alert("Algum erro no banco")';
            echo '</script>';
        }
        }  
    }
    }
?>

