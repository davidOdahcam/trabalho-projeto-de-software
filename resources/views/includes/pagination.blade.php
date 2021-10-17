@if ($paginator->hasPages())
    <div class="dataTables_paginate paging_simple_numbers mt-3 align-items-center">
        <ul class="pagination justify-content-center">
            {{-- Previous Page Link --}}
            <li class="paginate_button page-item previous {{ ($paginator->onFirstPage()) ? 'disabled' : '' }}" id="main-datatable_previous">
                <a href="{{ $paginator->previousPageUrl() }}" class="page-link">
                    Anterior
                </a>
            </li>

            {{-- Pagination Elements --}}
            @foreach ($elements as $element)
                {{-- "Three Dots" Separator --}}
                @if (is_string($element))
                    <li class="paginate_button page-item disabled">
                        <a href="#" aria-controls="main-datatable" class="page-link">
                            ...
                        </a>
                    </li>
                @endif

                {{-- Array Of Links --}}
                @if (is_array($element))
                    @foreach ($element as $page => $url)
                        <li class="paginate_button page-item {{ ($paginator->currentPage() == $page) ? ' active' : '' }}">
                            <a href="{{ $paginator->url($page) }}" class="page-link">
                                {{ $page }}
                            </a>
                        </li>
                    @endforeach
                @endif
            @endforeach

            {{-- Next Page Link --}}
            <li class="paginate_button page-item next {{ ($paginator->hasMorePages()) ? ' disabled' : '' }}" id="main-datatable_next">
                <a href="{{ $paginator->nextPageUrl() }}" class="page-link">
                    Próximo
                </a>
            </li>
        </ul>
    </div>
@endif
