@if ($paginator->hasPages())
    <nav class="pagination is-small">
        {{-- Previous Page Link --}}
        @if ($paginator->onFirstPage())
            <a class="pagination-previous is-disabled" aria-disabled="true" aria-label="@lang('pagination.previous')">
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
            <a class="pagination-next is-disabled" aria-disabled="true" aria-label="@lang('pagination.next')">
                <span aria-hidden="true">Next page &rsaquo;</span>
            </a>
        @endif
        <ul class="pagination-list is-hidden-mobile">
            <li>
                <span class="is-size-7">
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
                </span>
            </li>
        </ul>
    </nav>
@endif