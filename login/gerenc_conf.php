<?php

// Verificar se foi enviando dados via POST
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $Id = (isset($_POST["Id"]) && $_POST["Id"] != null) ? $_POST["Id"] : "";
    $Nome = (isset($_POST["Nome"]) && $_POST["Nome"] != null) ? $_POST["Nome"] : "";
    $Data = (isset($_POST["Data"]) && $_POST["Data"] != null) ? $_POST["Data"] : "";
    $Descricao = (isset($_POST["Descricao"]) && $_POST["Descricao"] != null) ? $_POST["Descricao"] : "";
    $Situacao = (isset($_POST["Situacao"]) && $_POST["Situacao"] != null) ? $_POST["Situacao"] : NULL;
    $Imagem = (isset($_POST["Imagem"]) && $_POST["Imagem"] != null) ? $_POST["Imagem"] : NULL;
} else if (!isset($Id)) {
    // Se não se não foi setado nenhum valor para variável $Id
    $Id = (isset($_GET["Id"]) && $_GET["Id"] != null) ? $_GET["Id"] : "";
    $Nome = NULL;
    $Data = NULL;
    $Descricao = NULL;
    $Situacao = NULL;
    $Imagem = NULL;
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
if (isset($_REQUEST["act"]) && $_REQUEST["act"] == "save" && $Nome != "") {
    try {
        if ($Id != "") {
            $stmt = $conexao->prepare("UPDATE pesquisas SET Nome=?, Data=?, Descricao=?, Situacao=?, link=? WHERE Id = ?");
            $stmt->bindParam(6, $Id);
        } else {
            $stmt = $conexao->prepare("INSERT INTO pesquisas (Nome, Data, Descricao, Situacao, link) VALUES (?, ?, ?,?, ?)");
        }
        $stmt->bindParam(1, $Nome);
        $stmt->bindParam(2, $Data);
        $stmt->bindParam(3, $Descricao);
        $stmt->bindParam(4, $Situacao);
        $stmt->bindParam(5, $Imagem);
        
        if ($stmt->execute()) {
            if ($stmt->rowCount() > 0) {
                echo "Dados cadastrados com sucesso!";
                $Id = null;
                $Nome = null;
                $Data = null;
                $Descricao = null;
                $Situacao = null;
                $Imagem = null;
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
            $Nome = $rs->nome;
            $Data = $rs->data;
            $Descricao = $rs->descricao;
            $Situacao = $rs->situacao;
            $Imagem = $rs->link;
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
