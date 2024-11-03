let path = "http://localhost/mycoaching/public/images/thumbnails/quicklinks/";
// let linkthumbnailimage = document.getElementById("linkthumbnailimage");
// let linkImageRemoveBtn = document.getElementById("linkImageRemoveBtn");
// let linkOldImageName = document.getElementById("linkOldImageName");
// let quickLinkImage = document.getElementById("quickLinkImage");
function remove(oldImageName,thumbnailImage, imageRemoveBtn) {
  let linkOldImageName = document.getElementById(oldImageName);
  let linkthumbnailimage = document.getElementById(thumbnailImage);
  let linkImageRemoveBtn = document.getElementById(imageRemoveBtn);

  console.log((linkthumbnailimage.src = path + "noimage.jpg"));
  console.log((linkOldImageName.value = path + "noimage.jpg"));
  linkImageRemoveBtn.style = "display:none";
}

function showImage(ele, eleId) {
  let img = document.getElementById(eleId);
  if (ele.files) {
    let reader = new FileReader();
    reader.readAsDataURL(ele.files[0]);
    reader.onload = (e) => {
      img.src = e.target.result;
    };
  }
}
