@if ($paginator->hasPages())
    <nav>
        <ul class="pagination">
            {{-- Previous Page Link --}}
            @if ($paginator->onFirstPage())
                <li class="page-item ">
                    <a class="page-link rounded-circle text-white bg-dark" href="#" aria-label="@lang('pagination.previous')">
                        <span aria-hidden="true">&laquo;</span>
                    </a>
                </li>


{{--                <li class="disabled" aria-disabled="true" aria-label="@lang('pagination.previous')">--}}
{{--                    <span aria-hidden="true">&lsaquo;</span>--}}
{{--                </li>--}}
            @else
                <li class="page-item ">
                    <a class="page-link rounded-circle text-white bg-dark" href="{{ $paginator->previousPageUrl() }}" rel="prev" aria-label="@lang('pagination.previous')">
                        <span aria-hidden="true">&laquo;</span>
                    </a>
                </li>
{{--                <li>--}}
{{--                    <a  aria-label="@lang('pagination.previous')">&lsaquo;</a>--}}
{{--                </li>--}}
            @endif

            {{-- Pagination Elements --}}
            @foreach ($elements as $element)
                {{-- "Three Dots" Separator --}}
                @if (is_string($element))
                    <li class="  page-item"><a class="page-link rounded-circle text-decoration-none  text-white bg-dark">{{ $element }}</a></li>
{{--                    <li class="disabled" aria-disabled="true"><span>{{ $element }}</span></li>--}}
                @endif

                {{-- Array Of Links --}}
                @if (is_array($element))
                    @foreach ($element as $page => $url)
                        @if ($page == $paginator->currentPage())
                            <li class="page-item"><a class="page-link rounded-circle text-decoration-none  text-white bg-dark">{{ $page }}</a></li>
                        @else
                            <li class="page-item"><a class="page-link rounded-circle text-decoration-none  text-white bg-dark" href="{{ $url }}">{{ $page }}</a></li>
                        @endif
                    @endforeach
                @endif
            @endforeach

            {{-- Next Page Link --}}
            @if ($paginator->hasMorePages())
                <li class="page-item">
                    <a href="{{ $paginator->nextPageUrl() }}" class="page-link rounded-circle text-white bg-dark" rel="next" aria-label="@lang('pagination.next')">&raquo;</a>
                </li>
            @else
                <li class="page-item">
                    <a class="page-link rounded-circle text-decoration-none text-white bg-dark"  aria-label="@lang('pagination.next')">
                        <span aria-hidden="true">&raquo;</span>
                    </a>
                </li>
{{--                <li class="disabled" aria-disabled="true" aria-label="@lang('pagination.next')">--}}
{{--                    <span aria-hidden="true">&rsaquo;</span>--}}
{{--                </li>--}}
            @endif
        </ul>
    </nav>
@endif
