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
    