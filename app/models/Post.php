<?php

namespace app\models;

class Post
{
    /**
     * Get all posts.
     *
     * @return array Array of post objects
     */
    public function getAllPosts()
    {
        return [
            [
                'id' => '1',
                'title' => 'First Post',
                'content' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.'
            ],
            [
                'id' => '2',
                'title' => 'Second Post',
                'content' => 'Praesent volutpat, elit nec tempus fermentum, urna purus convallis nisi.'
            ]
        ];
    }

}
