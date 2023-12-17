# Microposts
X(旧:Twitter)ライクなSNSサービスです。

## Demo
Amazon Lighsail上で公開しています。学習用に公開しているサービスのため、不定期にサービスが停止する可能性があります。

[Microposts](https://microposts.ym5754n.com/)

## Features
- ユーザーの認証機能
  - ID/Passwordによる会員登録
  - ID/Passwordによるログイン/ログアウト
  - 認可されたユーザ以外はサービス利用不可
- ポスト機能
  - テキストの投稿
  - 投稿したテキストの削除
- フォロー機能
  - 他のユーザのフォロー/アンフォロー
- フェイバリット機能
  - 投稿されたテキストのフェイバリット/アンフェイバリット

## Usage
※事前に[こちら](https://docs.docker.jp/get-docker.html)を参照してDockerを導入してください。

ローカル環境で動作を確認する場合は下記の手順でアプリを起動し、[localhost:80](localhost:80)にアクセスしてください。
```
# Clone this repository
$ git clone https://github.com/ym5754n/microposts.git

# Go into the repository
$ cd microposts

# Install dependances for laravel sail (reffer: https://readouble.com/laravel/10.x/ja/sail.html)
$ docker run --rm \
    -u "$(id -u):$(id -g)" \
    -v "$(pwd):/var/www/html" \
    -w /var/www/html \
    laravelsail/php82-composer:latest \
    composer install --ignore-platform-reqs

# Install dependances
$ npm install

# Run the app
$ ./vendor/bin/sail up -d
$ ./vendor/bin/sail artisan migrate
$ npm run dev
```

## Note
- 学習用に作成したサービスのため、実運用での動作の保証はいたしません。利用される場合はご注意ください。

## Future
今後下記の機能追加を予定しています。
- ダークモード
- ユーザーの検索機能
- 投稿の検索機能
- 画像の投稿
- プロフィール画像の設定
- (※順次追加)

## Author
- 作成者: ym5754n
- E-mail: ym5754n@gmail.com

## License
This project is licensed under the MIT License, see the LICENSE.txt file for details
