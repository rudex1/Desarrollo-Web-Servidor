<?php

// http://php.net/manual/it/httprequest.send.php

$r = new HttpRequest('http://localhost:8080/rest/items/', HttpRequest::METH_GET);
//$r->setOptions(array('lastmodified' => filemtime('local.rss')));
//$r->addQueryData(array('category' => 3));
try {
    $r->send();
    if ($r->getResponseCode() == 200) {
        //file_put_contents('local.rss', $r->getResponseBody());
        var_dump($r->getResponseBody());
    }
} catch (HttpException $ex) {
    echo $ex;
}

