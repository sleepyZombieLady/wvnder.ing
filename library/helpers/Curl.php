<?php
namespace wvnder\Helpers;

/**
 * curl
 * helps send curl requests (get and post if needed)
 */
class curl
{
    /**
     * get request to a given $url
     *
     * @param string $url
     * @return void
     */
    public function get($url)
    {
        $curl = curl_init($url);
        curl_setopt($curl, CURLOPT_URL, $url);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

        $response = curl_exec($curl);
        curl_close($curl);

        return $response;
    }
}
