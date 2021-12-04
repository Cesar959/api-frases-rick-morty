<h1 align="center"> API REST Frases Rick and Morty </h1>

<p align="center">
    <img src="DOC/banner-api-frases-rick-morty.jpg" alt="imagem-site" width="600" height="auto">
</p>


## Descrição

O projeto é uma API REST aonde  é  possível busca frases da serie Rick and Morty. Interface de Programação de Aplicações (português) cuja sigla API provém do Inglês Application Programming Interface, é um conjunto de rotinas e padrões estabelecidos por um software para a utilização das suas funcionalidades. 

Rick and Morty é uma série de animação adulta norte-americana de comédia e ficção científica criada por Justin Roiland e Dan Harmon para o bloco deprogramação noturno Adult Swim, exibido no canal Cartoon Network.

API conta com 2 funcionalidades básicas: obter todos os registros e selecionar um unico registro. Até o momento não foi implementado um sistema de autenticação para utilizar a API, possibilitando assim a utilização pública da mesma. 

Para isso foi utilizando o Slim framework que  é um Micro-Framework bastante leve e prático, possui como principal característica a implementação RESTful.
 
## Rotas:

É a mesma rota para  GET e GETid que  utiliza o 'id' do registro como parâmetro. Alem disso o unico serviço disponivel até o momento é "frases".

### GET
Traz todos os registros

```bash  
https://seudominio.com/frases
```

### GET
Traz um registo específico (o caso em questão, vai trazer os dados referente ao 'id' 2)

```bash  
https://seudominio.com/frases/2
```


## Instalação Local

Para executar esse projeto você precisara do  [Composer](https://getcomposer.org/).

Por meio dele sera baixado todas as depedencias do projeto, depois de instalado execute os comandos abaixo na linha do terminal.

1) Para baixa todas as dependencias do projeto

```bash  
composer update 
```

2) Efetuar o carregamento automatico das class

```bash  
composer dump-autoload 
```

3) Edite as configurações padrão do arquivo config.php, no caso em questão a URL do projeto

```bash  
define("BASE_URL", "http://localhost/api-frases-rick-morty/") 
```


## Status do Projeto

**Concluido**: O projeto esta terminado, não havera futuras alterações de funcionalidade.


## Construído com

* [JSON](https://www.w3schools.com/js/js_json_intro.asp) - Em computação, JSON, um acrônimo de JavaScript Object Notation, é um formato compacto, de padrão aberto independente, de troca de dados simples e rápida entre sistemas, especificado por Douglas Crockford em 2000, que utiliza texto legível a humanos, no formato atributo-valor.

* [PHP](https://www.php.net/manual/pt_BR/intro-whatis.php) - PHP é uma linguagem interpretada livre, usada originalmente apenas para o desenvolvimento de aplicações presentes e atuantes no lado do servidor, capazes de gerar conteúdo dinâmico na World Wide Web.

* [Slim Framework](https://www.slimframework.com/) - Slim é uma micro estrutura de PHP que ajuda a escrever rapidamente aplicativos e APIs da web simples, mas poderosos.

* [Composer](https://getcomposer.org/) - O Composer é um gerenciador de pacotes no nível do aplicativo para a linguagem de programação PHP que fornece um formato padrão para gerenciar dependências do software PHP e bibliotecas necessárias. Foi desenvolvido por Nils Adermann e Jordi Boggiano, que continuam a gerenciar o projeto. 

## Versão das Linguagens e Ferramentas

#### Servidor web

* PHP - 7.3.31
* Apache - 2.4.51

#### Ferramentas

* Xampp - 3.3.0
* Slim Framework - 4


## Autor

* **Cesar dos Santos de Almeida** - *responsável pela construção e desenvolvimento do projeto*

## Licença

Este projeto está licenciado sob a licença MIT - consulte o arquivo  [LICENSE.md](LICENSE.md) para obter detalhes


## Links

* [Demo do projeto](http://csantosalmeida.rf.gd/api-frases-rick-morty/) - Link da Demo
* [Documentação](https://cesar959.github.io/api-crud/) - Link da Documentação





