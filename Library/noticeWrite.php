<?php

include "include/session.php";
include "include/dbConnect.php";

 $dbConnect -> set_charset("utf8");

 $title=$_POST["title"];
 $content=($_POST["content"]);
 $uid=$_SESSION['ses_userid'];

 $sql = "insert into notice (title, content , uid)";             // (입력받음)insert into 테이블명 (column-list)
 $sql = $sql. "values('$title', '$content', '$uid')";         // calues(column-list에 넣을 value-list)

 if($dbConnect->query($sql)){                                                               //만약 sql로 잘 들어갔으면
   echo("<script>location.replace('./notice.php');</script>");                                // id님 안녕하세요.
 }else{                                                                                //아니면
  echo 'fail to insert sql' .$mysqli->error;                                                            //fail to insert sql로 표시
 }

mysqli_close($dbConnect);


?>