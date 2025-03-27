<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NewsController extends Controller
{
    //
    public function showNews($category = null)
    {
        $news = [
            'technology' => [
                ['title' => 'What\'s New?', 'category' => 'Tech', 'article' => 'sahfdkh sijfeiewhefh fewieufuefouefe hfuhefh jewifeio'],
                ['title' => 'Latest Gadgets', 'category' => 'Tech', 'article' => 'dsrkgjgjregj djiofejn  cife vd9dnwe fn ewojfeij .'],
            ],
            'politics' => [
                ['title' => 'Election Updates', 'category' => 'Politics', 'article' => 'fkjf jejfef jdjfrf jif jf joef wfj fwejfewiof efjeifj '],
                ['title' => 'New Policies', 'category' => 'Politics', 'article' => 'fkjf jejfef jdjfrf jif jf joef wfj fwejfewiof efjeifj '],
            ],
            'sports' => [
                ['title' => 'Match Highlights', 'category' => 'Sports', 'article' => 'fkjf jejfef jdjfrf jif jf joef wfj fwejfewiof efjeifj '],
                ['title' => 'Player Transfers', 'category' => 'Sports', 'article' => 'fkjf jejfef jdjfrf jif jf joef wfj fwejfewiof efjeifj '],
            ],
            'entertainment' => [
                ['title' => 'Movie Releases', 'category' => 'Entertainment', 'article' => 'fkjf jejfef jdjfrf jif jf joef wfj fwejfewiof efjeifj '],
                ['title' => 'Celebrity News', 'category' => 'Entertainment', 'article' => 'fkjf jejfef jdjfrf jif jf joef wfj fwejfewiof efjeifj '],
            ],
        ];
        $selectedNews = $category ? ($news[$category] ?? []) : [];

        return view('news', ['news' => $selectedNews, 'category' => $category]);
    }
}
