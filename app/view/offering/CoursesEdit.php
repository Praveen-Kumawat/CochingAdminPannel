<div class="container m-1">
    <div class="alert alert-primary"><h3>Offering > Digital Products > Edit       </h3></div>
<form action="<?=ROOT?>digitalProducts/update/<?=$data['id']?>" method="POST" enctype="multipart/form-data">
                    <div class="modal-body">
                        <div class="row m-2">
                            <div class="col-sm-12 col-lg-6">
                                <label for="course">Course Name:</label>
                                <input type="text" class="form-control" placeholder="Course Name" name="course" value="<?=$data['course']?>">
                            </div>
                            <div class="col-sm-12 col-lg-6">
                                <label for="selling_price">Selling Price:</label>
                                <input type="text" class="form-control" placeholder="Selling Price" name="selling_price" value="<?=$data['selling_price']?>">
                            </div>
                        </div>
                        <div class="row m-2">
                            <div class="col-sm-12 col-lg-6">
                                <label for="author">M.R.P:</label>
                                <input type="text" class="form-control" name="mrp" placeholder="M.R.P." value="<?=$data['mrp']?>">
                            </div>
                            <div class="col-sm-12 col-lg-6">
                                <label for="start_date">Start Date:</label>
                                <input type="date" class="form-control" name="start_date" value="<?=$data['start_date']?>">
                            </div>
                        </div>
                        <div class="row m-2">
                            <div class="col-sm-12 col-lg-6">
                            <label for="end_date">End Date:</label>
                                <input type="date" class="form-control" name="end_date" value="<?=$data['end_date']?>">
                                </div>
                            </div>
                            <!-- <div class="col-sm-12 col-lg-6">
                            <img style="width:400px;height:200px" src="<?=ROOT?>public/images/courses/<?=$data['course_image']?>" alt="">
                            </div> -->
                            
                        <div class="row m-2">
                            <div class="col-sm-12 col-lg-12">
                                <img id="courseThumbnailimg" class="CourseImage image_frame m-2" style="width:-fill-web-kit-available; height:18vh" src="<?=ROOT?>public/images/courses/<?=$data['course_image']?>" alt="">
                                <!-- <img onclick="deleteFile('<?=$data['course_image']?>')" class="icon CourseImage mt-5" src="<?=ROOT?>public/images/icon/trash.png" alt=""> -->
                                <button onclick="remove('courseOldImage','courseThumbnailimg',this)" style="width:50; height:auto;font-size:10px;" type="button" class="btn btn-warning">Remove Image</button>

                                <br>
                                <br>
                                <label for="poster">Upload Image:</label>
                                <input id="courseOldImage" type="hidden" name="oldImageName" value="<?=$data['course_image']?>">
                                <input onchange="return showImage(this,'courseThumbnailimg')" id="course_image" type="file" class="form-control" name="course_image" value="">
                                
                            </div>

                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Save changes</button>
                    </div>
                </form>
</div>