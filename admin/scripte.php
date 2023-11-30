<?php
require_once "../connection.php";
if(isset($_POST['register_submit'])){
    extract($_POST);
    $sql_search = "SELECT * FROM users WHERE email='$email'";
    if($conn->query($sql_search)->num_rows > 0){
        $_SESSION["message_error"]= "This Email adddress Alredy Exist!";
        header('location: register.php');
    }else{
        $pass_hash=MD5($password);
        $sql_insert = "INSERT INTO users SET username='$name', role='etudiants', passwordHash='$pass_hash', email='$email'";
        $res=$conn->query($sql_insert);
        if($res){
            header('location: login.php'); 
        }
    }
    
}
if(isset($_POST["login_submit"])){
    extract($_POST);
    $pass_hash=MD5($password);
    $sql_search = "SELECT * FROM users WHERE email='$email' AND passwordHash='$pass_hash'";
    $res=$conn->query($sql_search);
    if($res){
        $user=$res->fetch_assoc();
        $_SESSION['roleUser']=$user['role'];
        $_SESSION['id_user']=$user['userID'];
        if($user['role']=="etudiants"){
            header('location:../user/index.php'); 
        }
        if($user['role']=="admin"){
            header('location: index.php'); 
        } 

    }
}
if(isset($_GET["log_out"])){
    session_destroy();
    header('location: ../user/index.php'); 
}
if(isset($_POST['addCours'])){
    extract($_POST);
    $add_cours = "INSERT INTO course SET CourseName='$cours', CourseDescription='$description'";
    $conn->query($add_cours);
    header("location: cours.php");
}
if(isset($_POST["updateCours"])){
    extract($_POST);
    $update_cours = "UPDATE course SET CourseName='$cours', CourseDescription='$description'WHERE CourseID = $idCours";
    $conn->query($update_cours);
    header("location: cours.php");
}
if(isset($_GET["supreme_cours_id"])){
    $id=$_GET["supreme_cours_id"];
    $delet_cours="DELETE FROM course WHERE CourseID = $id";
    $conn->query($delet_cours);
    header("location: cours.php");
}
if(isset($_POST['add_quiz_cours'])){
    extract($_POST);
    $sql = "INSERT INTO quiz SET quizName='$quiz_name', courseID = $id_cours, isComplete=0";
    $conn->query($sql);
    header("location: QuesRepo_detail.php?id_cours=$id_cours");
}
if(isset($_POST['add_quesion_cours'])){
    extract($_POST);
    $insert_Question = "INSERT INTO question SET quizID =$quize_id, questionText ='$question'";
    $conn->query($insert_Question);
    $question_id = $conn->insert_id;
    $isCorect = 0;
    for($i=0;$i<4;$i++){
        $anwser = $reponse[$i];
        if($i==$reponseVrai) $isCorect = 1;
        $insert_Answer = "INSERT INTO answer SET questionID=$question_id, answerText ='$anwser', IsCorrect = $isCorect";
        $conn->query($insert_Answer);
        $isCorect = 0;
    }
    header("location: QuesRepo_detail.php?id_cours=$id_cours");
}
if(isset($_POST["filter_quesion"])){
    extract($_POST);
    header("location: QuesRepo_detail.php?id_cours=$id_cours&id_quize_filter=$quize_id");
}