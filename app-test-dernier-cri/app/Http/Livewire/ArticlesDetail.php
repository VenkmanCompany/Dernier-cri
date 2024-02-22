<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\News;

class ArticlesDetail extends Component
{
    public $article;

    public function mount($id)
    {
        $this->article = News::findOrFail($id);
    }

    public function render()
    {
        $article = News::find($this->article);
        return view('livewire.articles-detail', ['article' => $article]);
    }
}
