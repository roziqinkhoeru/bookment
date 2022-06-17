<?= $this->extend('templates/userTemplates') ?>

<?= $this->section('content') ?>

<div class="container">
    <div class="card m-5">
        <div class="card-header">
            <div class="row">
                <div class="col">Books Data</div>
                <div class="col text-end">
                    <a href="#" class="btn btn-success btn-sm">Add</a>
                </div>
            </div>
        </div>
        <div class="card-body">
            <table class="table table-striped">
                <tr>
                    <th>ISBN</th>
                    <th>Author</th>
                    <th>Title</th>
                    <th>Price</th>
                    <th>Edit</th>
                    <th>Delete</th>
                </tr>
                <tr>
                    <td>1</td>
                    <td>Ismail</td>
                    <td>Buku ismail</td>
                    <td>100000</td>
                    <td><a href="#" class="btn btn-sm btn-warning">Edit</a></td>
                    <td><button type="button" onclick="" class="btn btn-danger btn-sm">Delete</button></td>
                </tr>
            </table>
        </div>
    </div>
</div>

<?= $this->endSection();
