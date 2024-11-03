<div class="container-fluid">
    <nav class="navbar navbar-light bg-light">
        <div class="container-fluid">
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                Add New
            </button>
            <form class="d-flex">
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success" type="submit">Search</button>
            </form>
        </div>
    </nav>



    <!-- Button trigger modal -->


    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Add New Book</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form action="books/save" method="POST">
                <div class="modal-body">
                    <div class="row m-2">
                        <div class="col-sm-12 col-lg-6">
                            <label for="title">Book Title:</label>
                            <input type="text" class="form-control" placeholder="Book Title" name="book_title">
                        </div>
                        <div class="col-sm-12 col-lg-6">
                        <label for="price">Book price:</label>
                            <input type="text" class="form-control" placeholder="Book Price" name="book_price">
                        </div>
                    </div>
                    <div class="row m-2">
                        <div class="col-sm-12 col-lg-6">
                            <label for="author">Book Author:</label>
                            <input type="text" class="form-control" placeholder="Book Author" name="book_author">
                        </div>
                        <div class="col-sm-12 col-lg-6">
                            <label for="pages">Book Pages:</label>
                            <input type="text" class="form-control" placeholder="Book Pages" name="book_pages">
                        </div>
                    </div>
                    <div class="row m-2">
                        <div class="col-sm-12 col-lg-6">
                            <label for="year">Book Year</label>
                            <input type="text" class="form-control" placeholder="Book Year" name="book_year">
                        </div>
                        <div class="col-sm-12 col-lg-6">
                            <label for="edition">Book Edition</label>
                            <input type="text" class="form-control" placeholder="Book Price" name="book_edition">
                        </div>
                    </div>
                    <div class="row m-2">
                        <div class="col-sm-12 col-lg-12">
                            <input type="file" class="form-control" name="book_image">
                        </div>

                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Save changes</button>
                </div>
                </form>
            </div>
        </div>
    </div>



    <div class="books">
        <div class="row">
            <div class="col-sm-12 col-md-6 col-lg-2 m-3 border">
                <div class="image_frame">
                    <img id="books_image" src="public/images/books/SMBG.JPG" alt="">
                </div>
                <div class="book_content">
                    <h6><b>Title:</b>&nbsp Shree Mad Bhagwad Geeta Geeta Press Gorkhpur Edition 10th</h6>
                    <h6><b>Price:</b>&nbsp 250/-</h6>
                    <h6><b>Author:</b>&nbsp Bhagwaan Shree Krishana </h6>
                    <h6><b>Pages:</b>&nbsp 1100</h6>
                    <h6><b>Year:</b>&nbsp 2019</h6>
                    <h6><b>Edition:</b>&nbsp 10th</h6>
                </div>
                <div class="book_action d-flex">
                <button class="btn btn-success button">Edit</button>
                <button class="btn btn-danger button">Delete</button>
                </div>
            </div>
            <div class="col-sm-12 col-md-6 col-lg-2 m-3 border">
                <div class="image_frame">
                    <img id="books_image" src="public/images/books/SMBG.JPG" alt="">
                </div>
                <div class="book_content">
                    <h6><b>Title:</b>&nbsp Shree Mad Bhagwad Geeta Geeta Press Gorkhpur Edition 10th</h6>
                    <h6><b>Price:</b>&nbsp 250/-</h6>
                    <h6><b>Author:</b>&nbsp Bhagwaan Shree Krishana </h6>
                    <h6><b>Pages:</b>&nbsp 1100</h6>
                    <h6><b>Year:</b>&nbsp 2019</h6>
                    <h6><b>Edition:</b>&nbsp 10th</h6>
                </div>
                <div class="book_action d-flex">
                <button class="btn btn-success button">Edit</button>
                <button class="btn btn-danger button">Delete</button>
                </div>
            </div>
            <div class="col-sm-12 col-md-6 col-lg-2 m-3 border">
                <div class="image_frame">
                    <img id="books_image" src="public/images/books/SMBG.JPG" alt="">
                </div>
                <div class="book_content">
                    <h6><b>Title:</b>&nbsp Shree Mad Bhagwad Geeta Geeta Press Gorkhpur Edition 10th</h6>
                    <h6><b>Price:</b>&nbsp 250/-</h6>
                    <h6><b>Author:</b>&nbsp Bhagwaan Shree Krishana </h6>
                    <h6><b>Pages:</b>&nbsp 1100</h6>
                    <h6><b>Year:</b>&nbsp 2019</h6>
                    <h6><b>Edition:</b>&nbsp 10th</h6>
                </div>
                <div class="book_action d-flex">
                <button class="btn btn-success button">Edit</button>
                <button class="btn btn-danger button">Delete</button>
                </div>
            </div>
            <div class="col-sm-12 col-md-6 col-lg-2 m-3 border">
                <div class="image_frame">
                    <img id="books_image" src="public/images/books/SMBG.JPG" alt="">
                </div>
                <div class="book_content">
                    <h6><b>Title:</b>&nbsp Shree Mad Bhagwad Geeta Geeta Press Gorkhpur Edition 10th</h6>
                    <h6><b>Price:</b>&nbsp 250/-</h6>
                    <h6><b>Author:</b>&nbsp Bhagwaan Shree Krishana </h6>
                    <h6><b>Pages:</b>&nbsp 1100</h6>
                    <h6><b>Year:</b>&nbsp 2019</h6>
                    <h6><b>Edition:</b>&nbsp 10th</h6>
                </div>
                <div class="book_action d-flex">
                <button class="btn btn-success button">Edit</button>
                <button class="btn btn-danger button">Delete</button>
                </div>
            </div>
            <div class="col-sm-12 col-md-6 col-lg-2 m-3 border">
                <div class="image_frame">
                    <img id="books_image" src="public/images/books/SMBG.JPG" alt="">
                </div>
                <div class="book_content">
                    <h6><b>Title:</b>&nbsp Shree Mad Bhagwad Geeta Geeta Press Gorkhpur Edition 10th</h6>
                    <h6><b>Price:</b>&nbsp 250/-</h6>
                    <h6><b>Author:</b>&nbsp Bhagwaan Shree Krishana </h6>
                    <h6><b>Pages:</b>&nbsp 1100</h6>
                    <h6><b>Year:</b>&nbsp 2019</h6>
                    <h6><b>Edition:</b>&nbsp 10th</h6>
                </div>
                <div class="book_action d-flex">
                <button class="btn btn-success button">Edit</button>
                <button class="btn btn-danger button">Delete</button>
                </div>
            </div>
        </div>

    </div>
</div>