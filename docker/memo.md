## なんとなく動作イメージ

imageつくる → imageからコンテナ作成 → コンテナを動作させる(サービス起動)

## 詰まったときのメモ

* Permission関連でmysqlが上がらない
とりあえずsharedriveが死んでる可能性があるので一旦無効→有効にしてみる

* 「Invalid volume specification」でupできない
docker toolboxの1.9から環境依存でパスの変換が行われないので
環境変数を設定してwindowsパスに変換するように
https://qiita.com/asami-H-Ishi/items/5a6bb2102b3a07cbab41

## dockerコマンド

* docker ps 
サービス確認(コンテナ)
-aで動いてないコンテナも表示
* docker rm ***
　コンテナ削除
  psで表示したidを指定する(前方一致なので85とかでも可)
  こまったら-f
* docker images
イメージを表示
* docker rmi
イメージ削除
rmと大体同じ

## compose
なんか一連の処理をまとめてやる奴

### 使い方
 
* ビルド?
docker-compose up -d
→ -dはバックグランドで起動
　これやるとymlに法ってコンテナの作成と起動までやってくれる

* コンテナ削除とか
docker-compose down
→ サービス、ネットワーク?とかも止まる

* サービス停止
docker-compose stop

* サービス開始
docker-compose start

### 構成とかの説明 
- yml 
makefileみたいな感じ
各サービス?の関係性とか設定とか書く

- Dockfile

## https://github.com/akira345/docker-lapp
zipとmcryptが7.1?でサポートされなくなった(内蔵してる？)ため外さないとインストールできない

