# Визуализация фотообоев

Это тестовое задание, выполненное по [макету в Figma](https://www.figma.com/file/kYiLyajv2Av9mUjRAuWUEO/%D0%A2%D0%97-%D0%B4%D0%BB%D1%8F-%D1%80%D0%B0%D0%B7%D1%80%D0%B0%D0%B1%D0%BE%D1%82%D1%87%D0%B8%D0%BA%D0%B0?type=design&node-id=0-1&mode=design&t=CZouEGTAoa1raDt5-0).

## Установка

### Предварительные требования

* PHP ^8.1
* Composer
* Node.js (v16+) & NPM (6+)
* PostgreSQL

### Локальная установка

1. Установить зависимости и подготовить конфигурационный файл

    ```sh
    make setup
    ```

2. Создать БД и указать параметры подключения к ней в файле *.env*

    ```dotenv
    DB_CONNECTION=pgsql
    DB_HOST=localhost
    DB_PORT=5432
    DB_DATABASE=postgres
    DB_USERNAME=postgres
    DB_PASSWORD=secret
    ```

3. Запустить первоначальную настройку БД и сгенерировать записи

    ```sh
    make prepare-db
    ```

4. Если требуется разрешить загрузку больших файлов (более 2Мб), установить параметры в файле *php.ini* (размер в мегабайтах):

    ```ini
    upload_max_filesize=20m
    post_max_size=22m
    ```

    Второй параметр должен быть больше первого, т.к. обозначает ограничение всех отправляемых данных, включая файл и HTTP-запрос.

5. Запустить фронтенд

    ```sh
    make start-frontend
    ```

6. Запустить локальный веб-сервер

    ```sh
    make start
    ```

## Работа

Сайт будет доступен локально по адресу http://localhost:8000/. Заявки на визуализацию сохраняются в БД в таблице ```inquiries```. Фотографии пользователя загружаются в папку ```storage/app/public/UserPhoto```
