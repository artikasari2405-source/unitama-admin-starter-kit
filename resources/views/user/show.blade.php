<div class="row g-3">
    <div class="col-md-4 text-center">
        <img src="{{ $user->avatar ? asset('storage/' . $user->avatar) : asset('niceadmin/img/noprofilpicture.png') }}"
            alt="Avatar"
            class="img-fluid rounded border"
            style="width:250px; height:250px; object-fit:cover;">
    </div>

    <div class="col-md-8">
        <table class="table table-borderless">
            <tr>
                <td width="120"><strong>Email</strong></td>
                <td width="10">:</td>
                <td>{{ $user->email }}</td>
            </tr>
            <tr>
                <td><strong>Name</strong></td>
                <td>:</td>
                <td>{{ $user->name }}</td>
            </tr>
            <tr>
                <td><strong>Role</strong></td>
                <td>:</td>
                <td>{{ $user->role }}</td>
            </tr>
            <tr>
                <td><strong>Dibuat</strong></td>
                <td>:</td>
                <td>{{ $user->created_at->diffForHumans() }}</td>
            </tr>
            <tr>
                <td><strong>Diubah</strong></td>
                <td>:</td>
                <td>{{ $user->updated_at->diffForHumans() }}</td>
            </tr>
        </table>

        <a href="{{ route('user.edit', $user) }}" class="btn btn-warning">
            <i class='bx bx-pencil'></i> Ubah Data
        </a>
    </div>
</div>