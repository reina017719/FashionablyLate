# Fashionably Late
お問い合わせフォーム

環境構築

Dockerビルド

 1.git clone git@github.com:reina017719/FashionablyLate.git
 2.docker-compose up -d -build

* MySQLは、OSによって起動しない場合があるのでどれぞれのPCに合わせて docker-compose.yml ファイルを編集してください。

Laravel環境構築

 1.docker-compose exec php bash
 2.composer install
 3..env.exampleファイルから.envを作成し、環境変数を変更
 4.php artisan key:generate
 5.php artisan migrate
 6.php artisan db:seed

使用技術

 ・PHP  8.4.2
 ・Laravel 8.83.29
 ・mysql 8.0.26

URL
 ・開発環境： http://localhost/
 ・phpMyAdmin： http://localhost:8080/