<div class="container videoslacture">
    <div class="navbar alert alert-light">
        <h2>Videos ></h2>
        <button id="uploadvideo" class=" p-2 border rounded" rel="noopener noreferrer">Upload Video</button>
    </div>

    <!-- video model start from here -->

    <div id="uploadVideoModel" class=" container">
        <div class="alert alert-light m-4">
            <h4>Upload Video</h4>
        </div>
        <form id="videoUpload" action="<?=ROOT?>videolacture/save" method="POST" enctype="multipart/form-data">
            <div class="m-4">
                <label for="category">Save to :</label>
                <select class="form-control" name="folder_id[]" id="category" multiple>
                    <?php
                    foreach($folder_data as $fldr){ ?>
                    <option value="<?=$fldr['id']?>"><?=$fldr['folder_name']?></option>
                    <?php } ?>
                </select>
            </div>
            <div class="m-4">
                <label for="title">Video Title:</label>
                <input class="form-control" type="text" name="title" placeholder="Video Title">
            </div>
            <div class="videos d-flex m-4">

                <div>
                    <label for="vdo">Upload Video:</label>
                    <input id="file" class="form-control" type="file" name="file" accept="video/*">
                </div>
                <div class="m-auto">
                    <button class="btn btn-light" type="button" id="upload-btn">Upload a Video</button>
                </div>

            </div>
            <div class="m-4" style="display:">
                <progress id="progress-bar" value="0" max="100"></progress><br>
                <label for="progress-bar">0%</label>
            </div>
            <div class="thumbnail-area d-flex">
                <div class="m-4">
                    <label for="thumbnail">Video Thumbnail:</label>
                    <input class="form-control" type="file" name="thumbnail" accept="image/*">
                </div>
                <div class="m-4 w-50">

                </div>
            </div>
            <div class="m-4 d-flex">
                <button id="videoPostSubmitBtn" class="btn btn-primary m-1">Upload</button>
                <button type="button" id="videoModelClose" class="btn btn-danger m-1">Close </button>
            </div>
        </form>
    </div>
    <!-- video model end here -->


    <!-- pagination table start here -->

    <div class="container">
        <h2>Select Number Of Rows</h2>
        <div class="form-group">
            <!--		Show Numbers Of Rows 		-->
            <select class="form-control" name="state" id="maxRows">
                <option value="5000">Show ALL Rows</option>
                <option value="5">5</option>
                <option value="10">10</option>
                <option value="15">15</option>
                <option value="20">20</option>
                <option value="50">50</option>
                <option value="70">70</option>
                <option value="100">100</option>
            </select>

        </div>

        <table style="text-align:center; padding:20px" class="table table-striped table-class" id="table-id">

            <thead>
                <tr>
                    <th>Video</th>
                    <th>Title</th>
                    <th>Size</th>
                    <th>Duration</th>
                    <th>Uploaded at</th>
                    <th>Actions</th>
                </tr>

            </thead>

            <tbody>
                <?php
                foreach($folder_videos as $info)
                {
            ?>
                <tr>
                    <th><img width="100" src="<?=ROOT?>/public/images/thumbnails/<?=$info['thumbnail']?>" alt=""></th>
                    <th><?=$info['title']?></th>
                    <th>55.5MB</th>
                    <th>6:00 Minutes</th>
                    <th>23/05/2024 4:00am</th>
                    <th>
                        <div class="d-flex">
                            <a class="btn btn-light m-1" href="<?=ROOT?>/Videoplay/play/<?=$info['id']?>">Watch</a>
                            <a class="btn btn-light m-1" href="">Edit Info</a>
                            <form id="deleteForm">
                                <!-- <input type="hidden" name="id" value=""> -->
                                <button class="video_delete_button btn btn-danger m-1"
                                    data-id="<?=$info['id']?>">Delete</button>
                            </form>
                            <?php 
                                if($info['status']==0)
                                {
                            ?>
                            <button class="btn btn-warning m-1"
                                onclick="statusChange(<?=$info['id']?>,'videolacture/statusChange',this)">Enable</button>
                            <?php
                        }else{

                        ?>
                            <button class="btn btn-light m-1"
                                onclick="statusChange(<?=$info['id']?>,'videolacture/statusChange',this)">Disable</button>
                            <?php

                        }

                        ?>

                        </div>
                    </th>
                </tr>
                <?php } ?>
            </tbody>
        </table>
        <!--		Start Pagination -->
        <div class='pagination-container'>
            <nav>
                <ul class="pagination">

                    <li data-page="prev">
                        <span class="p-2 border m-1">
                            < <span class="sr-only">Prev
                        </span></span>
                    </li>
                    <!--	Here the JS Function Will Add the Rows -->
                    <li data-page="next" id="prev">
                        <span class="p-2 border"> > <span class="sr-only">Next</span></span>
                    </li>
                </ul>
            </nav>
        </div>

    </div> <!-- 		End of Container -->

















</div>