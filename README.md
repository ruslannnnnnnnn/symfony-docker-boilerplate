## Запуск
#### 1. скопировать содержимое файла .env.example в новый файл .env
```sh
cp .env.example .env
```
#### 2. сгенерировать сертификаты 
```sh
cd docker/nginx/data && ./create_certificate_for_domain.sh
```
#### 3. выполнить команду
```sh
docker compose up --build
```
