<div class="container mt-1">
    <div id="categoryModel" class="container">
        <h5 class="modal-title" id="exampleModalLabel">Add New Course</h5>
        <div class="modal-body">
            <div class="row m-2">
                <form action="<?=ROOT?>category/save">
                    <div class="col-sm-12 col-lg-12">
                        <label for="cat">Cetegory Name:</label>
                        <input type="text" class="form-control" id="cat" name="category">
                    </div>
                    <div class="col-sm-12 col-lg-12">
                        <label for="cat_des">Description:</label>
                        <textarea type="text" id="cat_des" name="description" class="form-control"></textarea>
                    </div>
                    <div class="col-sm-12 col-lg-12 mt-2">
                        <button type="button" class="btn btn-secondary" id="categoryModelClose">Close</button>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </form>
                <form action="<?=ROOT?>category">
                    <div class="mt-2">

                        <button class="btn btn-warning">See All Categories</button>

                    </div>
                </form>
            </div>
        </div>
    </div>
    <div class="navbar">
        <h1> All Categories</h1>
        <a class="btn btn-primary" id="uploadCategory">Create Category</a>
    </div>
    <div class="model border">
    </div>
    <div class="row m-1">
        <?php 
        foreach($data as $info)
        {
            ?>
        <div class="col-sm-12 col-md-1 col-lg-1 text-center">
            <button class="btn border"><?=$info['category']?></button>
            <button class="btn w-100 btn-close mt-1" onclick="Deleted(<?=$info['id']?>,'category')"></button>
        </div>
        <?php
        }
        ?>
    </div>
</div>