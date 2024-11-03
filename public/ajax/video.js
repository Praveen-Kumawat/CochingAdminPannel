const file = document.getElementById("file");
const dprog = document.getElementById("dprog");
const btn = document.getElementById("upload-btn");
const progress = document.getElementById("progress-bar");
const videoPostSubmitBtn = document.getElementById("videoPostSubmitBtn");

btn.addEventListener("click", function () {
  /* Prepare payload */
  const userImg = file.files[0];
  const payload = new FormData();
  payload.append("user-image", userImg, "user-image.jpg");

  /* XHR POST request */
  const req = new XMLHttpRequest();
  req.open("POST", "http://localhost/mycoaching/videolacture/save");
  req.upload.addEventListener("progress", function (e) {
    const percentComplete = (e.loaded / e.total) * 100;
    progress.setAttribute("value", percentComplete);
    progress.nextElementSibling.nextElementSibling.innerText =
      Math.round(percentComplete) + "%";
    if (percentComplete == 100) {
      videoPostSubmitBtn.style.display = "block";
    }
  });

  req.addEventListener("load", function () {
    console.log(req.status);
    console.log(req.response);
  });

  req.send(payload);
});
