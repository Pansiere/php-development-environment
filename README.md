# PHP Study Project

Este projeto foi criado para estudo de PHP utilizando contêineres Docker. O projeto utiliza `phpdocker-io` para gerar os contêineres PHP-FPM, MySQL e Nginx. Além disso, foi adicionado um contêiner para o PhpMyAdmin.

## Pré-requisitos

- Docker e Docker Compose instalados no sistema.
- As portas 80 e 8080 devem estar livres para que os contêineres funcionem corretamente.

## Serviços

Este projeto utiliza os seguintes serviços:

- **MySQL**: Banco de dados MySQL 8.0.
- **Nginx**: Servidor web Nginx.
- **PHP-FPM**: Process Manager FastCGI para PHP.
- **PhpMyAdmin**: Ferramenta de administração MySQL através de uma interface web.

## Configuração

O arquivo `docker-compose.yml` utilizado no projeto é o seguinte:

```yaml
###############################################################################
#                          Generated on phpdocker.io                          #
#                                    &                                        #
#                    Modificado por João Pedro V. Pansiere                    #
###############################################################################
version: "3.1"
services:
  mysql:
    image: "mysql:8.0"
    container_name: mysql
    working_dir: /application
    volumes:
      - ".:/application"
      - "./.mysql-data/db:/var/lib/mysql"
    environment:
      - MYSQL_ROOT_PASSWORD=password
      - MYSQL_DATABASE=DB
      - MYSQL_USER=php
      - MYSQL_PASSWORD=password

  webserver:
    image: "nginx:alpine"
    container_name: nginx
    working_dir: /application
    volumes:
      - ".:/application"
      - "./phpdocker.io/nginx/nginx.conf:/etc/nginx/conf.d/default.conf"
    ports:
      - "80:80"

  php-fpm:
    build: phpdocker.io/php-fpm
    container_name: php
    working_dir: /application
    volumes:
      - ".:/application"
      - "./phpdocker.io/php-fpm/php-ini-overrides.ini:/etc/php/8.3/fpm/conf.d/99-overrides.ini"

  phpmyadmin:
    image: phpmyadmin/phpmyadmin:latest
    container_name: phpmyadmin
    environment:
      - PMA_HOST=mysql
      - PMA_USER=root
      - PMA_PASSWORD=password
    ports:
      - "8080:80"
```

## Instruções de Uso

1. Clone este repositório:

   ```sh
   git clone https://github.com/Pansiere/php-development-environment.git
   cd php-development-environment
   ```

2. Inicie os contêineres com Docker Compose:

   ```sh
   docker compose up -d
   ```

3. Acesse o projeto no seu navegador:
   - Aplicação PHP: `http://localhost`
   - PhpMyAdmin: `http://localhost:8080`

## Estrutura de Diretórios

A estrutura básica dos arquivos do projeto é a seguinte:

```BASH
/
├── .mysql-data/
├── phpdocker.io/
│   ├── nginx/
│   │   └── nginx.conf
│   └── php-fpm/
│       ├── Dockerfile
│       └── php-ini-overrides.ini
├── public/
│   └── (seus arquivos PHP)
├── docker-compose.yml
└── README.md
```

## Considerações

Certifique-se de que as portas 80 e 8080 estejam livres antes de iniciar os contêineres. Caso contrário, você pode alterar as portas mapeadas no arquivo `docker-compose.yml`.

---

Sinta-se à vontade para ajustar o conteúdo conforme necessário para refletir com precisão o seu projeto e suas necessidades específicas.
