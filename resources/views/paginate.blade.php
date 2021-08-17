@if ($paginator->hasPages())
<ul class="pagination">
<li><a href="{{ $paginator->url(1)}}" rel="#">FirstPage</a></li>
@foreach ($elements as $element)
@if (is_array($element))
@php $arr = array_slice($element, ($paginator->currentPage() - 1), config('app.links'), true)
@endphp
@foreach($arr as $page => $url)
<li><a href="{{ $url }}">{{ $page }}</a></li>
@endforeach

@endif
@endforeach
@if ($paginator->hasMorePages())
<li><a href="{{ $paginator->url($paginator->lastPage()) }}" rel="#">Last Page</a></li>
</ul>
@endif
@endif 
