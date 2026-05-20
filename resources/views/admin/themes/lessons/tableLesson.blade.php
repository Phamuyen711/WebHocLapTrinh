@extends('admin.layouts.admin')

@section('content')
    <div class="container">
        <div class="page-inner">
            <div class="page-header">
                <h3 class="fw-bold mb-3">Quản lý bài học</h3>
                <ul class="breadcrumbs mb-3">
                    <li class="nav-home">
                        <a href="{{ route('admin.dashboard') }}">
                            <i class="icon-home"></i>
                        </a>
                    </li>
                    <li class="separator">
                        <i class="icon-arrow-right"></i>
                    </li>
                    <li class="nav-item">
                        <a href="#">Bảng quản lý bài học</a>
                    </li>
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

            <div class="d-flex justify-content-between align-items-center mb-2">
                <div>
                    @if ($lessons->total())
                        Hiển thị {{ $lessons->firstItem() }}–{{ $lessons->lastItem() }} / {{ $lessons->total() }}
                    @else
                        Không có dữ liệu
                    @endif
                </div>
                <form method="get">
                    <select name="per_page" class="form-select form-select-sm" onchange="this.form.submit()">
                        @foreach ([10, 25, 50, 100] as $n)
                            <option value="{{ $n }}"
                                {{ (int) request('per_page', 10) === $n ? 'selected' : '' }}>
                                {{ $n }}/trang
                            </option>
                        @endforeach
                    </select>
                </form>
            </div>

            <div class="row table-row">
                <div class="table-container">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th class="sticky-id">ID</th>
                                <th>Title</th>
                                <th>Course ID</th>
                                <th>URL</th>
                                <th>Preview</th>
                                <th>Time</th>
                                <th>Chapter</th>
                                <th>Created At</th>
                                <th>Updated At</th>
                                <th class="sticky-actions">Actions</th>
                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                                <th class="sticky-id">ID</th>
                                <th>Title</th>
                                <th>Course ID</th>
                                <th>URL</th>
                                <th>Preview</th>
                                <th>Time</th>
                                <th>Chapter</th>
                                <th>Created At</th>
                                <th>Updated At</th>
                                <th class="sticky-actions">Actions</th>
                            </tr>
                        </tfoot>
                        <tbody>
                            @forelse ($lessons as $lesson)
                                <tr>
                                    <td class="sticky-id">{{ $lesson->id }}</td>
                                    <td>{{ $lesson->title }}</td>
                                    <td>{{ $lesson->id_course }}</td>
                                    <td>
                                        @if ($lesson->url)
                                            <a href="{{ $lesson->url }}" target="_blank" rel="noopener">Xem bài học</a>
                                        @endif
                                    </td>
                                    <td>{{ $lesson->is_preview ? 'Yes' : 'No' }}</td>
                                    <td>{{ $lesson->time }}</td>
                                    <td>{{ $lesson->chapter }}</td>
                                    <td>{{ $lesson->created_at }}</td>
                                    <td>{{ $lesson->updated_at }}</td>
                                    <td class="text-center sticky-actions">
                                        <div class="d-flex justify-content-center gap-2">
                                            <a href="{{ route('admin.lessons.show', $lesson->id) }}"
                                                class="btn btn-warning btn-sm">
                                                <i class="fas fa-eye me-1"></i> Chi tiết
                                            </a>
                                            <a href="{{ route('admin.lessons.edit', $lesson->id) }}"
                                                class="btn btn-warning btn-sm">
                                                <i class="fas fa-edit me-1"></i> Sửa
                                            </a>
                                            <button type="button" class="btn btn-danger btn-sm delete-lesson"
                                                data-id="{{ $lesson->id }}">
                                                <i class="fas fa-trash me-1"></i> Xóa
                                            </button>
                                        </div>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="10" class="text-center fw-bold text-danger">Không có bản ghi nào được tìm
                                        thấy</td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>

                    {{-- Thanh phân trang --}}
                    <div class="mt-3">
                        {{-- Nếu dự án dùng Bootstrap 5 --}}
                        {{ $lessons->onEachSide(1)->appends(request()->query())->links('pagination::bootstrap-5') }}
                        {{-- Nếu không có view trên, dùng mặc định:
                        {{ $lessons->onEachSide(1)->appends(request()->query())->links() }} --}}
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal Xác nhận Xóa -->
    <div class="modal fade" id="deleteModal" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Xác nhận xóa</h5>
                    <button type="button" class="close" aria-label="Close" id="closeModalBtn">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    Bạn có chắc chắn muốn xóa bài giảng này không?
                </div>
                <div class="modal-footer">
                    <form id="deleteForm" method="POST">
                        @csrf
                        @method('DELETE')
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
            const baseDeleteUrl = @json(url('admin/lessons'));
            const modalEl = document.getElementById('deleteModal');
            const deleteForm = document.getElementById('deleteForm');
            const closeModalBtn = document.getElementById('closeModalBtn');
            const cancelModalBtn = document.getElementById('cancelModalBtn');

            function showModal() {
                if (window.bootstrap && window.bootstrap.Modal) {
                    const modal = bootstrap.Modal.getOrCreateInstance(modalEl);
                    modal.show();
                } else if (window.jQuery && typeof jQuery(modalEl).modal === 'function') {
                    jQuery(modalEl).modal('show');
                } else {
                    modalEl.style.display = 'block';
                }
            }

            function hideModal() {
                if (window.bootstrap && window.bootstrap.Modal) {
                    const modal = bootstrap.Modal.getOrCreateInstance(modalEl);
                    modal.hide();
                } else if (window.jQuery && typeof jQuery(modalEl).modal === 'function') {
                    jQuery(modalEl).modal('hide');
                } else {
                    modalEl.style.display = 'none';
                }
            }

            document.querySelectorAll('.delete-lesson').forEach(btn => {
                btn.addEventListener('click', function() {
                    const id = this.getAttribute('data-id');
                    deleteForm.action = baseDeleteUrl + '/' + id;
                    showModal();
                });
            });

            closeModalBtn.addEventListener('click', hideModal);
            cancelModalBtn.addEventListener('click', hideModal);
        });
    </script>
@endsection
