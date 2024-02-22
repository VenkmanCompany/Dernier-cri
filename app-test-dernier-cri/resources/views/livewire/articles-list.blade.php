<div class="container px-4 py-5" id="featured-3">
  <h2 class="pb-2 border-bottom">Liste des articles</h2>
  <div class="row g-4 py-5 row-cols-1 row-cols-lg-3">

    @foreach($articles as $article)
        <div class="feature col">
        <div class="feature-icon bg-primary bg-gradient">
            <svg class="bi" width="1em" height="1em"><use xlink:href="#collection"/></svg>
        </div>
        <h2>{{ $article->titre }}</h2>
        <p>{{ $article->description }}...</p>
        <a href="{{ route('articles.detail', $article->id) }}" class="icon-link">
            En savoir plus
            <svg class="bi" width="1em" height="1em"><use xlink:href="#chevron-right"/></svg>
        </a>
        </div>
    @endforeach

  </div>
</div>

