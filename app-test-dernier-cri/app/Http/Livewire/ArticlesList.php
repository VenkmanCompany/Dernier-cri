<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\News;

class ArticlesList extends Component
{
    public $articles;

    public function mount()
    {
        $articles = News::all();

        foreach ($articles as $article) {
            $article->description = substr($article->description, 0, 50);
        }

        $this->articles = $articles;
    }

    public function render()
    {
        return view('livewire.articles-list');
    }

}
