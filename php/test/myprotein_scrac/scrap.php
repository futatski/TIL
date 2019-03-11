<?php

// phpQueryの読み込み
require_once("phpQuery-onefile.php");

//
class convertMyproteinHtmlData
{
    private $__productCode;

    function __construct($productCode) {
        $this->__productCode = $productCode;
    }

    function execute($productCode){
        $url = 'https://www.myprotein.jp/' . $productCode . '.html';

        // POSTデータ
        $data = array(
        );
        $data = http_build_query($data, "", "&");

        // header
        $header = array(
            "Content-Type: application/x-www-form-urlencoded",
            "Content-Length: ".strlen($data)
        );

        $context = array(
            "http" => array(
                "method"  => "POST",
                "header"  => implode("\r\n", $header),
                "content" => $data
            )
        );

        $HTMLData = file_get_contents($url, false , stream_context_create($context));
        if($HTMLData == false) {
            echo "error: " . "get error";
            return "";
        }

        $html = phpQuery::newDocumentHTML($HTMLData, 'UTF-8');
        
		
//		echo $html->find("select:eq(0)")->val() . " " .
//		     $html->find("select:eq(1)")->val() . " " .
//		     $html->find("select:eq(2)")->val()  . "\n";
		     

		$current_price = $html['.priceBlock_current_price'];
		$price_data = $current_price->text();

		$price_data = str_replace('¥','',$price_data);
		$price_data = str_replace(',','',$price_data);

        return $price_data;
    }
}


?>
