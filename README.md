# challenge
Desafio DEV CEISC

## Instalação

O projeto precisa de um ambiente com:
 - PHP >= 7.2;
 - Composer;
 - GIT;
 - MySQL;

Etapas para iniciar:

1 - Clone o projeto:
```shell
git clone https://github.com/ceisc/challenge.git challenge
```
2 - Renomeie ".env.example" para ".env" e preencha os dados de conexão de sua base de dados local (DB_HOST, DB_PORT, DB_USERNAME, DB_PASSWORD)

3 - Crie uma database local com o nome 'challenge'

4 - Rode os script para criar as tabelas:
```shell
php artisan migrate
php artisan db:seed
```
5 - Configure seu ambiente local para acessar o arquivo root "public/index.php" OU abra um terminal na raíz do projeto e rode "php artisan serve"

## Agora, mãos a obra ^^

O projeto tem 3 páginas abertas:
 - listagem de publicações;
 - página da publicação;
 - página de login.

e 2 páginas de administração:
 - listagem de postagens;
 - edição de postagem.

O objetivo é criar um pequeno blog administrado por 1 pessoa.
Visitantes podem ver a listagem de postagens publicadas, e abrir a publicação completa.
O administrador pode cadastrar, editar e remover postagens.

Cada página contém instruções do que deve contemplar. OBS: rotas, controllers e views podem ser alterados a vontade.
Adicionar o debugbar ao projeto (https://github.com/barryvdh/laravel-debugbar).
