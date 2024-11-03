<div class="container common">
    <div class="navbar navbar-light">
        <h3>Quick Links</h3>
        <button class="btn btn-light" id="uploadlinks">Add Link</button>
    </div>
    <div class="sliderForm" id="uploadLinksModel">
        <div class="navbar navbar-light m-4"><h3>Add Link</h3></div>
        <form action="<?=ROOT?>quicklinks/save" method="POST" enctype="multipart/form-data">
        <div class="m-4">
            <label for="title">Title</label>
            <input type="text" class="form-control" name="title" required>
        </div>
        <div class="m-4">
            <label for="link">Link:</label>
            <input type="text" class="form-control" placeholder="Ex. https://www.example.com/" name="link" required>
        </div>
        <div class="m-4">
            <label for="thumbnail">Thumbnail:</label>
            <input type="file" class="form-control" name="thumbnail" required>
        </div>
            <div class="m-4">
            <button class="btn btn-success">Add Link</button>
            <button type="button" id="linksModelClose" class="btn btn-danger">Close</button>
            </div>
        </form>
    </div>


    <table class="table table-bordered" style="text-align:center; align-item:center">
                <thead>
                    <tr>
                    <th>S.no.</th>
                    <th>Title</th>
                    <th>Thumbnail</th>
                    <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    if($links){
                    foreach($links as $link)
                    {
                    ?>
                    <tr>
                        <td><?=$link['id']?></td>
                        <td><?=$link['title']?></td>
                        <td><img width="100" src="<?=ROOT?>public/images/thumbnails/quicklinks/<?=$link['thumbnail']?>" alt=""></td>
                        <td class="d-flex" style="justify-content:center">
                            <a  class="button btn btn-primary m-2" href="<?=$link['link']?>">Go to</a>
                            <a class="button btn btn-success m-2" href="<?=ROOT?>quicklinks/edit/<?=$link['id']?>">Edit</a>
                            <form id="linkDeleteForm">
                                <button id="link_delete" onclick="Deleted('<?=$link['id']?>','quicklinks')" class="button course_delete_button btn btn-danger m-2" data-id="">Delete</button>
                            </form>
                        </td>
                    </tr>
                    <?php } 
                }else{
                    ?>
                    <tr>
                        <td colspan="4">
                    <div class="container elsePart">
                <div class="content">
                    <h2>No Links Available</h2>
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