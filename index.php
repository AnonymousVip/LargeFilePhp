<?php
set_time_limit(0);
$fp = fopen (dirname(__FILE__) . '/episode.mkv', 'w+');
$ch = curl_init("https://tg-link.herokuapp.com/dl/1/%40ThopBatchFiles%20Unstoppable%20S01E03%20Unstoppable%20Episode%203%20Br.mkv?st=1");
// curl_setopt($ch, CURLOPT_TIMEOUT, 300);
curl_setopt($ch, CURLOPT_FILE, $fp); 
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
curl_exec($ch); 
curl_close($ch);
fclose($fp);
?>
