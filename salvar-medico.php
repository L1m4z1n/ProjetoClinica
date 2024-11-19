<?php
switch ($_REQUEST['acao']) {
    case 'cadastrar':
        $nome = $_POST['nome_medico'];
        $crm = $_POST['crm_medico'];
        $especialidade = $_POST['especialidade_medico'];
      
        $sql = "INSERT INTO medico
                (nome_medico, 
                crm_medico, 
                especialidade_medico)
                values
                ('{$nome}',
                '{$crm}',
                '{$especialidade}')";

                $res = $conexao->query($sql);

                if ($res==true) {
                    print "<script>alert('Cadastrou com sucesso!');</script>";
                    print "<script>location.href='?page=listar-medico';</script>";
                } else{
                    print "<script>alert('Não deu certo!');</script>";
                    print "<script>location.href='?page=listar-medico';</script>";
                }
        break;

    case 'editar':
            $nome = $_POST['nome_medico'];
            $crm = $_POST['crm_medico'];
            $especialidade = $_POST['especialidade_medico'];
          
            $sql = "UPDATE medico SET
                    nome_medico='{$nome}', 
                    crm_medico='{$crm}', 
                    especialidade_medico='{$especialidade}'
                    WHERE
                    id_medico=".$_POST["id_medico"];
    
                    $res = $conexao->query($sql);
    
                    if ($res==true) {
                        print "<script>alert('Editou com sucesso!');</script>";
                        print "<script>location.href='?page=listar-medico';</script>";
                    } else{
                        print "<script>alert('Não deu certo!');</script>";
                        print "<script>location.href='?page=listar-medico';</script>";
                    }
            break;
        break;

    case 'excluir':
            $nome = $_POST['nome_medico'];
            $crm = $_POST['crm_medico'];
            $especialidade = $_POST['especialidade_medico'];
          
            $sql = "DELETE medico
                   WHERE id_medico=".$_REQUEST['id_medico'];
    
                    $res = $conexao->query($sql);
    
                    if ($res==true) {
                        print "<script>alert('Excluiu com sucesso!');</script>";
                        print "<script>location.href='?page=listar-medico';</script>";
                    } else{
                        print "<script>alert('Não deu certo!');</script>";
                        print "<script>location.href='?page=listar-medico';</script>";
                    }
            break;
    
        break;

}
