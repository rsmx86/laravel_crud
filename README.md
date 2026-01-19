# 📝 Laravel CRUD Notes -

Um sistema de gerenciamento de notas elegante, minimalista e funcional, desenvolvido com **Laravel 11** e **Tailwind CSS**. Este projeto implementa todas as operações fundamentais de um CRUD (Create, Read, Update, Delete) com uma interface moderna em Dark Mode.

## 🚀 Funcionalidades

- **Painel Inicial:** Landing page moderna com apresentação do projeto.
- **Gerenciamento de Notas:** Listagem dinâmica com visualização clara.
- **CRUD Completo:** Criação, edição e exclusão de registros.
- **Feedback ao Usuário:** Notificações animadas de sucesso para cada ação.
- **Layout Reutilizável:** Estrutura de cabeçalho e rodapé compartilhada (Blade Layouts).
- **Interface Dark:** Design focado em produtividade usando a paleta Zinc do Tailwind.

## 🛠️ Tecnologias Utilizadas

- **Framework:** [Laravel 11](https://laravel.com/)
- **Estilização:** [Tailwind CSS](https://tailwindcss.com/)
- **Banco de Dados:** MySQL
- **Ambiente:** Laragon (Apache + PHP 8.3)

🛠️ Como rodar o projeto
Clone o repositório: git clone https://github.com/rsmx86/laravel_crud.git
Instale as dependências: composer install & npm install
Configure o ambiente: cp .env.example .env
Gere a chave: php artisan key:generate
Execute as migrations: php artisan migrate
Inicie o servidor: php artisan serve & npm run dev
🔒 Segurança
O projeto utiliza verificações de user_id em todos os métodos do Controller para garantir que um usuário nunca acesse ou edite notas de terceiros via URL. 