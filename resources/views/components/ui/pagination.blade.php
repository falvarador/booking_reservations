@if ($paginator->hasPages())

    <div class="content is-small is-hidden-mobile">
        {!! __('Showing') !!}
        @if ($paginator->firstItem())
            <span>{{ $paginator->firstItem() }}</span>
            {!! __('to') !!}
            <span>{{ $paginator->lastItem() }}</span>
        @else
            {{ $paginator->count() }}
        @endif
        {!! __('of') !!}
        <span>{{ $paginator->total() }}</span>
        {!! __('results') !!}
    </div>

    <nav class="pagination is-small" role="navigation" aria-label="pagination">
        {{-- Previous Page Link --}}
        @if ($paginator->onFirstPage())
            <a class="pagination-previous" disabled aria-disabled="true" aria-label="@lang('pagination.previous')">
                <span aria-hidden="true">&lsaquo; Previous</span>
            </a>
        @else
            <a href="{{ $paginator->previousPageUrl() }}" class="pagination-previous" rel="prev"
                aria-label="@lang('pagination.previous')">&lsaquo; Previous</a>
        @endif

        {{-- Next Page Link --}}
        @if ($paginator->hasMorePages())
            <a href="{{ $paginator->nextPageUrl() }}" class="pagination-next" rel="next"
                aria-label="@lang('pagination.next')">Next page &rsaquo;</a>
        @else
            <a class="pagination-next" disabled aria-disabled="true" aria-label="@lang('pagination.next')">
                <span aria-hidden="true">Next page &rsaquo;</span>
            </a>
        @endif

        {{-- Pagination Elements --}}
        <ul class="pagination-list">
            {{-- First page: Always show it unless we are within the first range --}}
            @if ($paginator->currentPage() > 3)
                <li>
                    <a href="{{ $paginator->url(1) }}" class="pagination-link" aria-label="Goto page 1">1</a>
                </li>
            @endif

            {{-- Initial ellipsis --}}
            @if ($paginator->currentPage() > 4)
                <li>
                    <span class="pagination-ellipsis">&hellip;</span>
                </li>
            @endif

            {{-- Pages range: Show 5 pages dynamically --}}
            @if ($paginator->currentPage() <= 3)
                {{-- If on the first pages, show the first 5 pages --}}
                @foreach (range(1, min(5, $paginator->lastPage())) as $page)
                    @if ($page == $paginator->currentPage())
                        <li>
                            <a class="pagination-link is-current" aria-label="Page {{ $page }}"
                                aria-current="page"><span>{{ $page }}</span></a>
                        </li>
                    @else
                        <li>
                            <a href="{{ $paginator->url($page) }}" class="pagination-link"
                                aria-label="Goto page {{ $page }}">{{ $page }}</a>
                        </li>
                    @endif
                @endforeach
            @else
                {{-- Dynamically center around the current page --}}
                @foreach (range(max(1, $paginator->currentPage() - 2), min($paginator->lastPage(), $paginator->currentPage() + 2)) as $page)
                    @if ($page == $paginator->currentPage())
                        <li>
                            <a class="pagination-link is-current" aria-label="Page {{ $page }}"
                                aria-current="page"><span>{{ $page }}</span></a>
                        </li>
                    @else
                        <li>
                            <a href="{{ $paginator->url($page) }}" class="pagination-link"
                                aria-label="Goto page {{ $page }}">{{ $page }}</a>
                        </li>
                    @endif
                @endforeach
            @endif

            {{-- Final ellipsis --}}
            @if ($paginator->currentPage() < $paginator->lastPage() - 3)
                <li>
                    <span class="pagination-ellipsis">&hellip;</span>
                </li>
            @endif

            {{-- Last page: Always show it unless we are within the last range --}}
            @if ($paginator->currentPage() < $paginator->lastPage() - 2)
                <li>
                    <a href="{{ $paginator->url($paginator->lastPage()) }}" class="pagination-link"
                        aria-label="Goto page {{ $paginator->lastPage() }}">{{ $paginator->lastPage() }}</a>
                </li>
            @endif
        </ul>

    </nav>
@endif