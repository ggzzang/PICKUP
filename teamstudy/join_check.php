<?php
 $con = mysqli_connect("localhost", "dooiy6116", "wlsgmlsla12!", "dooiy6116");
mysqli_query($con, 'SET NAMES utf8');

// 세션 시작
session_start();

// 데이터 ajax리턴할 변수
$num = 0;
$num1 = 1; //자릿수
$num2 = 2; //공백
$num3 = 3; //혼합

$id = $_POST['userid'];
$pw = $_POST['pw'];

$usenum = preg_match('/[0-9]/u', $pw);
$eng = preg_match('/[a-zA-Z]/u', $pw);
$spe = preg_match("/[@$!%*#?&]/u", $pw);

if (!preg_match("/^[a-zA-Z0-9]{6,12}$/", $id)) {
    echo $num2; // 아이디 형식 오류
    return;
} else {
    // 데이터베이스 연결 확인
    if ($con) {
        $id_check = mysqli_query($con, "SELECT * FROM member WHERE id='$id'");
        $row_count = mysqli_num_rows($id_check);

        if ($row_count > 0) {
            echo $num1; // 아이디 중복
            return;
        } else {
            if (strlen($pw) < 8 || strlen($pw) > 14) {
                echo $num1; // 비밀번호는 영문, 숫자, 특수문자를 혼합하여 최소 8자리 ~ 최대 14자리 이내로 입력해주세요.
                return;
            } elseif (preg_match("/\s/u", $pw) == true) {
                echo $num2; // 비밀번호는 공백 없이 입력해주세요.
                return;
            } else {
                $usenum = preg_match('/[0-9]/u', $pw);
                $eng = preg_match('/[a-zA-Z]/u', $pw);
                $spe = preg_match("/[@$!%*#?&]/u", $pw);

                if ($usenum == 0 || $eng == 0 || $spe == 0) {
                    echo $num3; // 영문, 숫자, 특수문자를 혼합하여 입력해주세요.
                    return;
                } else {
                    // 이름 확인
                    $name = $_POST['name'];
                    if (!$name) {
                        echo "이름을 입력하시오!";
                        return;
                    }

                    // 연락처 확인
                    $hp = $_POST['hp'];
                    if (!$hp) {
                        echo "연락처를 입력하시오!";
                        return;
                    }

                    // 이메일 확인
                    $email_id = $_POST['email_id'];
                    $email_domain = $_POST['email_domain'];
                    if (!$email_id || !$email_domain) {
                        echo "이메일을 입력하시오!";
                        return;
                    }

                    $id_check = mysqli_query($con, "SELECT * FROM member WHERE id='$id'");
                    $row_count = mysqli_num_rows($id_check);

                    $id_check = $id_check->fetch_array();
                    if($row_count > 0){
                        echo "<script>alert('아이디가 중복됩니다.'); history.back();</script>";
                    }else{
                        $statement = mysqli_prepare($con, "INSERT INTO member VALUES (null,?,?,?,?,?)");
                        mysqli_stmt_bind_param($statement, "sssss", $id, $pw, $name, $hp, $email);
                        mysqli_stmt_execute($statement);

                        echo "<script>alert('회원가입완료!');</script>"; 
                        echo("<script>location.href='./join_ok.php';</script>");
                    }
                }
            }
        }
    } else {
        echo $num1; // 데이터베이스 연결 오류
        return;
    }
}
?>