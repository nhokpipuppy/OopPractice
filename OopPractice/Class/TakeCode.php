<?php
class TakeCode
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
            return $result[0];
        }

    protected function deleteBefore($search, $content)
        {
            $result = explode($search, $content);
            return $result[1];
        }
}
?>