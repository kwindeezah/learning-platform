<?php
include_once('controller/CourseController.php');
include('views/layout/header.php');
?>

    <p>
        <?php
        $getCourses = new CourseController();
        // $courses->getCoursesName();
        ?>
    </p>
<div class="container">
   <div class="card-deck">
        <div class="card text-center">
           <div class="card" style="width: 18rem;">
            <?php
            $getCourse = $getCourses->getCourses();
            if (isset($getCourse['data']) && is_array($getCourse['data'])):
                foreach ($getCourse['data'] as $item):
            ?>
        <img src="<?=$image = $item['Image'];?>" class="card-img-top" alt="...">
        <div class="card-body flex-row m-10">
            <h5 class="card-title"><?= $name = $item['Name']; ?></h5>
            <p class="card-text">Some Description</p>
            <a href="<?=$path = $item['Path'][0];?>" class="">Go to course</a>
        </div>
            <?php
            endforeach;
            endif;
            ?>
         </div>
        </div>
    </div>
</div>

<?php
include('views/layout/footer.php');
?>