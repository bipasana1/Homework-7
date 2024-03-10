<?php

namespace app\models;

class Post
{
    public function getAllPosts() {
        return [
            [
                'id' => '1',
                'title' => 'First Post',
                'views' => '6'
            ],
            [
                'id' => '2',
                'title' => 'Second Post',
                'views' => '5'
            ]
        ];
    }
}