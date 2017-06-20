# DB Table

## Order

1. .envのDB設定
1. migration

### マイグレーションファイル

## uuo

モデル関連情報

| item           | name or path                                                        |
| -------------- | ------------------------------------------------------------------- |
| table name     | uuo_users                                                           |
| model name     | uuoUser                                                             |
| model file     | app/Model/uuoUser.php                                               |
| migration file | database/migrations/yyyy_mm_dd_hhiiss_create_uuo_projects_table.php |


テーブルスキーマ

| column         |  Are                    |
| -------------- | ----------------------- |
| id             | int(10) AUTO_INCREMENT  |
| username       | string(‘username’, 128) |
| password       | string(‘password’, 256) |
| email          | string(‘email’)         |
| del_flag       | oftDeletes()            |
| lastaccsess_at | timestamp               |
| created_at     | timestamp               |
| updated_at     | timestamp               |

````
php artisan make:model uuoUser --migration
php artisan migrate
````
モデルファイルはapp/uuoUser.phpに作成されるが、app/Model/uuoUser.phpに移動。




uuo
Universal Unit Octopus
