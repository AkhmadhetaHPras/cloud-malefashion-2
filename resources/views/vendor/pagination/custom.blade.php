@if ($paginator->hasPages())
<ul class="product__pagination">

    <!-- @if ($paginator->onFirstPage())
    <a class="disabled">← Previous</a>
    @else
    <a href="{{ $paginator->previousPageUrl() }}" rel="prev">← Previous</a>
    @endif -->

    @foreach ($elements as $element)

    @if (is_string($element))
    <a class="disabled">{{ $element }}</a>
    @endif



    @if (is_array($element))
    @foreach ($element as $page => $url)
    @if ($page == $paginator->currentPage())
    <a class="active">{{ $page }}</a>
    @else
    <a href="{{ $url }}">{{ $page }}</a>
    @endif
    @endforeach
    @endif
    @endforeach



    <!-- @if ($paginator->hasMorePages())
    <a href="{{ $paginator->nextPageUrl() }}" rel="next">Next →</a>
    @else
    <a class="disabled">Next →</a>
    @endif -->
</ul>
@endif