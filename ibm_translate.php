<?php
  function translate($srvc_id, $text) {
    $ch = curl_init();
    $text = drupal_urlencode($text);
    //print $text; die();
    curl_setopt($ch, CURLOPT_URL, 'http://198.145.243.38/axis/tr.jsp?svcid=' . $srvc_id.'&text=' . $text);
    //curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Length: ' . strlen($text)));
    curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Length: 0'));
    curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 0);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    $body = curl_exec($ch);
    curl_close($ch);
    return $body;
}
