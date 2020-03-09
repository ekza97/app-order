<?php
// session_start();
include ('../inc/koneksi.php');
// $msg = "";

// if (isset($_POST['restore'])) {
//     $filerestore = $_FILES['filerestore'];
//     $filename = '../backup/'.$filerestore;

//     $handle = fopen($filerestore,"r+");
//     $contents = fread($handle,filesize($filerestore));
//     $sql = explode(';',$contents);
//     foreach($sql as $query){
//         $result = mysqli_query($con,$query);
//         if($result){
//             echo '<tr><td><br></td></tr>';
//             echo '<tr><td>'.$query.' <b>SUCCESS</b></td></tr>';
//             echo '<tr><td><br></td></tr>';
//         }
//     }
//     fclose($handle);
//     echo 'Successfully imported';
// }

$filename = '../backup/cafe-backup@2018-11-06-03-26-55.sql';
$handle = fopen($filename,"r+");
    $contents = fread($handle,filesize($filename));
    $sql = explode(';',$contents);
    foreach($sql as $query){
        $result = mysqli_query($con,$query);
        if($result){
            echo '<tr><td><br></td></tr>';
            echo '<tr><td>'.$query.' <b>SUCCESS</b></td></tr>';
            echo '<tr><td><br></td></tr>';
        }
    }
    fclose($handle);
    echo 'Successfully imported'.$query;

?>