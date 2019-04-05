## favicon
やれるSEO対策
- gzipで圧縮する
- pngで一旦作って4bit or 8bit にする
- 透過要らないならgifで
- psで編集するのは要プラグイン

## webp表示
pictureでsourceにwebpしておけばソース見に行って無かったらimgのSourceって動く
lazysizesもその辺りいい感じにやってくれる

~~~
                    <picture>
                        <source type="image/webp" data-srcset="/img/banner/bnr_top_ms.webp">
                        <img class="top_harf_banner lazyload" id="top_harf_banner_left" data-aspectratio="45/28" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="
                         data-src="/img/banner/bnr_top_ms.jpg" />
                    </picture>
~~~
