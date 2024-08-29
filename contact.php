<?php
include 'header.php';
?>
 <section class="my-5">
            <div class="py-5">
                <h2 class="text-center">Contact Me </h2>
            </div>
            <div class="w-50 m-auto">
                <form action="userinfo.php " method="post">
                    <div class="form-group">
                        <label for="">Username</label>
                        <input type="text" name="user" autocomplete="off" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="">Email</label>
                        <input type="email" name="email" autocomplete="off" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="">Mobile</label>
                        <input type="text" name="mobile" autocomplete="off" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="">Comment</label>
                        <textarea class="form-control"></textarea>
                    </div>
                    <button type="submit" class = "btn btn-primary my-5"> Submit</button>
                </form>
            </div>
        </section>
<?php
include 'footer.php';
?>