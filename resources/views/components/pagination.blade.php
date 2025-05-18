@if ($paginator->hasPages())
    <ul class="paginacion">
        {{-- Anterior --}}
        @if ($paginator->onFirstPage())
            <li class="disabled btn-anterior">Anterior</li>
        @else
            <li class="btn-anterior"><a href="{{ $paginator->previousPageUrl() }}">Anterior</a></li>
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
            <li class="btn-siguiente"><a href="{{ $paginator->nextPageUrl() }}">Siguiente</a></li>
        @else
            <li class="disabled btn-siguiente">Siguiente</li>
        @endif
    </ul>
@endif
