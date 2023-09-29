<?php

Class CourseController {
    
    public function getCourses() {

        $getCourses = curl_init();// Initialize connection
        curl_setopt($getCourses, CURLOPT_URL,'https://humanmanager.tangerinelms.com/www/api/v1/get_course_catalogue.php');
        curl_setopt($getCourses, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($getCourses, CURLOPT_HEADER, 0);

        $response = curl_exec($getCourses);
        $result = json_decode($response, true);

        curl_close($getCourses); // Close the connection

        return $result;
        // die();
    }

    // public function getCoursesName() {
    //     $courses = $this->getCourses();

    //     // for($index=0; $index<=count($courses); $index++) {
    //     //     var_dump($index);
    //     //     die();

    //     //     $coursesName = $courses[$index]['Name'];
    //     // }
    //    $coursesName = $courses;
    //     // die();

    //     // var_dump($coursesName);
    //     // die();
    //     return $coursesName;
    // }
}
?>
