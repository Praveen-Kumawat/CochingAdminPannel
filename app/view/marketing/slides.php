<div class="container">
    <div class="navbar">
        <h4>Slider ></h4>
        <button onclick="model('uploadslideModel')" class="button btn-success">Add Slides</button>
    </div>

    <!-- slides Form Model start -->

    <div class="sliderForm" id="uploadslideModel">
        <div class="navbar m-4">
            <h3>Add Slides</h3>
        </div>
        <form action="<?=ROOT?>slides/save" method="POST" enctype="multipart/form-data">
        <div class="m-4">
            <label for="title">Title:</label>
            <input type="text" class="form-control" name="title" required>
        </div>
        <div class="m-4">
            <label for="thumbnail">Slide Image:</label>
            <input type="file" class="form-control" name="slide_image" required>
        </div>
        <div class="m-4">
            <label for="sorting_order">Sorting Order:</label>
            <input type="number" class="form-control" name="sorting_order" min="0" max="10" required>
        </div>
            <div class="m-4">
            <button class="button btn-success">Submit</button>
            <button onclick="modelClose('uploadslideModel')" type="button" id="slideModelClose" class="btn btn-danger">Close</button>
            </div>
        </form>
    </div>





    <!-- slides Form Model end -->









    <table class="table table-bordered text-center ">
        <thead>
            <tr>
            <th>S.no.</th>
            <th>Slides Image</th>
            <th>Slides Text</th>
            <th>Sorting Order</th>
            <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            <?php 
                if($data && isset($data))
                {
                foreach($data as $info)
                {
            ?>
            <tr>
                <th><?=$info['id']?></th>
                <th><img width="100" src="<?=ROOT?>/public/images/slides/<?=$info['slide_image']?>" alt=""></th>
                <th><p class="badge text-wrap text-dark text-sm-start text-md-start text-lg-start"><?=$info['title']?></p></th>
                <th><?=$info['sorting_order']?></th>
                <th>
                    <a class="btn btn-primary" href="<?=ROOT?>/slides/edit/<?=$info['id']?>">Edit</a>
                    <button onclick="Deleted('<?=$info['id']?>','slides')" class="btn btn-danger">Delete</button>
                </th>
            </tr>
            <?php
                }
            }else{
            ?>

                <tr>
                    <td colspan="5">
                    <div class="container elsePart">
                <div class="content">
                    <h2>Currently No Slides Added</h2>
                </div>
            </div>
                    </td>
                </tr>
<?php
            }
?>
        </tbody>
    </table>
</div>