<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\MyLibs\WordpressAPI;
use App\Post;


class wpController extends Controller
{
    //
    public function index() {
        $data = new WordpressAPI;
        $posts = $data->importPosts(2);
        foreach ($posts as $post) {
            $this->syncPost($post);
        }
        dd($posts);
    }
    protected function syncPost($data)
    {
        $found = Post::where('wp_id', $data->id)->first();

        if (!$found) {
            return $this->createPost($data);
        }
        if ($found){// and $found->updated_at->format("Y-m-d H:i:s") < $this->carbonDate($data->modified)->format("Y-m-d H:i:s")) {
            return $this->updatePost($found, $data);
        }
    }
    protected function createPost($data)
    {
        $post = new Post();
       // $post->id = $data->id;
        $post->wp_id = $data->id;
     //   $post->user_id = $this->getAuthor($data->_embedded->author);
        $post->title = $data->title->rendered;
//        $post->slug = $data->slug;
//        $post->featured_image = $this->featuredImage($data->_embedded);
//        $post->featured = ($data->sticky) ? 1 : null;
//        $post->excerpt = $data->excerpt->rendered;
//        $post->content = $data->content->rendered;
//        $post->format = $data->format;
//        $post->status = 'publish';
//        $post->publishes_at = $this->carbonDate($data->date);
//        $post->created_at = $this->carbonDate($data->date);
//        $post->updated_at = $this->carbonDate($data->modified);
//        $post->category_id = $this->getCategory($data->_embedded->{"wp:term"});
        $post->save();
       // $this->syncTags($post, $data->_embedded->{"wp:term"});
        return $post;
    }
    protected function updatePost($existingRecord, $updatedRecord)
    {
        $existingRecord->wp_id = $updatedRecord->id;
        $existingRecord->save();


    }

}

