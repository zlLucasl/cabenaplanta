			Analítico
Relatório de todos os usuários:

SELECT nome_usuario, email, tipo, data_conta FROM usuario ORDER BY nome_usuario; 

---------------------------------------------------------------------------------------
			Analítico

Relatório de todos os pedreiros:

SELECT usuario.nome_usuario, pedreiro.especialidade, pedreiro.cep
FROM usuario, pedreiro WHERE usuario.id = pedreiro.id ORDER BY usuario.nome_usuario; 

---------------------------------------------------------------------------------------
			Analítico

Relatório de todas as lojas:

SELECT usuario.nome_usuario, loja.uf, loja.cep, loja.cidade, loja.bairro 
FROM usuario, loja WHERE usuario.id = loja.id ORDER BY usuario.nome_usuario; 

---------------------------------------------------------------------------------------

			Analítico

Relatório de todos os clientes:

SELECT usuario.nome_usuario, cliente.sexo, cliente.nascimento 
FROM usuario, cliente WHERE usuario.id = cliente.id ORDER BY usuario.nome_usuario; 

---------------------------------------------------------------------------------------
			Analítico

Relatório de todos os telefones:

SELECT usuario.nome_usuario, telefone.numero FROM usuario, telefone 
WHERE usuario.id = telefone.id ORDER BY usuario.nome_usuario; 

---------------------------------------------------------------------------------------
			Analítico

Relatório de todos os contratos (Menor valor para o Maior valor):

SELECT cliente.id, pedreiro.id, contrato.descricao, contrato.valor, contrato.data
 FROM cliente, pedreiro, contrato WHERE cliente.id = contrato.id
 ORDER BY contrato.valor; 

---------------------------------------------------------------------------------------
			Analítico

Relatório de todos os contratos (Maior valor para o Menor valor):

SELECT cliente.id, pedreiro.id, contrato.descricao, contrato.valor, contrato.data
 FROM cliente, pedreiro, contrato WHERE cliente.id = contrato.id
 ORDER BY contrato.valor DESC; 

---------------------------------------------------------------------------------------
			Analítico

Relatório de todas as avaliações (Menor pontuacao -> Maior pontuacao):

SELECT cliente.id, pedreiro.id, avaliacao.pontuacao, avaliacao.comentario, avaliacao.data
 FROM cliente, pedreiro, avaliacao WHERE cliente.id = avaliacao.id
 ORDER BY avaliacao.pontuacao; 

---------------------------------------------------------------------------------------
			Analítico

Relatório de todas as avaliações (Maior pontuacao -> Menor pontuacao):

SELECT cliente.id, pedreiro.id, avaliacao.pontuacao, avaliacao.comentario, avaliacao.data
 FROM cliente, pedreiro, avaliacao WHERE cliente.id = avaliacao.id
 ORDER BY avaliacao.pontuacao DESC; 

---------------------------------------------------------------------------------------
			Sintético

Relatório dos 3 primeiros usuários:

SELECT nome_usuario, email FROM usuario ORDER BY data_conta LIMIT 3;

----------------------------------------------------------------------------------------
			Sintético

Relatório das 3 primeiras lojas:

SELECT id, cep FROM loja ORDER BY id LIMIT 3;

----------------------------------------------------------------------------------------
			Sintético

Relatório dos 3 últimos usuários:

SELECT nome_usuario, email FROM usuario ORDER BY data_conta DESC LIMIT 3;

----------------------------------------------------------------------------------------
			Sintético

Relatório das 3 últimas lojas:

SELECT id, cep FROM loja ORDER BY id DESC LIMIT 3;

----------------------------------------------------------------------------------------
			Sintético

Relatório dos 3 primeiros pedreiros:

SELECT usuario.nome_usuario, pedreiro.id FROM usuario, pedreiro 
WHERE usuario.id = pedreiro.id ORDER BY usuario.nome_usuario LIMIT 3;

----------------------------------------------------------------------------------------
			Sintético

Relatório dos 3 primeiros clientes:

SELECT usuario.nome_usuario, nome FROM usuario, cliente
WHERE usuario.id = cliente.id ORDER BY usuario.nome_usuario LIMIT 3;

----------------------------------------------------------------------------------------
			Sintético

Relatório dos 3 últimos pedreiros:

SELECT usuario.nome_usuario, pedreiro.id FROM usuario, pedreiro 
WHERE usuario.id = pedreiro.id ORDER BY usuario.nome_usuario DESC LIMIT 3;

----------------------------------------------------------------------------------------
			Sintético

Relatório dos 3 últimos clientes:

SELECT usuario.nome_usuario, cliente.id FROM usuario, cliente
WHERE usuario.id = cliente.id ORDER BY usuario.nome_usuario DESC LIMIT 3;

----------------------------------------------------------------------------------------
			Sintético

Relatório das 10 melhores avaliações:

SELECT pontuacao, comentario FROM avaliacao ORDER BY pontuacao DESC LIMIT 10;

----------------------------------------------------------------------------------------
			Sintético

Relatório das 10 piores avaliações:

SELECT pontuacao, comentario FROM avaliacao ORDER BY pontuacao LIMIT 10;

----------------------------------------------------------------------------------------
			Sintético

Relatório dos 3 contratos mais caros:

SELECT descricao, valor FROM contrato ORDER BY valor DESC LIMIT 3;

----------------------------------------------------------------------------------------
			Sintético

Relatório dos 3 contratos mais baratos:

SELECT descricao, valor FROM contrato ORDER BY valor LIMIT 3;

----------------------------------------------------------------------------------------
			Sintético

Relatório dos 3 primeiros contratos:

SELECT descricao, valor, data FROM contrato ORDER BY data LIMIT 3;

----------------------------------------------------------------------------------------
			Sintético

Relatório dos 3 contratos mais baratos:

SELECT descricao, valor, data FROM contrato ORDER BY data DESC LIMIT 3;

----------------------------------------------------------------------------------------