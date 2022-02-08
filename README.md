# 🐳

## 環境構築

### 1. ローカルに clone する

### 2. Docker のインストール

### 3. 「Dockerコンテナの起動」

```
./docker-compose-local.sh up
```

### 4. DBの作成

```
CREATE DATABASE tqcontactform;
```

### 5. tableの作成

```
CREATE TABLE contacts (id int(11) NOT NULL PRIMARY KEY AUTO_INCREMENT, title varchar(255) NOT NULL, email varchar(255) NOT NULL, content text NOT NULL, created_at datetime NOT NULL DEFAULT CURRENT_TIMESTAMP, updated_at datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP );
```

## ページ紹介

php

[localhost:8080](http://localhost:8080)

PHPMyAdmin

[localhost:3306](http://localhost:3306)
