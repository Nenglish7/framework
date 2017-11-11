<?php

/*
|--------------------------------------------------------------------------
| Module Events
|--------------------------------------------------------------------------
|
| Here is where you can register all of the Events for the module.
*/


use App\Modules\Content\Models\Post;


/** Define Events. */

Event::listen('backend.menu.sidebar', function ()
{
    return array(

        // Posts.
        array(
            'url'    => '#',
            'title'  => __d('content', 'Posts'),
            'icon'   => 'thumb-tack',
            'weight' => 1,

            //
            'path'   => 'posts',
        ),
        array(
            'url'    => site_url('admin/content/posts'),
            'title'  => __d('content', 'All Posts'),
            'icon'   => 'circle-o',
            'weight' => 0,

            //
            'path'   => 'posts.list',
            //'can'    => 'lists:' .Post::class,
        ),
        array(
            'url'    => site_url('admin/content/create/post'),
            'title'  => __d('content', 'Create a new Post'),
            'icon'   => 'circle-o',
            'weight' => 1,

            //
            'path'   => 'posts.create',
            //'can'    => 'create:' .Post::class,
        ),
        array(
            'url'    => site_url('admin/content/categories'),
            'title'  => __d('content', 'Categories'),
            'icon'   => 'circle-o',
            'weight' => 2,

            //
            'path'   => 'posts.categories',
            //'can'    => 'lists:' .Post::class,
        ),
        array(
            'url'    => site_url('admin/content/tags'),
            'title'  => __d('content', 'Tags'),
            'icon'   => 'circle-o',
            'weight' => 2,

            //
            'path'   => 'posts.tags',
            //'can'    => 'lists:' .Post::class,
        ),

        // Pages.
        array(
            'url'    => '#',
            'title'  => __d('content', 'Pages'),
            'icon'   => 'files-o',
            'weight' => 2,

            //
            'path'   => 'pages',
        ),
        array(
            'url'    => site_url('admin/content/pages'),
            'title'  => __d('content', 'All Pages'),
            'icon'   => 'circle-o',
            'weight' => 0,

            //
            'path'   => 'pages.list',
            //'can'    => 'lists:' .Post::class,
        ),
        array(
            'url'    => site_url('admin/content/create/page'),
            'title'  => __d('content', 'Create a new Page'),
            'icon'   => 'circle-o',
            'weight' => 1,

            //
            'path'   => 'pages.create',
            //'can'    => 'create:' .Post::class,
        ),
    );
});

