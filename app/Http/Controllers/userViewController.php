<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class userViewController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index($login)
    {
        $r = $this->getUserApi($login);
  
        return view('userview',[
            "login"                 => 	$r['login'],
            "id"                    => 	$r['id'],
            "node_id"               => 	$r['node_id'],
            "avatar_url"            => 	$r['avatar_url'],
            "gravatar_id"           => 	$r['gravatar_id'],
            "url"                   => 	$r['url'],
            "html_url"              => 	$r['html_url'],
            "followers_url"         => 	$r['followers_url'],
            "following_url"         => 	$r['following_url'],
            "gists_url"             => 	$r['gists_url'],
            "starred_url"           => 	$r['starred_url'],
            "subscriptions_url"     => 	$r['subscriptions_url'],
            "organizations_url"     => 	$r['organizations_url'],
            "repos_url"             => 	$r['repos_url'],
            "events_url"            => 	$r['events_url'],
            "received_events_url"   => 	$r['received_events_url'],
            "type"                  => 	$r['type'],
            "site_admin"            => 	$r['site_admin'],
            "name"                  => 	$r['name'],
            "company"               => 	$r['company'],
            "blog"                  => 	$r['blog'],
            "location"              => 	$r['location'],
            "email"                 => 	$r['email'],
            "hireable"              => 	$r['hireable'],
            "bio"                   => 	$r['bio'],
            "twitter_username"      => 	$r['twitter_username'],
            "public_repos"          => 	$r['public_repos'],
            "public_gists"          => 	$r['public_gists'],
            "followers"             => 	$r['followers'],
            "following"             => 	$r['following'],
            "created_at"            => 	$r['created_at'],
            "updated_at"            => 	$r['updated_at']
            

        ]);
    }

    public function getUserApi($login){
        $url = 'https://api.github.com/users/'.$login;
        $agent = "Mozilla/4.0 (compatible; MSIE 6.0; Windows NT 5.1; SV1)";
        $authorization = "your_username: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"; // Prepare the authorisation token
       
        $curl = curl_init();
        curl_setopt($curl, CURLOPT_URL, $url);
        curl_setopt($curl, CURLOPT_USERAGENT, $agent);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1) ;
        curl_setopt( $curl, CURLOPT_USERPWD, $authorization);
        curl_exec($curl);
        $result=curl_exec($curl);
        curl_close($curl);

        return json_decode( $result, true );
    }
}
