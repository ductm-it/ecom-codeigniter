<div class="container">
    <div class="card">
        <div class="card-header">
            Create Brand
        </div>
        <div class="card-body">
            <form>
                <div class="form-group">
                    <label for="exampleInputEmail1">Title</label>
                    <input type="email" name="title" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Description</label>
                    <input type="password" name="description" class="form-control" id="exampleInputPassword1" placeholder="Password">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Image</label>
                    <input type="file" name="image" class="form-control-file" id="exampleInputPassword1">
                </div>
                <div class="form-group form-check">
                    <select class="custom-select custom-select-lg mb-3">
                        <option selected>Status</option>
                        <option value="1">Active</option>
                        <option value="0">Inactive</option>
                    </select>
                </div>
                <button type="submit" class="btn btn-primary">Add brand</button>
            </form>
        </div>
    </div>
</div>