## Sobre o Trabalho

O presente trabalho foi feito em 2021 para a disciplina de Projeto de Software. O objetivo era colocar em práticas conhecimentos adquiridos ao longo do curso de Sistemas de Informação, especialmente envolvendo estudos de Linguagens de Programação, Bancos de Dados, Sistemas Web e Engenharia de Software.

O projeto de sistema consiste em documentar e implementar um sistema de controle de voos para aeroportos. As tecnologias utilizadas foram:

- Laravel
- MySQL
- JavaScript

<hr />

## Instalando o sistema

Clone o repositório

    git clone git@github.com:davidOdahcam/trabalho-projeto-de-software.git

Navegue até a pasta do repositório

    cd trabalho-projeto-de-software

Instale todas as dependências

    composer install

Copie o arquivo .env.example nomeando-o como .env

    cp .env.example .env

Gere uma chave para a aplicação

    php artisan key:generate

Execute as migrations (**Configure uma base de dados antes, no arquivo .env**)

    php artisan migrate --seed

Inicie o projeto

    php artisan serve

Por fim, você poderá acessar o sistema utilizando a seguinte URL

    http://localhost:8000

<hr />

## Documentação do Trabalho

Para melhor compreensão do projeto, segue o [Repositório dos Anexos](https://drive.google.com/drive/folders/1J1JaBjdsNxI53Kdffqtj2qOE8oT3JqR5?usp=sharing). A finalidade de cada anexo está listada abaixo:

- Anexo I - Discriminação do Projeto
- Anexo II - Identificação de Requisitos
- Anexo III - Cronograma
- Anexo IV - Casos de Uso
- Anexo V - Diagramas de Atividade e Classe
- Anexo VI - Plano de Testes
- Anexo VII - Matriz de Rastreabilidade

<hr />

## Contribuição

O presente trabalho foi desenvolvidos pelos alunos David dos Santos Machado e Matheus Nunes Ritton.
