DROP TABLE IF EXISTS tb_users;
CREATE TABLE tb_users(  
    id INTEGER NOT NULL PRIMARY KEY AUTOINCREMENT UNIQUE,
    usuario VARCHAR(10) NOT NULL,
    nome VARCHAR(150) NOT NULL,
    funcao VARCHAR(50) NOT NULL,
    isAdmin BOOLEAN DEFAULT false NOT NULL,
    isComumUser BOOLEAN DEFAULT true NOT NULL,
    -- foto,
    isAtivo BOOLEAN DEFAULT true NOT NULL
);

INSERT INTO tb_users (usuario, nome, funcao, isAdmin, isComumUser, isAtivo) VALUES ('admin', 'Administrador', 'Administrador', true, false, true);

DROP TABLE tb_point;

CREATE TABLE tb_point(
    id INTEGER NOT NULL PRIMARY KEY AUTOINCREMENT UNIQUE,
    id_user INTEGER NOT NULL,
    dia INTEGER NOT NULL,
    mes VARCHAR(25) NOT NULL,
    ano INTEGER NOT NULL,
    hora TIME NOT NULL DEFAULT CURRENT_TIME,
    data_criacao DATE DEFAULT CURRENT_DATE NOT NULL,
    FOREIGN KEY(id_user) REFERENCES tb_user(id)
);