<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Feeds;

class BlogController extends Controller
{
    /**
     * Show the profile for a given user.
     *
     * @param  int  $id
     * @return \Illuminate\View\View
     */
    public function index() {
        $feed = Feeds::make([
          'https://betterprogramming.pub/feed',
          'https://davidwalsh.name/',
          'https://myprogrammingblog.com/feed',
          //'https://zerodha.tech/index.xml',
          // 'https://blog.codinghorror.com/rss/'
        ]);
        $data = array(
          'title'     => $feed->get_title(),
          'permalink' => $feed->get_permalink(),
          'items'     => $feed->get_items(),
        );
   
        return view('blog/posts', $data);
      }
}