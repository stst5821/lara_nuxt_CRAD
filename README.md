以下のテンプレートを使用して作成。  
https://github.com/nagi125/laravel-docker-template  

docker compose up  
でコンテナ立ち上げ  

.envとconfig/database.phpの設定を変更する。
https://note.com/stst_esty/n/nae2219006622

 dbコンテナに入る
docker exec -ti db bash
dbのところは、コンテナ名にする。

 dbコンテナに入ったあと、postgresqlにログイン
psql -h 127.0.0.1 -p 5432 -U docker -W docker -d laravel_development
なんかエラー出てパスワードを要求されるので、入力するとログインできる。

 マイグレーションコマンド
docker-compose exec app php artisan migrate
