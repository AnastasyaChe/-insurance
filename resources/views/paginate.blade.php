@if ($paginator->hasPages())
<ul class="pagination">
<li><a href="{{ $paginator->url(1)}}" rel="#">FirstPage</a></li>
@if ($paginator->onFirstPage())
            
<li class="disabled"><span>&laquo;</span></li>

        @else
            
<li><a href="{{ $paginator->previousPageUrl() }}" rel="prev">&laquo;</a></li>

        @endif
@foreach ($elements as $element)
@if (is_array($element))
@foreach ($element as $page => $url)
@if($page <= config('app.links'))

<li><a href="{{ $url }}">{{ $page }}</a></li>
@endif
@endforeach
@endif
@endforeach
@if ($paginator->hasMorePages())
            
<li><a href="{{ $paginator->nextPageUrl() }}" rel="next">&raquo;</a></li>

 @else
            
<li class="disabled"><span>&raquo;</span></li>
@endif

<li><a href="{{ $paginator->url($paginator->lastPage()) }}" rel="#">Last Page</a></li>
</ul>
@endif