<div class="d-flex align-items-center justify-content-between pb-2">
    <div>
        Hiển thị
        <strong>{!! ($data->total() > $data->perPage()) ? $data->perPage() : $data->total()  !!}</strong>/<strong>{!! $data->total() !!}</strong>
        bản ghi
    </div>
    <div>
        {!! $data->onEachSide(2)->appends(isset($appended) ? $appended : '')->render() !!}
    </div>
{{--    <nav aria-label="Page navigation example">--}}
{{--        <ul class="pagination m-0">--}}
{{--            <li class="page-item">--}}
{{--                <a class="page-link" href="#" aria-label="Previous">--}}
{{--                    <span class="text-dark" aria-hidden="true">&laquo;</span>--}}
{{--                    <span class="sr-only">Previous</span>--}}
{{--                </a>--}}
{{--            </li>--}}
{{--            <li class="page-item text-dark"><a class="page-link text-dark" href="#">1</a></li>--}}
{{--            <li class="page-item"><a class="page-link text-dark" href="#">2</a></li>--}}
{{--            <li class="page-item"><a class="page-link text-dark" href="#">3</a></li>--}}
{{--            <li class="page-item">--}}
{{--                <a class="page-link" href="#" aria-label="Next">--}}
{{--                    <span class="text-dark" aria-hidden="true">&raquo;</span>--}}
{{--                    <span class="sr-only">Next</span>--}}
{{--                </a>--}}
{{--            </li>--}}
{{--        </ul>--}}
{{--    </nav>--}}

</div>
