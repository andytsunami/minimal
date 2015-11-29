create database minimal;
use minimal;

CREATE TABLE
    minimal.visitante
    (
        id INT NOT NULL AUTO_INCREMENT,
        nome VARCHAR(255) NOT NULL,
        email VARCHAR(255) NOT NULL,
        senha VARCHAR(255) NOT NULL,
        PRIMARY KEY (id)
    )
    ENGINE=InnoDB DEFAULT CHARSET=latin1
    ALTER TABLE
    minimal.visitante ADD CONSTRAINT emailVisitante UNIQUE (email);

    CREATE TABLE
    minimal.newsletter
    (
        email VARCHAR(255),
        PRIMARY KEY (email),
        CONSTRAINT email_mailing UNIQUE (email)
    )
    ENGINE=InnoDB DEFAULT CHARSET=latin1;

    CREATE TABLE
    minimal.galeria
    (
        id INT NOT NULL AUTO_INCREMENT,
        id_Visitante INT,
        data DATE NOT NULL,
        titulo VARCHAR(255) NOT NULL,
        PRIMARY KEY (id)
    )
    ENGINE=InnoDB DEFAULT CHARSET=latin1;

    CREATE TABLE `minimal`.`tags` (
      `id` INT NOT NULL AUTO_INCREMENT,
      `tag` VARCHAR(255) NULL,
      PRIMARY KEY (`id`),
      UNIQUE INDEX `tag_UNIQUE` (`tag` ASC));

    CREATE TABLE `minimal`.`tag_galeria` (
  `id_tag` INT NOT NULL,
  `id_galeria` INT NOT NULL,
  PRIMARY KEY (`id_tag`, `id_galeria`),
  INDEX `fk_galeria_idx` (`id_galeria` ASC),
  CONSTRAINT `fk_galeria`
    FOREIGN KEY (`id_galeria`)
    REFERENCES `minimal`.`galeria` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_tag`
    FOREIGN KEY (`id_tag`)
    REFERENCES `minimal`.`tags` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION);


ALTER TABLE `minimal`.`galeria` 
CHANGE COLUMN `id_Visitante` `id_Visitante` INT(11) NOT NULL ,
ADD INDEX `fk_visitante_idx` (`id_Visitante` ASC);
ALTER TABLE `minimal`.`galeria` 
ADD CONSTRAINT `fk_visitante`
  FOREIGN KEY (`id_Visitante`)
  REFERENCES `minimal`.`visitante` (`id`)
  ON DELETE NO ACTION
  ON UPDATE NO ACTION;

  ALTER TABLE `minimal`.`galeria` 
ADD COLUMN `imagem` BLOB NOT NULL AFTER `titulo`;

ALTER TABLE `minimal`.`galeria` 
CHANGE COLUMN `imagem` `imagem` LONGBLOB NOT NULL ;

ALTER TABLE `minimal`.`galeria` 
CHANGE COLUMN `data` `data` DATETIME NOT NULL ;




CREATE DATABASE minimal;
USE minimal;
CREATE TABLE galeria (id int NOT NULL AUTO_INCREMENT, id_Visitante int, data date NOT NULL, titulo varchar(255) NOT NULL, PRIMARY KEY (id)) ENGINE=InnoDB DEFAULT CHARSET=latin1;
CREATE TABLE newsletter (email varchar(255) NOT NULL, PRIMARY KEY (email), CONSTRAINT email_mailing UNIQUE (email)) ENGINE=InnoDB DEFAULT CHARSET=latin1;
INSERT INTO newsletter (email) VALUES ('news@news.com.br');
CREATE TABLE visitante (id int NOT NULL AUTO_INCREMENT, nome varchar(255) NOT NULL, email varchar(255) NOT NULL, senha varchar(255) NOT NULL, PRIMARY KEY (id), CONSTRAINT emailVisitante UNIQUE (email)) ENGINE=InnoDB DEFAULT CHARSET=latin1;
INSERT INTO visitante (id, nome, email, senha) VALUES (1, 'Teste', 'teste@teste', '123456');
INSERT INTO visitante (id, nome, email, senha) VALUES (4, 'meu nome', 'meu@migo.com.br', 'e8d95a51f3af4a3b134bf6bb680a213a');
INSERT INTO visitante (id, nome, email, senha) VALUES (18, 'opaopaopa', 'opaoapoapao', 'a01610228fe998f515a72dd730294d87');
INSERT INTO visitante (id, nome, email, senha) VALUES (19, 'meu nome', 'news@news.com.br', 'e10adc3949ba59abbe56e057f20f883e');
