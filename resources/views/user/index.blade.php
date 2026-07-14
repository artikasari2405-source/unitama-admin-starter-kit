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
                    <td>
                        <a href="{{ route('user.edit', $user->id) }}" class="btn btn-warning btn-sm">Edit</a>

                        <form action="{{ route('user.destroy', $user->id) }}"
                        method="POST"
                        class="d-inline">
                            @csrf
                            @method('DELETE')

                            <button class="btn btn-danger btn-sm">
                                Delete
                            </button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>

</div>

</x-app>