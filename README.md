<p align="center">
  <img src="https://antenas.s3.amazonaws.com/amigo-da-estrada.svg" alt="Logo do Amigo da Estrada" />
</p>

<h1 align="center">Amigo da Estrada</h1>

### Pré-requisitos para configurar o Back-end:
- [PHP 7.2]
- [Mysql 8]

### Passo a passo
1. Baixe o projeto clicando no botão superior direito da pagina do Github "Clone or Download" > "Download ZIP"
    
    1.1. Ou faça utilizando o Git. Abra o seu terminal
    
    1.2. Navegue, pelo terminal, até onde deseja que o projeto fique localizado e rode
    ```bash
        $ git clone git@github.com:AmigoDaEstrada/backend.git
    ```

2. Entre no diretório do projeto, e rode o comando:
    ```bash
        $ php compose update
    ```

3. Quando o processo de instalação de dependencias finalizar, rode o comando:
    ```bash
        $ ./server.c -c
    ```

4. Com isso a API ja deve estar rodando em http://localhost:8000


## EndPoints

GET :	/ 		: home da API  
POST:	/register 	: cadastro de usuários OAuth2   
POST:	/user/{id} 	: login de acesso  


GET:	/api/cambio		: get all Messages  
GET: 	/api/cambio/{id}	: get Message ID  
POST:	/api/cambio		: post new Message ID  
DELETE:	/api/cambio/{id}	: delete Message ID  
PUT:	/api/cambio/{id}	: update Message ID  

<p align="center">
  <a href="https://shawee.io/" target="_blank">
    <img src="http://hackathontotalvoice.shawee.io/assets/img/logo-shawee.png" alt="Logo da Shawee" width="150" />
  </a>
  <a href="http://www.grupoccr.com.br/" target="_blank">
    <img src="https://interitsolutions.com.br/wp-content/uploads/2019/02/ccr.png" alt="Logo da CCR" width="150" />
  </a>
</p>
