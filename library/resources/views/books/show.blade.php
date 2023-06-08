<x-main headerTitle='Dettagli del libro selezionato'>

    <div class="col-md-6">
        <img src="{{ empty($book->image) ? Storage::url('/images/default.png') : Storage::url($book->image) }}"
            alt="...">
        <!-- //l'operatore binario mi dice che:quando image è vuoto-> se l'img è empty allora metto l'img di default, altrimenti quella caricata -->
        <h1 class="display-5 fw-bolder">{{ $book->title }}</h1>
    </div>
    <div class="col-md-6">
        <p>Autore: {{ $book->author }} </p>
        <p>Numero Pagine: {{ $book->pages }} </p>
    </div>

</x-main>
