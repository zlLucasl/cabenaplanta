			estatistico
Relatório de todos os usuários do mes de agosto:

SELECT nome_usuario, email, tipo FROM usuario 
WHERE data_conta BETWEEN '2016/08/01' AND '2016/08/31' 
ORDER BY nome_usuario;

---------------------------------------------------------------------------------------
			estatistico

Relatório de todos os pedreiros do mes de agosto:

SELECT nome_usuario, email, especialidade FROM pedreiro JOIN usuario 
on usuario.id = pedreiro.usuario_id 
WHERE data_conta 
BETWEEN '2016/08/01' AND '2016/08/31' 
ORDER BY nome_usuario;

---------------------------------------------------------------------------------------
			estatistico

Relatório de todos as lojas do mes de agosto:

SELECT nome_usuario, email, cidade FROM loja JOIN usuario 
on usuario.id = loja.usuario_id 
WHERE data_conta 
BETWEEN '2016/08/01' AND '2016/08/31' 
ORDER BY nome_usuario;

---------------------------------------------------------------------------------------
			estatistico

Relatório de todos os clientes do mes de agosto:

SELECT nome_usuario, email, sexo, nascimento FROM cliente JOIN usuario 
on usuario.id = cliente.usuario_id 
WHERE data_conta 
BETWEEN '2016/08/01' AND '2016/08/31' 
ORDER BY nome_usuario;

---------------------------------------------------------------------------------------
			estatistico

Relatório de todos os telefones do mes de agosto:

SELECT nome_usuario, numero FROM telefone JOIN usuario 
on usuario.id = telefone.usuario_id 
WHERE data_conta 
BETWEEN '2016/08/01' AND '2016/08/31' 
ORDER BY nome_usuario;

---------------------------------------------------------------------------------------
			estatistico

Relatório de todos os contratos do mes de agosto (Menor valor para o Maior valor):

SELECT * FROM contrato WHERE data 
BETWEEN '2016/08/01' AND '2016/08/31' 
ORDER BY valor ASC;

---------------------------------------------------------------------------------------
			estatistico

Relatório de todas as avaliações do mes de agosto:

SELECT * FROM avaliacao WHERE data 
BETWEEN '2016/08/01' AND '2016/08/31' 
ORDER BY pontuacao ASC;

---------------------------------------------------------------------------------------