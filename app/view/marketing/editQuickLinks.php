<div class="container">
        <div class="navbar navbar-light m-4"><h3>Add Link</h3></div>
        <form name="linkform" action="<?=ROOT?>quicklinks/update/<?=$linkinfo['id']?>" method="POST" enctype="multipart/form-data">
        <div class="m-4">
            <label for="title">Title</label>
            <input type="text" class="form-control" name="title" value="<?=$linkinfo['title']?>" required>
        </div>
        <div class="m-4">
            <label for="link">Link:</label>
            <input type="text" class="form-control" placeholder="Ex. https://www.example.com/" name="link" value="<?=$linkinfo['link']?>" required>
        </div>
        <div class="m-4">
            <label for="thumbnail">Thumbnail:</label>
            <input onchange="return showImage(this,'linkthumbnailimage')" id="quickLinkImage" type="file" class="form-control" name="thumbnail">
            <input id="linkOldImageName" type="hidden" name="oldImageName" value="<?=$linkinfo['thumbnail']?>">
        <div class="mt-2 p-2 border rounded">
            <img class="border" id="linkthumbnailimage" width="200" src="<?=ROOT?>public/images/thumbnails/quicklinks/<?=$linkinfo['thumbnail']?>" alt="">
            <button id="linkImageRemoveBtn" onclick="remove('linkOldImageName','linkthumbnailimage',this)" type="button" class="button btn-primary">Delete</button>
        </div>
            
        </div>
            <div class="m-4">
            <button class="btn btn-success">Add Link</button>
            
            </div>
        </form>
    </div>