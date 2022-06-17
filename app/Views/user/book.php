<?= $this->extend('templates/userTemplates') ?>

<?= $this->section('content') ?>

<section class="container">
    <div class="card m-5">
        <div class="card-header">
            <div class="w-100 d-flex justify-content-between">
                <div>Books Data</div>
                <div>
                    <a href="#" class="btn btn-success btn-sm d-flex align-items-center"><i class="bi bi-plus"
                            style="font-size: 1.25rem; margin-right: 0.25rem;"></i><span>Add Buku</span></a>
                </div>
            </div>
        </div>
        <div class="card-body">
            <table class="table table-striped table-bordered">
                <tr>
                    <th class="text-center">ISBN</th>
                    <th class="text-center">Author</th>
                    <th class="text-center">Title</th>
                    <th>Price</th>
                    <th class="text-center">Aksi</th>
                </tr>
                <tr>
                    <td class="text-center">1</td>
                    <td class="text-center">Ismail</td>
                    <td class="text-center">Buku ismail</td>
                    <td>100000</td>
                    <td class="text-center"><a href="#" class="btn btn-sm btn-warning me-2"><i
                                class="bi bi-pencil-square"></i></a>
                        <button type="button" onclick="" class="btn btn-danger btn-sm"><i
                                class="bi bi-trash-fill"></i></button>
                    </td>
                </tr>
            </table>
        </div>
    </div>
</section>

<?= $this->endSection();
