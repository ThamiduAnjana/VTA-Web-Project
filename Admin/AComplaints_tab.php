<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Complaints Data Table</h6>
    </div>
    <div class="card-body">
        <div class="col-lg-6 input-group mb-3">
            <div class="input-group-prepend">
                <button class="btn btn-outline-primary" type="button" id="button-addon1">Search</button>
            </div>
            <input type="text" class="form-control" placeholder="Enter Product Name / Date" aria-label="Example text with button addon" aria-describedby="button-addon1">
        </div>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Message of complaints</th>
                    <th scope="col">Actions</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="row">1</th>
                    <td>Otto</td>
                    <td>@mdo</td>
                    <td>@mdo</td>
                    <td>
                        <form>
                            <button type="submit" class="btn btn-danger" name="Dislike" id="Dislike">Dislike</button>
                            <button type="submit" class="btn btn-primary" name="Like" id="Like">Like</button>
                        </form>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
