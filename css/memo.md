# 

## アイコンの書き方

- blockで入れ物を用意して、:beforeで線を引く
- 斜線はボーダーを-webkit-transformでrotateさせる


#category_area li[class*="level"] > p  span.icon-arrow {
    height:14px;
    width:14px;
    display:block;
    position:relative;
    float:left;
}

#category_area li[class="level1"] > p  span.icon-arrow:before{
content: '';
  position: absolute;
  top: 5px;
  width: 4px;
  height: 4px;
  border-top: solid 1px currentColor;
  border-right: solid 1px currentColor;
  -webkit-transform: rotate(45deg);
          transform: rotate(45deg);
}
