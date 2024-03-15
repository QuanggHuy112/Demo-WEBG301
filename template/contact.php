<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Form</title>
    <link rel="stylesheet" href="styles.css">
</head>
<style>
    body {
        font-family: Arial, sans-serif;
        background-color: #f4f4f4;
        margin: 0;
        padding: 0;
    }

    .container {
        max-width: 600px;
        margin: 50px auto;
        padding: 20px;
        background-color: #fff;
        border-radius: 5px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }

    .contact-form h2 {
        margin-top: 0;
        margin-bottom: 20px;
        font-size: 24px;
    }

    .form-control {
        margin-bottom: 20px;
    }

    .form-control input,
    .form-control textarea {
        width: 100%;
        padding: 10px;
        border: 1px solid #ccc;
        border-radius: 5px;
        box-sizing: border-box;
    }

    .btn {
        background-color: #4caf50;
        color: #fff;
        padding: 10px 20px;
        border: none;
        border-radius: 5px;
        cursor: pointer;
    }

    .btn:hover {
        background-color: #45a049;
    }

    .status {
        margin-top: 20px;
        padding: 10px;
        border-radius: 5px;
    }

    .success {
        background-color: #d4edda;
        border-color: #c3e6cb;
        color: #155724;
    }

    .error {
        background-color: #f8d7da;
        border-color: #f5c6cb;
        color: #721c24;
    }
</style>
<body>
    <div class="container">
        <form id="contact-form" class="contact-form" action="#" method="post" onsubmit="return validateForm()">
            <h2>Contact Us</h2>
            <div class="form-control">
                <input type="text" id="name" placeholder="Name" required>
            </div>
            <div class="form-control">
                <input type="email" id="email" placeholder="Email" required>
            </div>
            <div class="form-control">
                <textarea id="message" placeholder="Message" required></textarea>
            </div>
            <button type="submit" class="btn">Send</button>
            <div class="status" id="status"></div>
        </form>
    </div>
    <script src="script.js"></script>

    <script>
        function validateForm() {
            var name = document.getElementById("name").value;
            var email = document.getElementById("email").value;
            var message = document.getElementById("message").value;
            var status = document.getElementById("status");

            // Kiểm tra nếu các trường không được điền đầy đủ
            if (name == '' || email == '' || message == '') {
                status.innerHTML = "Please fill in all fields.";
                status.className = "status error";
                return false;
            }

            // Kiểm tra định dạng email
            var emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
            if (!email.match(emailPattern)) {
                status.innerHTML = "Invalid email format.";
                status.className = "status error";
                return false;
            }

            // Nếu dữ liệu hợp lệ, trả về true để gửi biểu mẫu
            return true;
        }
    </script>
</body>
</html>

<?php 
//ket noi co so du lieu
$hostname = 'localhost'; //ten may chu
$username='root'; //ten tai khoan ket noi vao may chu csdl
$password=''; //mat khau cua tai khoan, ngầm định mật khẩu ban đầu của root là rỗng
$dbname='centralzoo'; //ten csdl
$port=3306; //so hieu cổng của máy chủ csdl
function query($sql)
{
	//sử dụng biến toàn cục đã khai báo ở trên
	global $hostname;
	global $username;
	global $password;
	global $dbname;
	global $port;
	//mở kết nối tới cơ sở dữ liệu dùng mysqli với 5 tham số ở trên
	$conn = new mysqli($hostname, $username, $password, $dbname, $port);
	if($conn->connect_error)
	{
		//neu nhu ket noi khong thanh cong thi dung chuong trinh
		echo "Connection fail<br>";
		//dung chuong trinh
		die($conn->connect_error);
	}
	
	//chay cau truy van lay ket qua
	$result = $conn->query($sql);
	if(!$result)
	{
		//Neu khong co ket qua ($result=null) thi dung chuong trinh
		echo "SQL execution fail <br>";
		die($conn->error);
	}
	//lay tat ca cac ban ghi tu ket qua
	$rows = mysqli_fetch_all($result);
	return $rows;
}
function execsql($sql)
{
	global $hostname;
	global $username;
	global $password;
	global $dbname;
	global $port;
	$conn = new mysqli($hostname, $username, $password, $dbname, $port);
	if($conn->connect_error)
	{
		//neu nhu ket noi khong thanh cong thi dung chuong trinh
		echo "Connection fail<br>";
		//dung chuong trinh
		die($conn->connect_error);
	}	
	//chay cau truy van lay ket qua
	$result = $conn->query($sql);
	return $result;
}
?> 
