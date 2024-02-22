<div class="px-4 py-5 my-5 text-center">
    <img class="d-block mx-auto mb-4" src="../../images/logo.jpg">
    <h1 class="display-5 fw-bold">{{ $article->titre }}</h1>
    <div class="col-lg-6 mx-auto">
      <p class="lead mb-4">{{ $article->description }}</p>
      <p class="lead mb-4"><i>Date de publication : {{ \Carbon\Carbon::parse($article->date_de_publication)->format('d/m/Y') }}</i></p>
      <div class="d-grid gap-2 d-sm-flex justify-content-sm-center">
        <a href="{{ route('articles.list') }}"> <button type="button" class="btn btn-primary btn-lg px-4 gap-3">Retour à la liste</button></a>
      </div>
    </div>
  </div>
