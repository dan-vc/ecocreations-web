@if ($paginator->hasPages())
    <ul class="paginacion">
        {{-- Anterior --}}
        @if ($paginator->onFirstPage())
            <li class="disabled btn btn-light">Anterior</li>
        @else
            <li class="btn btn-light"><a href="{{ $paginator->previousPageUrl() }}">Anterior</a></li>
        @endif

        {{-- Páginas --}}
        @foreach ($elements as $element)
            @if (is_string($element))
                <li class="disabled">{{ $element }}</li>
            @endif

            @if (is_array($element))
                @foreach ($element as $page => $url)
                    @if ($page == $paginator->currentPage())
                        <li class="active pagination-link">{{ $page }}</li>
                    @else
                        <li class="pagination-link"><a href="{{ $url }}">{{ $page }}</a></li>
                    @endif
                @endforeach
            @endif
        @endforeach

        {{-- Siguiente --}}
        @if ($paginator->hasMorePages())
            <a href="{{ $paginator->nextPageUrl() }}" class="btn btn-light">Siguiente</a>
        @else
            <li class="disabled btn btn-light">Siguiente</li>
        @endif
    </ul>
@endif
