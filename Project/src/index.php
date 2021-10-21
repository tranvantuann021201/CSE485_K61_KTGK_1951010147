<?php
include './header.php';
include './config.php';
?>
<div class="container">
    <h2 class="text-primary" style="padding-top: 1%;">Danh sách bệnh nhân: </h2>
</div>

<div class="container-fluid">
    <div class="col" style="padding: 1% 3%;">
        <div>
            <button class="btn btn-success" style="background-color:blue; margin-left:30px; margin-top:20px;"><a href="./addEmployee.php" style="color: #fff;">Thêm mới</a></button>
        </div>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">STT</th>
                    <th scope="col">Mã bệnh nhân</th>
                    <th scope="col">Họ đệm bệnh nhân</th>
                    <th scope="col">Tên</th>
                    <th scope="col">Ngày sinh</th>
                    <th scope="col">Giới tính</th>
                    <th scope="col">Số điện thoại</th>
                    <th scope="col">Email</th>
                    <th scope="col">Sửa</th>
                    <th scope="col">Xóa</th>
                    <th scope="col">Chi tiết</th>
                </tr>
            </thead>
            <tbody>

                <?php

                #Lấy dữ liệu từ CSDL và đổ ra bảng(phần lặp lại)
                #B1 kết nối với CSDL
                $conn = mysqli_connect('localhost', 'root', '', 'PATIENT');
                mysqli_set_charset($conn, "utf8"); //Định dang font chữ 
                if (!$conn) {
                    die("Không thể kết nối, kiểm tra lại các tham số kết nối");
                }
                #Bước 2: Khai báo câu lệnh thực thi và thực hiện truy vấn
                $sql = "SELECT bn.patientid, bn.lastname, bn.firstname, bn.dateofbirth, bn.gender, bn.mobile, bn.email FROM PATIENT bn";
                $result = mysqli_query($conn, $sql);
                #Bước 3: Xử lí kết quả trả về
                if (mysqli_num_rows($result) > 0) {
                    $i = 1;
                    while ($row = mysqli_fetch_assoc($result)) {
                ?>
                        <?php
                        $converted_res = $row['gender'] ? 'true' : 'false';
                        ?>

                        <tr>
                            <th scope="row"><?php echo $i; ?></th>
                            <td><?php echo $row['patientid']; ?></td>
                            <td><?php echo $row['firstname']; ?></td>
                            <td><?php echo $row['lastname']; ?></td>
                            <td><?php echo $row['dateofbirth']; ?></td>
                            <td><?php echo $row['gender']; ?></td>
                            <td><?php echo $row['mobile']; ?></td>
                            <td><?php echo $row['email']; ?></td>
                            <td><a href="update-admin.php?patientid=<?php echo $row['patientid']; ?>"><i class="fas fa-edit"></i></a></td>
                            <td><a href="removeEmployee.php?patientid=<?php echo $row['patientid']; ?>"><i class="fas fa-trash"></i></a></td>
                            <td><a href=""><i class="fas fa-info text-primary"></i></a></td>
                        </tr>
                <?php

                        $i++;
                    }
                }

                ?>

            </tbody>
        </table>
    </div>
</div>
<?php
include './footer.php';
?>