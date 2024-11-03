<!-- Slideshow container -->
<div class="pdfs w-100 m-2">
<?php
// echo "<pre>";
// print_r($_SESSION);
?>
    <!-- time table model start -->
    <div id="pdfviewmodel">
        <div class="button">
            <button onclick="modelClose('pdfviewmodel')" class="btn btn-danger">Close</button>
        </div>
        <object id="pdfobject" class="m-1" style="width: 100%;
        aspect-ratio: 4 / 3;" data="<?=ROOT?>public/docs/timetable/<?=$_SESSION['pdfview'][0]['file']?>"
            width="640" height="500">
        </object>
    </div>
    <div class="sliderForm" id="uploadtimetablesModel">
        <div class="navbar navbar-light m-4 mb-0">
            <h3>Add Time Table</h3>
        </div>
        <div>
            <div class="row m-2">
                <form action="<?=ROOT?>pdf/save" method="POST" enctype="multipart/form-data">
                    <div class="col-sm-12 col-lg-12 m-2">
                        <label for="Category">Category:</label>
                        <select class="form-control" name="category" id="cat">
                            <option value="">--Select One--</option>
                            <option value="T">Time Table</option>
                            <option value="D">Docs</option>
                            <option value="R">Results</option>
                        </select>
                    </div>
                    <div class="col-sm-12 col-lg-12 m-2">
                        <label for="title">Title:</label>
                        <input type="text" class="form-control" id="title" name="title">
                    </div>
                    <div class="border rounded col-sm-12 col-lg-12 m-2 p-2">
                        <label for="file">Upload file:</label>
                        <input type="file" class="form-control" id="file" name="file">
                        <button type="button" id="upload-btn" class="btn btn-info mt-1">Upload file</button>
                        <div class="m-4 " id="dprog" style="display:none">
                            <progress id="progress-bar" value="0" max="100"></progress><br>
                            <label for="progress-bar">0%</label>
                        </div>
                    </div>
                    <div class="col-sm-12 col-lg-12 m-2 d-flex">
                        <button id="videoPostSubmitBtn" class="btn btn-primary">Submit</button>
                        <button type="button" onclick="modelClose('uploadtimetablesModel')"
                            class="btn btn-danger">Close</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- time table model end -->
    <button onclick="model('uploadtimetablesModel')" class="btn btn-primary m-1">Upload Files</button>

    <div class="alert alert-danger d-none"></div>
    <div class="pdfBtn" style="text-align:center">
        <span class="dot" onclick="currentSlide(1)"> Time Table</span>
        <span class="dot" onclick="currentSlide(2)">Docs</span>
        <span class="dot" onclick="currentSlide(3)">Results</span>
        <!-- <span class="dot" onclick="currentSlide(2)"></span>
    <span class="dot" onclick="currentSlide(3)"></span> -->
    </div>

    <div class="slideshow-container">

        <!-- Full-width images with number and caption text -->
        <div class="mySlides">
            <!--  -->

            <table class="table text-center">
                <thead>
                    <tr>
                        <th>S.no.</th>
                        <th>Icon</th>
                        <th>Title</th>
                        <th>Type</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        foreach($data as $info)
                        {
                    ?>
                    <tr>
                        <td><?=$info['id']?></td>
                        <td><img class="icon" src="public/images/icon/pdf.png"></td>
                        <td><?=$info['title']?></td>
                        <td><?php $arr =  explode('.',$info['file']);
                                    echo strtoupper($arr[ array_key_last($arr)]);
                            ?>
                        </td>
                        <td>
                            <button onclick="model('pdfviewmodel',<?=$info['id']?>,'pdf/xyz')" class="btn btn-light">View</button>
                            <button class="btn btn-success">Edit</button>
                            <button onclick="Deleted(<?=$info['id']?>,'pdf')" class="btn btn-danger">Delete</button>
                            <?php 
                                if($info['status']==0)
                                {
                            ?>
                            <button class="btn btn-warning"
                                onclick="statusChange(<?=$info['id']?>,'pdf/statusChange',this)">Enable</button>
                            <?php
                                } else {
                            ?>
                            <button class="btn btn-light"
                                onclick="statusChange(<?=$info['id']?>,'pdf/statusChange',this)">Disable</button>
                            <?php
                               }
                                ?>
                        </td>
                    </tr>
                    <?php 
                    } 
                    ?>
                </tbody>
            </table>
        </div>

        <div class="mySlides">
            <table class="table table-success text-center">
                <thead>
                    <tr>
                        <th>S.no.</th>
                        <th>Icon</th>
                        <th>Title</th>
                        <th>Type</th>

                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        foreach($docs_data as $info)
                        {
                    ?>
                    <tr>
                        <td><?=$info['id']?></td>
                        <td><img class="icon" src="public/images/icon/pdf.png"></td>
                        <td><?=$info['title']?></td>
                        <td><?php $arr =  explode('.',$info['file']);
                                    echo strtoupper($arr[ array_key_last($arr)]);
                            ?>
                        </td>
                        <td>
                            <button class="btn btn-success">Edit</button>
                            <button onclick="Deleted(<?=$info['id']?>,'pdf')" class="btn btn-danger">Delete</button>
                        </td>
                    </tr>
                    <?php 
                    } 
                    ?>
                </tbody>
            </table>
        </div>

        <div class="mySlides">
            <table class="table table-striped text-center">
                <thead>
                    <tr>
                        <th>S.no.</th>
                        <th>Icon</th>
                        <th>Title</th>
                        <th>Type</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                foreach($res_data as $info)
                        {
                    ?>
                    <tr>
                        <td><?=$info['id']?></td>
                        <td><img class="icon" src="public/images/icon/pdf.png"></td>
                        <td><?=$info['title']?></td>
                        <td><?php $arr =  explode('.',$info['file']);
                                    echo strtoupper($arr[ array_key_last($arr)]);
                            ?>
                        </td>
                        <td>
                            <button class="btn btn-success">Edit</button>
                            <button onclick="Deleted(<?=$info['id']?>,'pdf')" class="btn btn-danger">Delete</button>
                        </td>
                    </tr>
                    <?php 
                    } 
                    ?>

                </tbody>
            </table>
        </div>

        <!-- Next and previous buttons -->
        <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
        <a class="next" onclick="plusSlides(1)">&#10095;</a>
    </div>
    <br>

    <!-- The dots/circles -->
</div>