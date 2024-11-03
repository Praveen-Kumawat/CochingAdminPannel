<div class="container-fluid">
    <div class="alert alert-light d-flex courseHeader">
        <h2>Digital Products</h2>
        <div>
            <form class="d-flex">
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success" type="submit">Search</button>
            </form>
        </div>
        <div>
            <button type="button" class="btn btn-primary" id="uploadCourse">
                Create New Course
            </button>
            <a class="btn btn-primary" id="uploadCategory">Create Category</a>
        </div>

    </div>




    <!-- Button trigger modal -->


    <!-- Modal -->
    <div id="categoryModel" class="container">
        <h5 class="modal-title" id="exampleModalLabel">Add New Course</h5>
        <div class="modal-body">
            <div class="row m-2">
                <form action="<?=ROOT?>category/save" method="POST" enctype="multipart/form-data">
                    <div class="col-sm-12 col-lg-12">
                        <label for="cat">Cetegory Name:</label>
                        <input type="text" class="form-control" id="cat" name="category">
                    </div>
                    <div class="col-sm-12 col-lg-12">
                        <label for="cat_des">Description:</label>
                        <textarea type="text" id="cat_des" name="description" class="form-control"></textarea>
                    </div>
                    <div class="col-sm-12 col-lg-12">
                        <label for="thumb">Description:</label>
                        <input type="file" id="thumb" name="thumbnail" class="form-control">
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

    <div id="courseModel" class="container">

        <h5 class="modal-title" id="exampleModalLabel">Add New Course</h5>
        <!-- <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button> -->

        <div class="modal-body">
            <form action="digitalProducts/save" method="POST" enctype="multipart/form-data">
                <div class="row m-2">
                    <div class="col-sm-12 col-lg-12">
                        <label for="cat">Course Category:</label>
                        <select class="form-control" id="category" name="category[]" multiple>
                            <?php foreach($cat_data as $cat) { ?>
                            <option value="<?=$cat['id']?>"><?=$cat['category']?></option>
                            <?php } ?>
                        </select>
                    </div>
                    <div class="col-sm-12 col-lg-6">
                        <label for="course">Course Name:</label>
                        <input type="text" class="form-control" placeholder="Course Name" name="course">
                    </div>
                    <div class="col-sm-12 col-lg-6">
                        <label for="selling_price">Selling Price:</label>
                        <input type="text" class="form-control" placeholder="Selling Price" name="selling_price">
                    </div>
                </div>
                <div class="row m-2">
                    <div class="col-sm-12 col-lg-6">
                        <label for="author">M.R.P:</label>
                        <input type="text" class="form-control" name="mrp" placeholder="M.R.P.">
                    </div>
                    <div class="col-sm-12 col-lg-6">
                        <label for="start_date">Start Date:</label>
                        <input type="date" class="form-control" name="start_date">
                    </div>
                </div>
                <div class="row m-2">

                    <div class="col-sm-12 col-lg-6">
                        <label for="end_date">End Date:</label>
                        <input type="date" class="form-control" name="end_date">
                    </div>
                </div>

                <div class="row m-2">
                    <div class="col-sm-12 col-lg-12">
                        <img id-="c_image" width="100" src="" alt="">
                        <label for="poster">Upload Image:</label>
                        <input id="course_image" type="file" class="form-control" name="course_image">
                    </div>
                </div>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" id="courseModelClose">Close</button>
            <button type="submit" class="btn btn-primary">Save changes</button>
            </form>
        </div>
    </div>








    <!-- <div  class="modal fade" id="exampleModal" tabindex="" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Add New Course</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form action="digitalProducts/save" method="POST" enctype="multipart/form-data">
                    <div class="modal-body">
                        <div class="row m-2">
                            <div class="col-sm-12 col-lg-6">
                                <label for="course">Course Name:</label>
                                <input type="text" class="form-control" placeholder="Course Name" name="course">
                            </div>
                            <div class="col-sm-12 col-lg-6">
                                <label for="selling_price">Selling Price:</label>
                                <input type="text" class="form-control" placeholder="Selling Price"
                                    name="selling_price">
                            </div>
                        </div>
                        <div class="row m-2">
                            <div class="col-sm-12 col-lg-6">
                                <label for="author">M.R.P:</label>
                                <input type="text" class="form-control" name="mrp" placeholder="M.R.P.">
                            </div>
                            <div class="col-sm-12 col-lg-6">
                                <label for="start_date">Start Date:</label>
                                <input type="date" class="form-control" name="start_date">
                            </div>
                        </div>
                        <div class="row m-2">
                            
                            <div class="col-sm-12 col-lg-6">
                                <label for="end_date">End Date:</label>
                                <input type="date" class="form-control" name="end_date">
                            </div>
                        </div>

                        <div class="row m-2">
                            <div class="col-sm-12 col-lg-12">
                                <img id-="c_image" width="100" src="" alt="">
                                <label for="poster">Upload Image:</label>
                                <input id="course_image" type="file" class="form-control" name="course_image">
                            </div>
                            <div class="col-sm-12 col-lg-12">
                                <label for="cat">Course Category:</label>
                                <select class="form-control" id="category" name="category[]" multiple>
                                    <option value="1">This is One</option>
                                    <option value="1">This is Two</option>
                                    <option value="1">This is Three</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Save changes</button>
                    </div>
                </form>
            </div>
        </div>
    </div> -->


    <div id="deleteMsg" class="alert alert-danger"></div>
    <!-- <select name="category" id="category" class="form-control" multiple>
        <option value="10">Course1</option>
        <option value="20">Course2</option>
        <option value="30">Course3</option>
        <option value="40">Course4</option>
    </select> -->
    <div class="courses">
        <div class="row">

            <?php
        $row = count($course_data[0]??[]);
        if($row != 0){
        foreach($cat_data as $k=> $info){ ?>
            <div class="col-sm-12 col-md-6 col-lg-2 m-3 border">
                <div class="image_frame">
                    <img class="course_image" src="<?=ROOT?>public/images/thumbnails/<?=$info['thumbnail']?>" alt="">
                </div>
                <div class="course_content" style="text-align:center">
                    <h5><b>Category:</b> <?=$info['category']?></h5>
                    <p id="seemore"><b>Description: </b><span><?=$info['description']?></span></p>
                    <div class="d-flex">
                        <a href="digitalproducts/showCourse/<?=$info['id']?>" class="btn btn-primary w-100 m-1">View</a>
                        <a class="btn btn-success w-100 m-1" href="<?=ROOT?>category/edit/<?=$info['id']?>">Edit</a>
                            <!-- <input type="hidden" name="id" value=""> -->
                            <button onclick="Deleted(<?=$info['id']?>,'category')" class="w-100 m-1 course_delete_button btn btn-danger"
                                >Delete</button>
                    
                    </div>
                </div>
            </div>
            <?php }
                }else{
                    ?>

            <div class="container elsePart">
                <div class="content">
                    <h2>No Courses Available</h2>
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                        Create New Course
                    </button>
                </div>
            </div>
            <?php
                }
            ?>
            <!-- <div class="col-sm-12 col-md-6 col-lg-2 m-3 border">
                <div class="image_frame">
                    <img class="course_image" src="public/images/courses/poster2.JPG" alt="">
                </div>
                <div class="course_content">
                    <h6><b>Course Name:</b>&nbsp 6 Months Coumputer Course: tally/RSCIT/GST</h6>
                    <h6><b>Selling Price:</b>&nbsp 250/-</h6>
                    <h6><b>M.R.P.:</b>&nbsp 1000/-</h6>
                    <h6><b>Save:</b>&nbsp 75%</h6>
                    <h6><b>Course Duration:</b>&nbsp 6 Months</h6>
                    <h6><b>Published At</b>&nbsp 16 May 2024</h6>
                </div>
                <div class="book_action d-flex">
                    <button class="btn btn-success button">Edit</button>
                    <button class="btn btn-danger button">Delete</button>
                </div>
            </div> -->

        </div>
    </div>

</div>
</div>