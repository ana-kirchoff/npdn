<?php

// Verificar se foi enviando dados via POST
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $Id = (isset($_POST["Id"]) && $_POST["Id"] != null) ? $_POST["Id"] : "";
    $Email = (isset($_POST["Email"]) && $_POST["Email"] != null) ? $_POST["Email"] : "";
    $Senha = (isset($_POST["Senha"]) && $_POST["Senha"] != null) ? $_POST["Senha"] : "";
} else if (!isset($Id)) {
    // Se não se não foi setado nenhum valor para variável $Id
    $Id = (isset($_GET["Id"]) && $_GET["Id"] != null) ? $_GET["Id"] : "";
    $Email = NULL;
    $Senha = NULL;
}

// Cria a conexão com o banco de dados
try {
    $conexao = new PDO("mysql:host=localhost;dbname=db_pesquisas", "npdn", "npdn1475369");
    $conexao->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $conexao->exec("set names utf8");
} catch (PDOException $erro) {
    echo "Erro na conexão:".$erro->getMessage();
}

// Bloco If que Salva os dados no Banco - atua como Create e Update
if (isset($_REQUEST["act"]) && $_REQUEST["act"] == "save" && $Email != "") {
    try {
        if ($Id != "") {
            $stmt = $conexao->prepare("UPDATE login SET email=?, senha=? WHERE id = ?");
            $stmt->bindParam(5, $Id);
        } else {
            $stmt = $conexao->prepare("INSERT INTO usuario (email, senha) VALUES (?, ?)");
        }
        $stmt->bindParam(1, $Email);
        $stmt->bindParam(2, $Senha);
        
        if ($stmt->execute()) {
            if ($stmt->rowCount() > 0) {
                echo "Dados cadastrados com sucesso!";
                $Id = null;
                $Email = null;
                $Senha = null;
            } else {
                echo "Erro ao tentar efetivar cadastro";
            }
        } else {
            throw new PDOException("Erro: Não foi possível executar a declaração sql");
        }
    } catch (PDOException $erro) {
        echo "Erro: ".$erro->getMessage();
    }
}

// Bloco if que recupera as informações no formulário, etapa utilizada pelo Update
if (isset($_REQUEST["act"]) && $_REQUEST["act"] == "upd" && $Id != "") {
    try {
        $stmt = $conexao->prepare("SELECT * FROM pesquisas WHERE Id = ?");
        $stmt->bindParam(1, $Id, PDO::PARAM_INT);
        if ($stmt->execute()) {
            $rs = $stmt->fetch(PDO::FETCH_OBJ);
            $Id = $rs->Id;
            $Nome = $rs->Nome;
            $Email = $rs->Email;
            $Senha = $rs->Senha;
        } else {
            throw new PDOException("Erro: Não foi possível executar a declaração sql");
        }
    } catch (PDOException $erro) {
        echo "Erro: ".$erro->getMessage();
    }
}

// Bloco if utilizado pela etapa Delete
if (isset($_REQUEST["act"]) && $_REQUEST["act"] == "del" && $Id != "") {
    try {
        $stmt = $conexao->prepare("DELETE FROM pesquisas WHERE Id = ?");
        $stmt->bindParam(1, $Id, PDO::PARAM_INT);
        if ($stmt->execute()) {
            echo "";
            $Id = null;
        } else {
            throw new PDOException("Erro: Não foi possível executar a declaração sql");
        }
    } catch (PDOException $erro) {
        echo "Erro: ".$erro->getMessage();
    }
}
?>
