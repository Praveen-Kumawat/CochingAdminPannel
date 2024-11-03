<?php
class Courses extends Model{
    
    public function hasOne()
    {
        $sql = "select *from category join courses where courses.cat_id=category.id";
        return $this->runSql($sql);
    }

}

?>