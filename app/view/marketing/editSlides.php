<div class="container">
        <div class="navbar m-4">
            <h3>Add Slides</h3>
        </div>
        <form action="<?=ROOT?>slides/update/<?=$info['id']?>" method="POST" enctype="multipart/form-data">
        <div class="m-4">
            <label for="title">Title:</label>
            <input type="text" class="form-control" name="title" value="<?=$info['title']?>" required>
        </div>
        <div class="m-4">            
            <label for="thumbnail">Slide Image:</label>
            <input id="oldImageName" type="hidden" name="oldImageName" value="<?=$info['slide_image']?>">
            <input type="file" onchange="return showImage(this,'slide_image')" class="form-control" name="slide_image">
        </div>
        <div class="m-4 border">
            <div>
                <img id="slide_image" class="p-1" width="100" src="<?=ROOT?>public/images/slides/<?=$info['slide_image']?>" alt=""></div>
            <div>
            <button onclick="remove('oldImageName','slide_image',this)" type="button" onclick class="button btn-dark m-1 m-0">Delete</button>
            </div>
        </div>
        <div class="m-4">
            <label for="sorting_order">Sorting Order:</label>
            <input type="number"  class="form-control" name="sorting_order" min="0" max="10" value="<?=$info['sorting_order']?>" required>
        </div>
            <div class="m-4">
            <button class="button btn-success">Submit</button>
            
            </div>
        </form>
    </div>