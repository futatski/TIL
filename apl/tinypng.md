# apiのあれこれ
月500回変換
getのAPIはカウントされないっぽい
> getはuser指定でAPIキー入れるだけで別に画像getしてるだけだから…

## 使い方
- APIで画像をput
- putのレスポンスにあるURLの画像をget

```
curl `curl put jpg | grep url`  --output jpg
```
> こんなん感じで実行すれば取れる

# 参考
http://totora0155.hatenablog.jp/entry/tinypng-api-cli
https://github.com/tinify/tinify-php
