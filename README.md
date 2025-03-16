# Projeto CRUD de Produtos

Este projeto é uma aplicação web simples desenvolvida em PHP que se conecta a uma instância Amazon RDS para realizar operações de criação e listagem em uma tabela de produtos.

## Tecnologias Utilizadas
- **Apache com PHP**: Servidor web e linguagem de backend.
- **Amazon RDS (MySQL/MariaDB)**: Banco de dados para armazenamento dos produtos.
- **Amazon EC2**: Hospedagem da aplicação.

## Funcionalidades
- **Inserção de produtos:** Cadastro de produtos com os campos: nome, preço e data de criação.
- **Listagem de produtos:** Exibição dos produtos cadastrados em uma tabela.

## Estrutura do Projeto
- `db.php`: Arquivo de configuração da conexão com o banco de dados.
- `index.php`: Página principal que contém o formulário de cadastro e a listagem dos produtos.
- `README.md`: Documentação do projeto.

## Instruções de Uso
1. Configure o arquivo `db.php` com as credenciais do seu banco de dados RDS.
2. Crie a tabela `produtos` no seu banco de dados utilizando o comando SQL fornecido.
3. Faça o upload dos arquivos para o diretório `/var/www/html` da sua instância EC2.
4. Acesse a aplicação através do navegador utilizando o endpoint público da sua EC2.
5. Utilize o formulário para cadastrar produtos e visualize-os na listagem.
