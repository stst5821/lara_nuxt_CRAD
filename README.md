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

## heroku にデプロイ

Heroku にアプリケーションを作成する
\$ heroku apps:create your-app-name

注意点
your-app-name の部分は、laravel の.env の APP_NAME と同じにする必要がある。

https://laraveltestapp111.herokuapp.com/ | https://git.heroku.com/laraveltestapp111.git

Heroku 側に環境変数をセットする
\$ heroku config:set APP_KEY=base64:C866sGFD9U9hhFuoRKVLYt9oPezWvlwwFVUvPeQdeRY= -a laraveltestapp111

APP_KEY は、base64 から=までコピペして OK

Heroku へ push する
\$ git push heroku main

なにか設定を変更したら、以下の手順で push しないと変更が反映されないので注意。
git add .
git commit -m "test"
してから、
git push heroku main
する

## ターミナルから Heroku postgreSQL へ接続する。

参考サイト
https://www.i-ryo.com/entry/2020/10/20/081654

heroku pg:psql
コマンドが動かない場合、homebrew でローカルに postgresql をインストールする。

## Nuxt 導入

参考サイト
https://deha.co.jp/magazine/admin-laravel-nuxt-setup/

pages/index.vue の<script>の中を書くときの注意事項
nginx を通して laravel を表示する場合、URL は http://localhost になるため、
axios の URL 指定もそれに合わせる必要がある。

```
<script>
import Logo from '~/components/Logo.vue'

export default {
  components: {
    Logo,
  },
  async asyncData(app) {
    const data = await app.$axios.$get('http://localhost/api') // ←ここをlocalhost/apiにしないとエラーになる。
    return {
      data,
    }
  },
}
</script>
```

## CORS エラーが出た場合の対処方法

参考：
https://qiita.com/madayo/items/8a31fdd4def65fc08393
