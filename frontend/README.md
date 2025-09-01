# 🚀 Frontend - Projeto Next.js

![Next.js](https://img.shields.io/badge/Next.js-000000?logo=next.js&logoColor=white)
![React](https://img.shields.io/badge/React-61DAFB?logo=react&logoColor=black)
![Node.js](https://img.shields.io/badge/Node.js-339933?logo=node.js&logoColor=white)
![Docker](https://img.shields.io/badge/Docker-2496ED?logo=docker&logoColor=white)
![License](https://img.shields.io/badge/License-MIT-green)

Este é o **frontend** do projeto, desenvolvido com **Next.js**, um framework React moderno que facilita a construção de aplicações web escaláveis e performáticas.

---

## 🎯 Por que Next.js?

Escolhemos o Next.js pelos seguintes motivos:

- **Roteamento automático e SSR:** Suporte a Server-Side Rendering, Static Site Generation e API Routes.
- **Desempenho:** Otimização automática de imagens, bundle splitting e carregamento rápido.
- **Integração com React:** Total compatibilidade com o ecossistema React.
- **SEO:** Renderização no servidor melhora o SEO da aplicação.
- **Escalabilidade:** Fácil integração com APIs, microserviços e projetos complexos.

---

## 🛠 Pré-requisitos

Antes de instalar, certifique-se de ter:

- [Node.js 18+](https://nodejs.org/)
- [npm 9+ ou yarn](https://classic.yarnpkg.com/lang/en/docs/install/)
- [Docker](https://www.docker.com/get-started) (opcional)

---

## 🐳 Instalação com Docker

1. Clone o repositório:

```bash
git clone https://github.com/seu-usuario/seu-projeto-frontend.git
cd seu-projeto-frontend
```

2. Copie o arquivo de ambiente e configure:

```bash
cp .env.example .env.local
```

Edite .env.local conforme necessário (API base URL, chaves, etc).

Suba os containers com Docker:

```bash
docker-compose up -d
```

Isso iniciará:

frontend: Container Node.js + Next.js

outros serviços: conforme seu docker-compose.yml (opcional)

Acesse a aplicação:

Frontend: http://localhost:3000

## ⚡ Instalação com Node.js (sem Docker)

Clone o projeto:

git clone https://github.com/seu-usuario/seu-projeto-frontend.git
cd seu-projeto-frontend

Instale as dependências:

```bash
npm install
yarn install
cp .env.example .env.local
npm run dev
# ou
yarn dev
```

A aplicação estará disponível em http://localhost:3000.

## ⚡ Comandos úteis do Next.js

Rodar em desenvolvimento:

```bash
npm run dev
```

Build para produção:

```bash
npm run build
npm start
```

## 📁 Estrutura do projeto

pages/ # Rotas da aplicação
components/ # Componentes React reutilizáveis
public/ # Arquivos estáticos
styles/ # Arquivos CSS / SCSS
hooks/ # Custom React hooks
context/ # Context API
utils/ # Funções utilitárias
.env.local # Variáveis de ambiente

## 📝 Licença

Este projeto está licenciado sob a MIT License.
