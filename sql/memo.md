# チートシート

## キー毎に通番

```
ROW_NUMBER() OVER(PARTITION BY dtb_main.id) as detail_number
```

ROW_NUMBER()は行番号

OVER句は分析関数

PARTITION BY は 集計列

OVER句を使うと、サブクエリみたいな事を一時的に出来る

この場合全体からPARTITIONで指定したもののみの行番号を返す
