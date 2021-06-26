以下のテンプレートを使用して作成。  
https://github.com/nagi125/laravel-docker-template

上記テンプレの解説サイト  
https://zenn.dev/nagi125/articles/ea1d314c94409341a3b0

docker compose up  
でコンテナ立ち上げ

.env と config/database.php の設定を変更する。
https://note.com/stst_esty/n/nae2219006622

db コンテナに入る
docker exec -ti db bash
db のところは、コンテナ名にする。

db コンテナに入ったあと、postgresql にログイン
psql -h 127.0.0.1 -p 5432 -U docker -W docker -d laravel_development
なんかエラー出てパスワードを要求されるので、入力するとログインできる。

マイグレーションコマンド
docker-compose exec app php artisan migrate
