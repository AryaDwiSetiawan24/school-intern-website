<x-user-layout>
    <div class="pt-24">
    <h2 class="text-center">Form Pengaduan</h2>

    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <form action="{{ route('pengaduan.store') }}" method="POST" class="form-horizontal col-sm-12">
        @csrf
        <div class="form-group">
            <label for="name" class="col-sm-2 control-label">Nama</label>
            <div class="col-sm-9">
                <input type="text" name="name" id="name" placeholder="Masukkan Nama" class="form-control" required>
            </div>
        </div>
        <div class="form-group">
            <label for="email" class="col-sm-2 control-label">Surel</label>
            <div class="col-sm-9">
                <input type="email" name="email" id="email" placeholder="Masukkan Email" class="form-control" required>
            </div>
        </div>
        <div class="form-group">
            <label for="contact_no" class="col-sm-2 control-label">Nomor Kontak</label>
            <div class="col-sm-9">
                <input type="text" name="contact_no" id="contact_no" placeholder="Masukkan Nomor Telepon" class="form-control" required>
            </div>
        </div>
        <div class="form-group">
            <label for="description" class="col-sm-2 control-label">Deskripsi</label>
            <div class="col-sm-9">
                <textarea name="description" id="description" placeholder="Masukkan Deskripsi" class="form-control" rows="4" required></textarea>
            </div>
        </div>
        <div class="form-group">
            <div class="col-sm-9">
                <button type="submit" class="btn btn-primary">Kirim Pengaduan</button>
            </div>
        </div>
    </form>
    </div>
</x-user-layout>
