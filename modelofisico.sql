DROP database IF EXISTS cabe_planta;
CREATE DATABASE cabe_planta;
USE cabe_planta;

CREATE TABLE IF NOT EXISTS usuario(
id INT UNSIGNED AUTO_INCREMENT NOT NULL,
nome_usuario VARCHAR(60) NOT NULL,
email VARCHAR(60) NOT NULL,
senha VARCHAR(60) NOT NULL,
tipo INT NOT NULL,
data_conta TIMESTAMP NULL DEFAULT CURRENT_TIMESTAMP,
PRIMARY KEY(id)
);

CREATE TABLE IF NOT EXISTS loja(
id INT UNSIGNED AUTO_INCREMENT NOT NULL,
usuario_id INT UNSIGNED NOT NULL,
logradouro VARCHAR(60) NOT NULL,
numero INT UNSIGNED NOT NULL,
complemento VARCHAR(60) NULL,
bairro VARCHAR(60) NOT NULL,
cidade VARCHAR(60) NOT NULL,
uf CHAR(2) NOT NULL,
cep CHAR(10) NOT NULL,
PRIMARY KEY(id),
FOREIGN KEY(usuario_id) REFERENCES usuario(id)
);

CREATE TABLE IF NOT EXISTS pedreiro(
id INT UNSIGNED AUTO_INCREMENT NOT NULL,
usuario_id INT UNSIGNED NOT NULL,
especialidade VARCHAR(40) NOT NULL,
logradouro VARCHAR(60) NOT NULL,
numero INT UNSIGNED NOT NULL,
complemento VARCHAR(60) NULL,
bairro VARCHAR(60) NOT NULL,
cidade VARCHAR(60) NOT NULL,
uf CHAR(2) NOT NULL,
cep CHAR(10) NOT NULL,
PRIMARY KEY(id),
FOREIGN KEY(usuario_id) REFERENCES usuario(id)
);

CREATE TABLE IF NOT EXISTS cliente(
id INT UNSIGNED AUTO_INCREMENT NOT NULL,
usuario_id INT UNSIGNED NOT NULL,
sexo CHAR(1) NOT NULL,
nascimento DATE NOT NULL,
PRIMARY KEY(id),
FOREIGN KEY(usuario_id) REFERENCES usuario(id)
);

CREATE TABLE IF NOT EXISTS telefone(
id INT UNSIGNED AUTO_INCREMENT NOT NULL,
numero CHAR(16) NOT NULL,
usuario_id INT UNSIGNED NULL,
PRIMARY KEY(id),
FOREIGN KEY(usuario_id) REFERENCES usuario(id)
);

CREATE TABLE IF NOT EXISTS avaliacao(
id INT UNSIGNED AUTO_INCREMENT NOT NULL,
pedreiro_id INT UNSIGNED NOT NULL,
cliente_id INT UNSIGNED NOT NULL,
data DATE NOT NULL,
pontuacao INT UNSIGNED NULL,
comentario TEXT NULL,
PRIMARY KEY(id),
FOREIGN KEY(pedreiro_id) REFERENCES pedreiro(id),
FOREIGN KEY(cliente_id) REFERENCES cliente(id)
);

CREATE TABLE IF NOT EXISTS contrato(
id INT UNSIGNED AUTO_INCREMENT NOT NULL,
cliente_id INT UNSIGNED NOT NULL,
pedreiro_id INT UNSIGNED NOT NULL,
data DATE NOT NULL,
descricao TEXT NOT NULL,
valor DOUBLE NOT NULL,
PRIMARY KEY(id),
FOREIGN KEY(cliente_id) REFERENCES cliente(id),
FOREIGN KEY(pedreiro_id) REFERENCES pedreiro(id)
);
