@if ($paginator->hasPages())
    <nav role="navigation" aria-label="Pagination Navigation" class="flex justify-center items-center">
        {{-- Previous Page Link --}}
        @if ($paginator->onFirstPage())
            <span class="relative inline-flex items-center px-2 py-1 text-sm font-medium text-slate-100 bg-slate-300 border border-gray-300 cursor-default leading-5 rounded-l-full">
                {!! __('pagination.previous') !!}
            </span>
        @else
            <a href="{{ $paginator->previousPageUrl() }}" rel="prev" class="relative inline-flex items-center px-2 py-1 text-sm font-medium text-slate-100 bg-slate-800 border border-gray-300 leading-5 rounded-l-full hover:text-gray-500 focus:outline-none focus:ring ring-gray-300 focus:border-blue-300 active:bg-gray-100 active:text-gray-700 transition ease-in-out duration-150">
                {!! __('pagination.previous') !!}
            </a>
        @endif

        {{-- Next Page Link --}}
        @if ($paginator->hasMorePages())
            <a href="{{ $paginator->nextPageUrl() }}" rel="next" class="relative inline-flex items-center px-2 py-1 text-sm font-medium text-slate-100 bg-slate-800 border border-gray-300 leading-5 rounded-r-full hover:text-gray-500 focus:outline-none focus:ring ring-gray-300 focus:border-blue-300 active:bg-gray-100 active:text-gray-700 transition ease-in-out duration-150">
                {!! __('pagination.next') !!}
            </a>
        @else
            <span class="relative inline-flex items-center px-2 py-1 text-sm font-medium text-slate-100 bg-slate-300 border border-gray-300 cursor-default leading-5 rounded-r-full">
                {!! __('pagination.next') !!}
            </span>
        @endif
    </nav>
@endif
