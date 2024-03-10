<?php

namespace app\models;

class Post
{
    public function getAllPosts()
    {
        return [
            [
                'id' => '1',
                'title' => 'First Post',
                'views' => '120'
            ],
            [
                'id' => '2',
                'title' => 'Second Post',
                'content' => '90'
            ]
        ];
    }

}
