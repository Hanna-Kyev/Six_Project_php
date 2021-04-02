<div class="col">
    <div class="card">
        <div class="card-header">
            <strong class="card-title"><span data-feather="file-text"></span><?= $title; ?></strong>
            <a href="/admin/categories" class="btn 
            btn-info text-right float-right"><span data-feather="arrow-left-circle"></span>Go back</a>
        </div>
        <div class="card-body">
            <form method="POST" class="form-horizontal">
                <div class="form-group">
                    <label for="name">
                        <h2>Category will be deleted! Are you sure?</h2>
                    </label>

                </div>
                <div class="form-group">
                    <button type="submit" name="submit" class="btn btn-danger">Delete Category</button>
                    <button name="reset" class="btn btn-info">Cancel</button>
                </div>

            </form>
        </div>
    </div>
</div>