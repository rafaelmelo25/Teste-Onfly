Teste Onfly - API de Gerenciamento de Despesas

Este é um projeto de API para gerenciamento de despesas, desenvolvido em Laravel. A API permite a criação, edição, visualização e exclusão de despesas, com autenticação e controle de usuários.

Índice
Pré-requisitos
Instalação
Configuração do MySQL
Configuração do Ambiente
Execução do Projeto
Estrutura de Diretórios
Rotas da API
Testes
Contribuição
Pré-requisitos
Antes de começar, certifique-se de ter os seguintes softwares instalados:

PHP >= 8.0
Composer
MySQL
Node.js (para gerenciamento de pacotes com npm/yarn)
Git
Instalação
Passos iniciais para clonar o projeto:
Clone o repositório para a sua máquina local:

git clone https://github.com/rafaelmelo25/Teste-Onfly.git
cd Teste-Onfly
Instale as dependências do projeto usando o Composer:

composer install
Instale as dependências do frontend (se houver):

npm install
Configuração do MySQL
Criar o banco de dados MySQL:
Acesse o MySQL via linha de comando ou através de uma interface gráfica (como o MySQL Workbench).

Execute o seguinte comando para criar um banco de dados:

sql
CREATE DATABASE despesas_db;
Crie um usuário e conceda permissões, se necessário:

sql
CREATE USER 'despesas_user'@'localhost' IDENTIFIED BY 'senha_secreta';
GRANT ALL PRIVILEGES ON despesas_db.* TO 'despesas_user'@'localhost';
FLUSH PRIVILEGES;
Atualize as informações de banco de dados no arquivo .env.

Configuração do Ambiente
Configurar o arquivo .env:
Copie o arquivo .env.example para .env:

cp .env.example .env
Configure as seguintes variáveis no arquivo .env:

.env
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=despesas_db
DB_USERNAME=despesas_user
DB_PASSWORD=senha_secreta
Gere a chave da aplicação:

php artisan key:generate
Execute as migrações para criar as tabelas necessárias:

php artisan migrate
(Opcional) Se quiser popular o banco com dados iniciais:

php artisan db:seed
Execução do Projeto
Inicie o servidor local de desenvolvimento:

php artisan serve
O projeto estará disponível no endereço: http://127.0.0.1:8000.

Acesse as rotas de API conforme detalhado abaixo.

Estrutura de Diretórios
Aqui está uma visão geral da estrutura de diretórios do projeto:

├── app/
│   ├── Controllers/
│   │   ├── Controller.php
│   │   ├── DespesaController.php
│   ├── Models/
│   │   ├── Despesa.php
├── resources/
│   ├── views/
│   │   ├── despesas/
│   │   │   ├── index.blade.php
│   │   │   ├── create.blade.php
│   │   │   ├── edit.blade.php
├── routes/
│   ├── web.php
Rotas da API
Aqui estão as principais rotas configuradas no projeto:

Despesas (/despesas)

GET /despesas - Lista todas as despesas.
POST /despesas - Cria uma nova despesa.
GET /despesas/{id}/edit - Edita uma despesa existente.
PUT /despesas/{id} - Atualiza uma despesa.
DELETE /despesas/{id} - Exclui uma despesa.
Autenticação

POST /login - Realiza login de um usuário.
POST /register - Registra um novo usuário.
POST /logout - Realiza logout do usuário autenticado.
Testes
Para rodar os testes unitários, utilize:

php artisan test
Contribuição
Faça um fork do projeto.

Crie um branch para suas alterações:

git checkout -b minha-nova-feature
Commit suas alterações:

git commit -m "Descrição das alterações"
Envie suas alterações:

git push origin minha-nova-feature
Abra um Pull Request para revisão.

