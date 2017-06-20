# Regist

サインアップの際はハッシュ付きのURLで登録します。40桁
（例）http://uuouu.local/regist/4283ff628a6c24111d3e01db2232cce92981dddd

## Flow

1. /でhashを作成。SESSIONに埋め込む
2. /registでhashを受け取る
