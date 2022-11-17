<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action={{ route('student.store') }} method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="modal-body">
                        <div class="mb-3">
                            <label for="formGroupExampleInput" class="form-label"> Nama Siswa</label>
                            <input type="text" class="form-control" id="formGroupExampleInput" placeholder=""
                                name="name" required>
                        </div>
                        <div class="mb-3">
                            <label for="formGroupExampleInput2" class="form-label">NIS</label>
                            <input type="text" class="form-control" placeholder="" name="nis" autocomplete="off"
                                required>
                        </div>
                        <div class="mb-3">
                            <label for="formGroupExampleInput2" class="form-label">Jurusan</label>
                            <select name="majors_id" class="dataTable-selector form-select" required>
                                <option value="" selected="" disabled>-- Pilih --</option>
                                @foreach ($maj as $m)
                                    <option value="{{ $m->id }}">{{ $m->name }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Kembali</button>
                        <button type="submit" class="btn btn-primary">Tambah Siswa</button>
                    </div>
                </form>
            </div>
            </div>
        </div>
    </div>
</div>
