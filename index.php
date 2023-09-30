<?php
include_once('controller/CourseController.php');
include('views/layout/header.php');
?>

    <p>
        <?php
        $getCourses = new CourseController();
        ?>
    </p>

  <div class="container">
    <div class="row">
        <?php
            $getCourse = $getCourses->getCourses();
            if (isset($getCourse['data']) && is_array($getCourse['data'])):
                foreach ($getCourse['data'] as $item):
        ?>
      <div class="col-md-3">
        <a href="<?=$path = $item['Path'][0];?>" class="card mb-4 text-center">
            <div class="card-body">
              <img decoding="async"  src="<?=$image = $item['Image'];?>" class="img-fluid d-block mx-auto pt-4" width="75px" alt="...">
              <h5 class="card-title pb-0 mb-0"><?= $name = $item['Name']; ?></h5>
            </div>
        </a>
      </div>
      <?php
            endforeach;
          endif;
          ?>
    </div>
  </div>
<?php
include('views/layout/footer.php');
?>