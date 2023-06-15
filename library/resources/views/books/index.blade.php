<x-main>
    @if (session('success'))
        <!-- se la sezione è stata un "successo" mi passi questo msg-->
        <p>
            {{ session('success') }}
        </p>
    @endif

    <ul>
        @foreach ($books as $book)
            <li>
                <a href="{{ route('books.show', ['book' => $book['id']]) }}">
                    <!-- rende i link cliccabili -->
                    {{ $book['author'] }}-{{ $book['title'] }}-{{ $book['pages'] }}-{{ $book['year'] }}
                </a>
                <a href="{{ route('books.edit', ['book' => $book['id']]) }}">
                    <button>Modifica</button>
                </a>

                <form action="{{ route('books.delete', ['book' => $book['id']]) }}" method="POST">
                    @method('DELETE')
                    @csrf

                    <!--button -->
                    <button type="submit">Elimina</button>

                </form>

            </li>
        @endforeach
    </ul>



</x-main>
