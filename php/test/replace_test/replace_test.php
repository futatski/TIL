<?php

$data = "<a href=\"https://test.jp/test/products/detail.php?product_id=2999\">111</a>\n
	 <a href=\"https://test.jp/test/\">\"222\"</a>\n
	 <a href=\"https://test.jp/test/ranking/ranking.php\">333</a>\n
	<a href=\"http://test.jp/test/products/detail.php?product_id=2999\">\"111\"</a>\n
";

echo replaceBodyLinkToGACode($data);


   function replaceBodyLinkToGACode($tmp_body) {
        // リンクからのコンバージョンタグを置き換え
        $add_param = "utm_source=CURRENT_TIMESTAMP&utm_medium=mail&utm_campaign=ymirmagagine";

        // パラメーターが設定されている場合
	$rep_body = preg_replace('/(a href=\".*\?.*?)\"/', "$1" . "&" . $add_param . "\"", $tmp_body);
        // パラメーターが設定されてない場合
        $rep_body = preg_replace('/(a href=\"[^\?]*?)\"/', "$1" . "?" . $add_param . "\"", $rep_body);

        return $rep_body ;
    }



?>
