USE cabe na planta;

INSERT INTO usuario(id,nome_usuario,email,senha,tipo)
VALUES(null, 'lucuano', 'luciano@gmail.com', 'pedreiro1', 2);
INSERT INTO usuario(id,nome_usuario,email,senha,tipo)
VALUES(null, 'simião', 'simiao@gmail.com', 'pedreiro2', 2);
INSERT INTO usuario(id,nome_usuario,email,senha,tipo)
VALUES(null, 'agenor', 'agenor@gmail.com', 'pedreiro3', 2);
INSERT INTO usuario(id,nome_usuario,email,senha,tipo)
VALUES(null, 'joao paulo oliveira', 'joao-pedreiro@gmail.com', 'pedreiro4', 2);
INSERT INTO usuario(id,nome_usuario,email,senha,tipo)
VALUES(null, 'ismael', 'ismael@gmail.com', 'pedreiro5', 2);
INSERT INTO usuario(id,nome_usuario,email,senha,tipo)
VALUES(null, 'alaerte', 'alaerte@gmail.com', 'pedreiro6', 2);
INSERT INTO usuario(id,nome_usuario,email,senha,tipo)
VALUES(null, 'adair antonio', 'adair@gmail.com', 'pedreiro7', 2);
INSERT INTO usuario(id,nome_usuario,email,senha,tipo)
VALUES(null, 'felicio', 'felicio@gmail.com', 'pedreiro8', 2);
INSERT INTO usuario(id,nome_usuario,email,senha,tipo)
VALUES(null, 'paulo josé silva', 'paulo@gmail.com', 'pedreiro9', 2);

INSERT INTO usuario(id,nome_usuario,email,senha,tipo)
VALUES(null, 'moraes', 'paulo@gmail.com', 'pedreiro9', 2);
INSERT INTO usuario(id,nome_usuario,email,senha,tipo)
VALUES(null, 'julha', 'paulo@gmail.com', 'pedreiro9', 2);


INSERT INTO pedreiro(id, usuario_id, especialidade, logradouro, numero, complemento, bairro, cidade, uf, cep)
VALUES(null, 1, 'Pedreiro', 'rua amazonas', '619', '', 'ouro negro', 'ibirite', 'mg', '32400-000');
INSERT INTO pedreiro(id, usuario_id, especialidade, logradouro, numero, complemento, bairro, cidade, uf, cep)
VALUES(null, 2, 'Pedreiro', 'rua vista alegre', '388', '', 'montreal', 'ibirite', 'mg', '32400-000');
INSERT INTO pedreiro(id, usuario_id, especialidade, logradouro, numero, complemento, bairro, cidade, uf, cep)
VALUES(null, 3, 'Pedreiro', 'rua rio de janerio', '678', '', 'ouro negro', 'ibirite', 'mg', '32400-000');
INSERT INTO pedreiro(id, usuario_id, especialidade, logradouro, numero, complemento, bairro, cidade, uf, cep)
VALUES(null, 4, 'Pedreiro', 'rua italia', '126', '', 'petrovale', 'ibirite', 'mg', '32400-000');
INSERT INTO pedreiro(id, usuario_id, especialidade, logradouro, numero, complemento, bairro, cidade, uf, cep)
VALUES(null, 5, 'Pedreiro', 'rua jose coimbra', '16', '', 'jardim nazareno', 'ibirite', 'mg', '32400-000');
INSERT INTO pedreiro(id, usuario_id, especialidade, logradouro, numero, complemento, bairro, cidade, uf, cep)
VALUES(null, 6, 'Pedreiro', 'rua hortencia', '245', '', 'jardim nazareno', 'ibirite', 'mg', '32400-000');
INSERT INTO pedreiro(id, usuario_id, especialidade, logradouro, numero, complemento, bairro, cidade, uf, cep)
VALUES(null, 7, 'Pedreiro', 'rua amazonas', '48', '', 'ouro negro', 'ibirite', 'mg', '32400-000');
INSERT INTO pedreiro(id, usuario_id, especialidade, logradouro, numero, complemento, bairro, cidade, uf, cep)
VALUES(null, 8, 'Pedreiro', 'rua amazonas', '58', '', 'ouro negro', 'ibirite', 'mg', '32400-000');
INSERT INTO pedreiro(id, usuario_id, especialidade, logradouro, numero, complemento, bairro, cidade, uf, cep)
VALUES(null, 9, 'Pedreiro', 'rua maria do carmo', '126', '', 'petrovale', 'ibirite', 'mg', '32400-000');

INSERT INTO pedreiro(id, usuario_id, especialidade, logradouro, numero, complemento, bairro, cidade, uf, cep)
VALUES(null, 11, 'Eletricista', 'rua maria do carmo', '126', '', 'petrovale', 'belohorizonte', 'mg', '32400-000');


INSERT INTO telefone(id, numero, usuario_id)
VALUES(null, '(31) 99674-7641', 1);
INSERT INTO telefone(id, numero, usuario_id)
VALUES(null, '(31) 99287-8085', 2);
INSERT INTO telefone(id, numero, usuario_id)
VALUES(null, '(31) 3599-8044', 3);
INSERT INTO telefone(id, numero, usuario_id)
VALUES(null, '(31) 97119-5798', 4);
INSERT INTO telefone(id, numero, usuario_id)
VALUES(null, '(31) 99534-7481', 5);
INSERT INTO telefone(id, numero, usuario_id)
VALUES(null, '(31) 99918-1816', 6);
INSERT INTO telefone(id, numero, usuario_id)
VALUES(null, '(31) 3533-9491', 7);
INSERT INTO telefone(id, numero, usuario_id)
VALUES(null, '(31) 995300350', 8);
INSERT INTO telefone(id, numero, usuario_id)
VALUES(null, '(31) 991215694', 9);

