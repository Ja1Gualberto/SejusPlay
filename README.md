# 🎮 SejusPlay

O **SejusPlay** é uma plataforma web voltada para o catálogo de jogos com temática policial e de tiro. Este projeto nasceu como um ambiente de laboratório para consolidar conhecimentos técnicos em desenvolvimento Full Stack antes da entrada em projetos de nível profissional.

---

## 🚀 Sobre o Projeto

O objetivo principal foi aplicar na prática os conceitos de desenvolvimento web utilizando o framework Laravel, integrando o backend com um banco de dados robusto e criando uma interface amigável e responsiva.

### 🛠️ Tecnologias Utilizadas

* **Backend:** [Laravel](https://laravel.com/) (PHP)
* **JavaScript**
* **Banco de Dados:** MySQL
* **Frontend:** Bootstrap 5, CSS3 e HTML5

---

## 📌 Funcionalidades

* **Catálogo Temático:** Exibição de jogos focados em ação e simulação policial.
* **Arquitetura MVC:** Organização de código seguindo os padrões do Laravel.
* **Interface Responsiva:** Estilização adaptada para dispositivos móveis e desktop.
* **Gestão de Dados:** CRUD e persistência de informações via MySQL.

---

## 🔧 Instalação e Execução

Para rodar este projeto localmente, siga os passos abaixo:

1. **Clone o repositório:**
   ```bash
   git clone [https://github.com/Ja1Gualberto/SejusPlay.git](https://github.com/Ja1Gualberto/SejusPlay.git)

2. **Instale as dependencias do Composer:**
    ```bash
    composer install

3. **Configure o arquivo .env**
   *Copie o arquivo de exemplo: cp .env.example .env
   *Configure as credenciais do **MySQL** no arquivo .env

4. **Gere a chave da aplicação**
   ```bash
   php artisan key:generate

5. **Rode as Migrations:**(Opicional, no projeto original foi feito "na mão")
   ```bash
   php artisan migrate

6. **Inicie o servidor local:**
   ```bash
   php artisan serve

---

## 🎯 Objetivo de Estudo

Este repositório documenta a evolução técnica nos seguintes tópicos:

   1. Estruturação de projetos seguindo o padrão MVC.

    2. Relacionamento de tabelas no MySQL.

    3. Uso de Blade Engines para reaproveitamento de componentes frontend.

    4. Consumo e exibição de dados dinâmicos.

---

## 🤝 Contribuição

Este é um projeto com o intuito de aprendizado, mas sinta-se á vontade para abrir uma issue ou enviar um pull request com melhorias

---
**Desenvolvido por:**
[João Gualberto](https://github.com/Ja1Gualberto)
[Ricardo Prestes](https://github.com/ricardopmartins)
---
