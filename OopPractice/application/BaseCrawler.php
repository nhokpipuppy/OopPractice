<?php
require_once('config/config.php');
class BaseCrawler
{   
    public $url;
    protected function takeCodeWebsite()
    {
        $ch = curl_init();
        // Config  for CURL
        curl_setopt($ch, CURLOPT_URL, $this->url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        // Run CURL
        $result =curl_exec($ch);
        // Stop CURL, release
        curl_close($ch);
        // return code
        return $result;
    }

    protected function deleteAfter($search, $content)
        {   
         
            $result = explode($search, $content);
            if (isset($result[0])) {
                return $result[0];
            } else {
                echo ERROR;
                die();
            }
        }

    protected function deleteBefore($search, $content)
        {   
            
            $result = explode($search, $content);
            if (isset($result[1])) {
                return $result[1];
            } else {
                echo ERROR;
                die();
            }
            
        }
}
?>
