<div class="container-fluid tm-container-content tm-mt-60">
    @if ($paginator->hasPages())
    <div class="row tm-mb-90">
        <div class="col-12 d-flex justify-content-between align-items-center tm-paging-col">
            <!-- {{-- Trở về trang trước --}} -->
            @if ($paginator->onFirstPage())
            <a href="javascript:void(0);" class="btn btn-primary tm-btn-prev mb-2 disabled">Trang trước</a>
            @else
            <a href="{{ $paginator->previousPageUrl() }}" class="btn btn-primary tm-btn-prev mb-2">Trang trước</a>
            @endif
            <div class="tm-paging d-flex">
                <!-- {{-- Pagination Elements --}} -->
                @foreach ($elements as $element)

                <!-- {{-- Dấu ba chấm --}} -->
                @if (is_string($element))
                <a href="javascript:void(0);" class="tm-paging-link">{{ $element }} </a>
                @endif

                <!-- {{-- Mảng các phần tử trong trang --}} -->
                @if (is_array($element))
                @foreach ($element as $page => $url)
                @if ($page == $paginator->currentPage())
                <a href="" class="active tm-paging-link">{{ $page }}</a>
                @else
                <a href="{{ $url }}" class="tm-paging-link">{{ $page }}</a>
                @endif
                @endforeach
                @endif

                @endforeach
            </div>

            <!-- {{-- Trang tiếp theo --}} -->
            @if ($paginator->hasMorePages())
            <a href="{{ $paginator->nextPageUrl() }}" class="btn btn-primary tm-btn-next">Trang tiếp theo</a>
            @else
            <a href="javascript:void(0);" class="btn btn-primary tm-btn-prev mb-2 disabled">Trang tiếp theo</a>
            @endif
        </div>
    </div>
    @endif
</div>