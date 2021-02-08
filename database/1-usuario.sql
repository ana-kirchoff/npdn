CREATE DATABASE db_pesquisas DEFAULT CHARACTER SET utf8 DEFAULT COLLATE utf8_general_ci;

USE db_pesquisas;

CREATE USER 'npdn'@'localhost' IDENTIFIED BY 'npdn1475369';
GRANT ALL PRIVILEGES ON * . * TO 'npdn'@'localhost';

CREATE TABLE `pesquisas` (
  `id` int(11) NOT NULL,
  `nome` varchar(90) NOT NULL,
  `data`  date NOT NULL,
  `descricao` varchar(300) NOT NULL,
  `situacao` varchar(30) NOT NULL,
  `link` varchar(200) NOT NULL
);

CREATE TABLE messages(
	idMessage		int not null auto_increment,
	emailRemetente	varchar(128) not null,
    assunto			varchar(255) not null,	
	texto			text,
    dthrEnvio		datetime,
    lido			int,
    PRIMARY KEY (idMessage)
);

CREATE TABLE usuario (
	idUsuario 	int not null auto_increment,
    email		varchar(128) not null UNIQUE,
    senha		varchar(128) not null,
    PRIMARY KEY ( idUsuario )
);

INSERT INTO `usuario` (idUsuario, email, senha) VALUES (1, 'ndpn_root@npdn.com', 'npdn1475369'); 
ALTER TABLE `pesquisas` ADD PRIMARY KEY (`Id`);
ALTER TABLE `pesquisas` MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT;

SELECT * FROM pesquisas;
Alter table pesquisas Add Data date;





-- "SELECT idUsuario, email, senha, observacao FROM poophp.usuario";

-- "INSERT INTO poophp.usuario (idUsuario, email, senha, observacao) VALUES ('$idUsuario', '$email', '$senha, '$observacao');"

-- "UPDATE poophp.usuario
-- SET	email = '$email', 
-- 	senha = '$senha', 
-- 	observacao = '$observacao'
-- WHERE	idUsuario = '$idUsuario'";

--  "DELETE FROM poophp.usuario  WHERE idUsuario = '$idUsuario'";