INSERT INTO usuario(id,nome_usuario,email,senha,tipo)
VALUES(null, 'debora', 'deborakelly26@hotmail.com', 'comum', 3);
INSERT INTO usuario(id,nome_usuario,email,senha,tipo)
VALUES(null, 'katia', 'katiacilene.dp@hotmail.com', 'comum', 3);
INSERT INTO usuario(id,nome_usuario,email,senha,tipo)
VALUES(null, 'antonio', 'antonio@hotmail.com', 'comum', 3);
INSERT INTO usuario(id,nome_usuario,email,senha,tipo)
VALUES(null, 'claudio', 'merceariaouronegro@hotmail.com', 'comum', 3);
INSERT INTO usuario(id,nome_usuario,email,senha,tipo)
VALUES(null, 'vania', 'vania@hotmail.com', 'comum', 3);

INSERT INTO cliente(id, usuario_id, sexo, nascimento)
VALUES(null, 10, 'f', '1982/07/16');
INSERT INTO cliente(id, usuario_id, sexo, nascimento)
VALUES(null, 11, 'f', '1969/06/27');
INSERT INTO cliente(id, usuario_id, sexo, nascimento)
VALUES(null, 12, 'm', '1965/06/24');
INSERT INTO cliente(id, usuario_id, sexo, nascimento)
VALUES(null, 13, 'm', '1962/10/18');
INSERT INTO cliente(id, usuario_id, sexo, nascimento)
VALUES(null, 14, 'f', '1967/11/22');

INSERT INTO telefone(id, numero, usuario_id)
VALUES(null, '(31) 99408-2739', 10);
INSERT INTO telefone(id, numero, usuario_id)
VALUES(null, '(31) 99791-8030', 11);
INSERT INTO telefone(id, numero, usuario_id)
VALUES(null, '(31) 99679-6506', 12);
INSERT INTO telefone(id, numero, usuario_id)
VALUES(null, '(31) 99974-5232', 13);
INSERT INTO telefone(id, numero, usuario_id)
VALUES(null, '(31) 98764-0490', 14);

INSERT INTO usuario(id,nome_usuario,email,senha,tipo)
VALUES(null, 'adm master', 'master@adm.com', 'master', 5);

INSERT INTO usuario(id,nome_usuario,email,senha,tipo)
VALUES(null, 'vinicius antonio miranda', 'viniciusolliver@live.com', 'admin', 4);
INSERT INTO usuario(id,nome_usuario,email,senha,tipo)
VALUES(null, 'vinicius assis', 'viniciusassis@gmail.com', 'admin', 4);
INSERT INTO usuario(id,nome_usuario,email,senha,tipo)
VALUES(null, 'joão victor', 'jv_mfl@hotmail.com', 'admin', 4);
INSERT INTO usuario(id,nome_usuario,email,senha,tipo)
VALUES(null, 'victor fernandes', 'victor@gmail.com', 'admin', 4);
INSERT INTO usuario(id,nome_usuario,email,senha,tipo)
VALUES(null, 'thiago kaique', 'tecnologiasthiago@gmail.com', 'admin', 4);

INSERT INTO contrato(id, cliente_id, pedreiro_id, data, descricao, valor) 
VALUES(null, 1, 6, curdate(), "reboco garagem" , 1500.00);
INSERT INTO contrato(id, cliente_id, pedreiro_id, data, descricao, valor) 
VALUES(null, 2, 11, curdate(), "instalacao chuveiro" , 200.00);
INSERT INTO contrato(id, cliente_id, pedreiro_id, data, descricao, valor) 
VALUES(null, 3, 1, curdate(), "alvenaria area: 10m" , 3200.00);
INSERT INTO contrato(id, cliente_id, pedreiro_id, data, descricao, valor) 
VALUES(null, 4, 3, curdate(), "laje area: 30m" , 4700.00);
INSERT INTO contrato(id, cliente_id, pedreiro_id, data, descricao, valor) 
VALUES(null, 5, 8, curdate(), "acabamento" , 2300.00);
INSERT INTO contrato(id, cliente_id, pedreiro_id, data, descricao, valor) 
VALUES(null, 5, 11, curdate(), "parte eletrica quarto e cozinha" , 900.00);

INSERT INTO avaliacao(id, pedreiro_id, cliente_id, data, pontuacao, comentario)
VALUES(null, 11, 5, curdate(), 100 , "excelente profissional recomendo...");
INSERT INTO avaliacao(id, pedreiro_id, cliente_id, data, pontuacao, comentario)
VALUES(null, 6, 1, curdate(), 100 , "muito bom recomendo... fez um reboco excelente");
INSERT INTO avaliacao(id, pedreiro_id, cliente_id, data, pontuacao, comentario)
VALUES(null, 1, 3, curdate(), 100 , "gostei do serviço as ferragens ficaram seguras");
INSERT INTO avaliacao(id, pedreiro_id, cliente_id, data, pontuacao, comentario)
VALUES(null, 11, 5, curdate(), 100 , "adorei o serviço este profissional tem otimas ideias");
