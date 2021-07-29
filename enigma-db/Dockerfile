FROM mariadb:latest

ADD enigma.sql /docker-entrypoint-initdb.d

ENV MYSQL_DATABASE enigma_wiki
ENV MYSQL_USER enigma
ENV MYSQL_PASSWORD enigma123
ENV MYSQL_RANDOM_ROOT_PASSWORD yes

EXPOSE 3306
CMD ["mysqld"]
