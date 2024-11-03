<div class="container">
    <div class="row">
        <?php
           $row = count($a);
           if($row != 0)
                    {
                foreach($a as $info)
                {
                    
                ?>
        <div class="col-sm-12 col-md-6 col-lg-2 m-3 border">
            <div class="image_frame">
                <img class="course_image" src="<?=ROOT?>public/images/courses/<?=$info['course_image']?>" alt="">
            </div>
            <div class="course_content">
                <h6><b>Course Name:</b>&nbsp <?=$info['course']?></h6>
                <h6><b>Selling Price:</b>&nbsp &#8377; <?=$info['selling_price']."/-"?></h6>
                <h6><b>M.R.P.:</b>&nbsp <?=$info['mrp']."/-"?></h6>
                <h6><b>Save:</b>&nbsp <?=(int)(100-(($info['selling_price']*100)/$info['mrp']))."%"?></h6>
                <?php
                            $start_date = strtotime($info['start_date']);
                            $end_date = strtotime($info['end_date']);
                            $diff = abs($start_date - $end_date);
                            $years = floor($diff / (365*60*60*24)); 
                            $months = floor(($diff - $years * 365*60*60*24)
                                 / (30*60*60*24)); 

                        ?>
                <h6><b>Course Duration:</b>&nbsp <?=$months." Months"?></h6>
                <h6><b>Published</b>&nbsp <?=strtoupper($info['publish'])?></h6>
            </div>
            <div class="book_action d-flex">
                <a class="btn btn-success button" href="<?=ROOT?>digitalProducts/edit/<?=$info['id']?>">Edit</a>
                <form id="deleteForm">
                    <!-- <input type="hidden" name="id" value=""> -->
                    <button class="button course_delete_button btn btn-danger"
                        data-id="<?=$info['id']?>">Delete</button>
                </form>
            </div>
        </div>
       

        <?php
                }
            }else{
                ?>
                <div class="container elsePart">
                <div class="content">
                    <h2>No Courses Available</h2>
                </div>
            </div>
         <?php
            }   
        ?>
    </div>
</div>