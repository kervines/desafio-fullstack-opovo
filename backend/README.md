# 🚀 Backend - Projeto Laravel

![Laravel](https://img.shields.io/badge/Laravel-FF2D20?logo=laravel&logoColor=white)
![PHP](https://img.shields.io/badge/PHP-777BB4?logo=php&logoColor=white)
![Docker](https://img.shields.io/badge/Docker-2496ED?logo=docker&logoColor=white)
![License](https://img.shields.io/badge/License-MIT-green)

Este é o **backend** do projeto, desenvolvido com **Laravel**, um framework PHP moderno e robusto, que facilita a construção de APIs e aplicações web escaláveis.

---

## 🎯 Por que Laravel?

Escolhemos o Laravel pelos seguintes motivos:

-   **Produtividade:** Sintaxe elegante e recursos integrados como Eloquent ORM, filas, eventos e autenticação.
-   **Comunidade ativa:** Grande quantidade de pacotes, documentação completa e suporte da comunidade.
-   **Segurança:** Proteções nativas contra SQL Injection, CSRF, XSS e outras vulnerabilidades.
-   **Escalabilidade:** Facilita o desenvolvimento de APIs RESTful, microsserviços e integrações complexas.
-   **Facilidade de manutenção:** Estrutura organizada e padrões de projeto que tornam o código fácil de entender e expandir.

---

## 🛠 Pré-requisitos

Antes de instalar, certifique-se de ter:

-   [Docker](https://www.docker.com/get-started)
-   [Docker Compose](https://docs.docker.com/compose/install/)
-   [PHP 8.1+](https://www.php.net/downloads)
-   [Composer](https://getcomposer.org/)

---

## 🐳 Instalação com Docker

1. Clone o repositório:

```bash
git clone https://github.com/seu-usuario/seu-projeto-backend.git
cd seu-projeto-backend
```

2. Copie o arquivo de ambiente e configure:

```bash
cp .env.example .env
```

Edite .env conforme necessário (banco de dados, porta, etc).

Suba os containers com Docker:

docker-compose up -d

Isso iniciará:

app: Container PHP + Laravel

db: Container MySQL

phpmyadmin: Opcional, interface para gerenciar banco de dados

Instale as dependências do Laravel:

```bash
docker exec -it app composer install
docker exec -it app php artisan key:generate
docker exec -it app php artisan migrate
```

Acesse a aplicação:

Laravel API: http://localhost:8000

PHPMyAdmin: http://localhost:8080 (se configurado)

## 🐘 Instalação com PHP nativo (opcional)

Caso queira rodar sem Docker:

Tenha PHP 8.1+, Composer e MySQL instalados.

Clone o projeto e configure .env como mostrado acima.

Instale dependências:

```bash
composer install
php artisan key:generate
php artisan migrate
php artisan serve
```

A aplicação estará disponível em http://localhost:8000.

⚡ Comandos úteis do Laravel

Rodar migrações:

```bash
php artisan migrate

php artisan db:seed
```

Limpar cache:

```bash
php artisan cache:clear
php artisan config:clear
php artisan route:clear
php artisan view:clear
```

## 📁 Estrutura do projeto

app/
bootstrap/
config/
database/
public/
resources/
routes/
storage/
tests/
vendor/
.env

## 📝 Licença

Este projeto está licenciado sob a MIT License.
