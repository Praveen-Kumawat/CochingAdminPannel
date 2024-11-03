<div class="container m-5">
    <form action="" method="post">
        <div class="m-1">
            <label for="admin">Admin</label>
            <input class="form-control" type="text" name="admin" id="admin" value="<?=$adminData[0]['name']?>">
            <label for="pwd">Password</label>
            <input class="form-control" type="text" name="password" id="pwd" value="<?=$adminData[0]['password']?>">
        </div>
        <div class="m-1">
        <button class="btn btn-primary ">Reset</button>

        </div>
    </form>
</div>