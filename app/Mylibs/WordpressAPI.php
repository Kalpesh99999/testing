<?php
/**
 * Created by PhpStorm.
 * User: Kalpesh
 * Date: 2017/06/22
 * Time: 7:46 PM
 */

namespace App\MyLibs;
use GuzzleHttp\Client;
class WordpressAPI
{
    protected $url = 'http://automationtube.com/wp-json/wp/v2/';

    public function importPosts($page)
    {
        $client = new Client();
        $response = $client->get('https://www.automationtube.com/wp-json/wp/v2/posts?page=' . $page); //return page one only from request. check exceptions to improve code
        $posts = json_decode($response->getBody());
        return $posts;
    }
}





