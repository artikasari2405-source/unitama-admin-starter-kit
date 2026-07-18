<x-app>

<x-slot:title>{{ $title }}</x-slot:title>

<div class="card shadow p-3 mb-3">
    <h5 class="fw-bold mb-0">{{ $title }}</h5>
</div>

<div class="card shadow p-3">

    <a href="{{ route('user.create') }}" class="btn btn-primary mb-3">
        Create
    </a>

    <div class="table-responsive">
        <table class="table table-bordered border-dark table-hover w-100" id="data-table">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Nama</th>
                    <th>Email</th>
                    <th>Role</th>
                    <th>Aksi</th>
                </tr>
            </thead>

            <tbody>
                @foreach($users as $user)
                <tr>
                    <th>{{ $loop->iteration }}</th>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->email }}</td>
                    <td>{{ $user->role }}</td>
                    <td class="text-nowrap">

                        <button type="button" class="btn btn-info btn-sm btn-detail" data-bs-toggle="modal"
                                    data-bs-target="#detailModal" data-route="{{ route('user.show', $user) }}">
                                    <i class='bx bx-show'></i>
                                </button>

                    <a href="{{ route('user.edit', $user->id) }}" class="btn btn-warning btn-sm">
                        <i class='bx bx-pencil'></i>
                        </a>

                        <button
                            type="button"
                            class="btn btn-danger btn-sm btn-delete"
                            data-bs-toggle="modal"
                            data-bs-target="#deleteModal"
                            data-route="{{ route('user.destroy', $user) }}">
                            <i class='bx bxs-trash'></i>
                        </button>

                    </td>
                </tr>
                @endforeach
            </tbody>

        </table>
    </div>

</div>

@push('modals')
<div class="modal fade" id="detailModal" tabindex="-1" aria-labelledby="detailModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="detailModalLabel">Detail {{ $title }}</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>

            <div class="modal-body" id="modal-detail">
            </div>

            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-bs-dismiss="modal">
                    Close
                </button>
            </div>
        </div>
    </div>
</div>
    @endpush


@push('scripts')
<script>
    $('#data-table').on('click', '.btn-delete', function () {
        $('#form-delete').attr('action', $(this).data('route'));
    });

    $('#data-table').on('click', '.btn-detail', function () {
        $('#modal-detail').load($(this).data('route'));
    });
</script>
@endpush

</x-app>