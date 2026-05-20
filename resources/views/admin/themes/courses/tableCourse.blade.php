@extends('admin.layouts.admin')

@section('content')
    <div class="container">
        <div class="page-inner">
            <div class="page-header">
                <h3 class="fw-bold mb-3">Quản lý khóa học</h3>
                <ul class="breadcrumbs mb-3">
                    <li class="nav-home"><a href="{{ route('admin.dashboard') }}"><i class="icon-home"></i></a></li>
                    <li class="separator"><i class="icon-arrow-right"></i></li>
                    <li class="nav-item"><a href="#">Bảng quản lý khóa học</a></li>
                </ul>
            </div>

            @if (session('success'))
                <script>
                    document.addEventListener('DOMContentLoaded', function() {
                        Swal.fire({
                            icon: 'success',
                            title: 'Thành công!',
                            text: @json(session('success')),
                            confirmButtonText: 'OK'
                        });
                    });
                </script>
            @endif

            {{-- Tóm tắt + chọn số dòng/trang --}}
            <div class="d-flex flex-wrap justify-content-between align-items-center gap-2 mb-3">
                <div>
                    @if ($courses->total())
                        Hiển thị {{ $courses->firstItem() }}–{{ $courses->lastItem() }} / {{ $courses->total() }}
                        <span class="text-muted ms-2">| Trang {{ $courses->currentPage() }} /
                            {{ $courses->lastPage() }}</span>
                    @else
                        Không có dữ liệu
                    @endif
                </div>
                <form method="get" class="d-inline-block">
                    <label class="me-1 small text-muted">Số dòng/trang:</label>
                    <select name="per_page" class="form-select form-select-sm d-inline-block w-auto"
                        onchange="this.form.submit()">
                        @foreach ([10, 25, 50, 100] as $n)
                            <option value="{{ $n }}"
                                {{ (int) request('per_page', 10) === $n ? 'selected' : '' }}>
                                {{ $n }}</option>
                        @endforeach
                    </select>
                    @foreach (request()->except('per_page', 'page') as $k => $v)
                        <input type="hidden" name="{{ $k }}" value="{{ $v }}">
                    @endforeach
                </form>
            </div>

            <div class="row table-row">
                <div class="table-container">
                    <table class="table table-bordered" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th class="sticky-id">ID</th>
                                <th>Title</th>
                                <th>Level</th>
                                <th>Lessons</th>
                                <th>Price</th>
                                <th>Category</th>
                                <th>Students</th>
                                <th>Rate</th>
                                <th>Thumbnail</th>
                                <th>Status</th>
                                <th>Created At</th>
                                <th>Updated At</th>
                                <th class="sticky-actions">Actions</th>
                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                                <th class="sticky-id">ID</th>
                                <th>Title</th>
                                <th>Level</th>
                                <th>Lessons</th>
                                <th>Price</th>
                                <th>Category</th>
                                <th>Students</th>
                                <th>Rate</th>
                                <th>Thumbnail</th>
                                <th>Status</th>
                                <th>Created At</th>
                                <th>Updated At</th>
                                <th class="sticky-actions">Actions</th>
                            </tr>
                        </tfoot>
                        <tbody>
                            @forelse ($courses as $course)
                                <tr>
                                    <td class="sticky-id">{{ $course->id }}</td>
                                    <td>{{ $course->title ?? '--' }}</td>
                                    <td>{{ $course->level ?? '--' }}</td>
                                    <td>{{ $course->lesson ?? '--' }}</td>
                                    <td>{{ is_numeric($course->price) ? number_format($course->price, 2) : '--' }}</td>
                                    <td>{{ $course->category->category_name ?? '--' }}</td>
                                    <td>{{ $course->student_enrolled ?? 0 }}</td>
                                    <td>{{ isset($course->rate) ? number_format($course->rate, 1) : '0.0' }}</td>
                                    <td>
                                        @php $thumb = $course->thumbnail ? asset('storage/'.$course->thumbnail) : null; @endphp
                                        @if ($thumb)
                                            <img src="{{ $thumb }}" alt="Thumbnail"
                                                style="width:50px;height:50px;object-fit:cover;">
                                        @endif
                                    </td>
                                    <td>{{ $course->status ? ucfirst($course->status) : '--' }}</td>
                                    <td>{{ $course->created_at ?? '--' }}</td>
                                    <td>{{ $course->updated_at ?? '--' }}</td>
                                    <td class="text-center sticky-actions">
                                        <div class="d-flex justify-content-center gap-2">
                                            <a href="{{ route('admin.courses.show', $course->id) }}"
                                                class="btn btn-warning btn-sm">
                                                <i class="fas fa-eye me-1"></i> Chi tiết
                                            </a>
                                            <a href="{{ route('admin.courses.edit', $course->id) }}"
                                                class="btn btn-warning btn-sm">
                                                <i class="fas fa-edit me-1"></i> Sửa
                                            </a>
                                            <button type="button" class="btn btn-danger btn-sm delete-course"
                                                data-id="{{ $course->id }}">
                                                <i class="fas fa-trash me-1"></i> Xóa
                                            </button>
                                        </div>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="13" class="text-center fw-bold text-danger">Không có bản ghi nào được tìm
                                        thấy</td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>

                    {{-- Thanh phân trang --}}
                    @php
                        $pView = View::exists('pagination::bootstrap-5')
                            ? 'pagination::bootstrap-5'
                            : (View::exists('pagination::bootstrap-4')
                                ? 'pagination::bootstrap-4'
                                : null);
                    @endphp
                    <div class="d-flex flex-wrap justify-content-between align-items-center gap-2 mt-3">
                        <div class="small text-muted">
                            @if ($courses->total())
                                Trang {{ $courses->currentPage() }} / {{ $courses->lastPage() }}
                            @endif
                        </div>
                        <nav aria-label="Pagination">
                            {!! $pView
                                ? $courses->onEachSide(1)->appends(request()->query())->links($pView)
                                : $courses->onEachSide(1)->appends(request()->query())->links() !!}
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- Modal Xác nhận Xóa --}}
    <div class="modal fade" id="deleteModal" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Xác nhận xóa</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close" id="closeModalBtn">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">Bạn có chắc chắn muốn xóa khóa học này không?</div>
                <div class="modal-footer">
                    <form id="deleteForm" method="POST">@csrf @method('DELETE')
                        <button type="submit" class="btn btn-danger">Xóa</button>
                    </form>
                    <button type="button" class="btn btn-secondary" id="cancelModalBtn">Hủy</button>
                </div>
            </div>
        </div>
    </div>

    {{-- Script xử lý Xóa --}}
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const baseDeleteUrl = @json(url('admin/courses'));
            const deleteForm = document.getElementById('deleteForm');

            document.querySelectorAll('.delete-course').forEach(btn => {
                btn.addEventListener('click', function() {
                    deleteForm.action = baseDeleteUrl + '/' + this.getAttribute('data-id');
                    $('#deleteModal').modal('show');
                });
            });
            document.getElementById('closeModalBtn').addEventListener('click', () => $('#deleteModal').modal(
                'hide'));
            document.getElementById('cancelModalBtn').addEventListener('click', () => $('#deleteModal').modal(
                'hide'));
        });
    </script>
@endsection
