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

heroku

Heroku にアプリケーションを作成する
$ heroku apps:create your-app-name

注意点
your-app-name の部分は、laravel の.env の APP_NAME と同じにする必要がある。

https://laraveltestapp111.herokuapp.com/ | https://git.heroku.com/laraveltestapp111.git

Heroku 側に環境変数をセットする
$ heroku config:set APP_KEY=base64:C866sGFD9U9hhFuoRKVLYt9oPezWvlwwFVUvPeQdeRY= -a laraveltestapp111

APP_KEY は、base64 から=までコピペして OK

Heroku へ push する
$ git push heroku main

なにか設定を変更したら、以下の手順で push しないと変更が反映されないので注意。
git add .
git commit -m "test"
してから、
git push heroku main
する
