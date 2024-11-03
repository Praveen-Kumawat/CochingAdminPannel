<header>
    <div class="header">
        <img id="menuicon" src="<?=ROOT?>public/images/icon/menu.png" alt="">
        <div class="logo">
            <img src="<?=ROOT?>public/images/logo/logo.png" alt="">
        </div>
        <div class="bname">
            <h4>MY COACHING</h4>
        </div>
        <div class="user">
            <a href="auth/destroy">Logout</a>
        </div>
    </div>
</header>
<div class="container-fluid d-flex">
    <div class="sidebar" id="sidebar">
        <h4 style="text-align:center">Manage Options</h4>
        <ul>
            <li><img src="<?=ROOT?>public/images/icon/dashboard.png" alt="" class="icon"><a
                    href="<?=ROOT?>dashboard">Dashboard</a></li>
            <li style="color:#000" id="marketing"><img class="icon" src="<?=ROOT?>public/images/icon/megaphone.png" alt="">Marketing<img id="downarrow1"
                    src="<?=ROOT?>public/images/icon/right.png" alt=""></li>
            <ul id="marketingUL" style="border-left:1px solid grey">
                <li><img src="<?=ROOT?>public/images/icon/link.png" alt="" class="icon"><a
                        href="<?=ROOT?>quicklinks">Quick Links</a></li>
                <li><img src="<?=ROOT?>public/images/icon/gallery.png" alt="" class="icon"><a href="<?=ROOT?>/slides">Slider</a></li>
            </ul>
            <li id="offring"> <img class="icon" src="<?=ROOT?>public/images/icon/offer.png" alt="">Offering <img
                    id="downarrow" src="<?=ROOT?>public/images/icon/right.png" alt=""></li>
            <ul id="offeringUL" style="border-left:1px solid grey">
                <li><img src="<?=ROOT?>public/images/icon/digital-product.png" alt="" class="icon"><a
                        href="<?=ROOT?>digitalProducts">Courses</a></li>
                <li><img src="<?=ROOT?>public/images/icon/pdf.png" alt="" class="icon"><a href="<?=ROOT?>pdf">PDFs</a></li>
                <li><img src="<?=ROOT?>public/images/icon/stack-of-books.png" alt="" class="icon"><a
                        href="<?=ROOT?>books">Books</a></li>
                <li><img src="<?=ROOT?>public/images/icon/handwritten.png" alt="" class="icon"><a href="">Handwriten
                        Notes</a></li>
                <li><img src="<?=ROOT?>public/images/icon/film.png" alt="" class="icon"><a
                        href="<?=ROOT?>videolacture/">Video Lacture</a></li>
            </ul>


            <li style="color:#000" id="reporting"><img class="icon" src="<?=ROOT?>public/images/icon/document.png" alt="">Reporting<img id="downarrow2"
                    src="<?=ROOT?>public/images/icon/right.png" alt=""></li>
            <ul id="reportingUL" style="border-left:1px solid grey">
                <li><img src="<?=ROOT?>public/images/icon/people.png" alt="" class="icon"><a
                        href="<?=ROOT?>users">Users</a></li>
                <li><img src="<?=ROOT?>public/images/icon/shopping-cart.png" alt="" class="icon"><a href="<?=ROOT?>/purchases">Purchases</a></li>
            </ul>




            <li><img class="icon" src="<?=ROOT?>public/images/icon/laptop.png" alt=""><a href="">Messages</a></li>
            <li><img src="<?=ROOT?>public/images/icon/request.png" alt="" class="icon"><a href="">Requests</a></li>
            <li><img src="<?=ROOT?>public/images/icon/block-user.png" alt="" class="icon"><a href="">Bloked Users</a>
            </li>
            <li><img src="<?=ROOT?>public/images/icon/cogwheel.png" alt="" class="icon"><a
                    href="<?=ROOT?>setting">Settings</a></li>
        </ul>
    </div>