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
    ENGINE=InnoDB DEFAULT CHARSET=latin1