<?php
include './header.php';
include './config.php';
?>

<main class="mt-4">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <button type="submit" class="btn btn-primary" name="btnAdd" style="padding: 0.5% 3%; margin-bottom: 2%">Thêm bệnh nhân</button>
                <form action="process-add-member.php" method="GET">
                    <div class="row mb-3">
                        <label for="txtPatientid" class="col-sm-2 col-form-label">Mã bệnh nhân: </label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="txtPatientid" name="txtPatientid">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="txtLastname" class="col-sm-2 col-form-label">Họ và tên đệm: </label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="txtLastname" name="txtLastname">
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="txtFirstname" class="col-sm-2 col-form-label">Tên: </label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="txtFirstname" name="txtFirstname">
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="txtDateofbirth" class="col-sm-2 col-form-label">Ngày sinh: </label>
                        <div class="col-sm-10">
                            <input type="date" class="form-control" id="txtDateofbirth" name="txtDateofbirth">
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="txtGender" class="col-sm-2 col-form-label">Giới tính: </label>
                        <div class="col-sm-10">
                            <select class="form-select" id="txtGender" name="txtGender">
                                <option selected>Nam</option>
                                <option value="Nữ">Nữ</option>
                            </select>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="txtMobile" class="col-sm-2 col-form-label">Số điện thoại: </label>
                        <div class="col-sm-10">
                            <input type="tel" class="form-control" id="txtMobile" name="txtMobile" placeholder="+84xxxxxxxx">
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="txtEmail" class="col-sm-2 col-form-label">Email: </label>
                        <div class="col-sm-10">
                            <input type="email" class="form-control" id="txtEmail" name="txtEmail" placeholder="abc@gmail.com">
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="txtHeight" class="col-sm-2 col-form-label">Chiều cao(mét): </label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="txtHeight" name="txtHeight">
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="txtWeight" class="col-sm-2 col-form-label">Cân nặng(kg): </label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="txtWeight" name="txtWeight">
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="txtBlood_type" class="col-sm-2 col-form-label">Nhóm máu: </label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="txtBlood_type" name="txtBlood_type">
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="txtCreated_on" class="col-sm-2 col-form-label">Ngày lập sổ: </label>
                        <div class="col-sm-10">
                            <input type="date" class="form-control" id="txtCreated_on" name="txtCreated_on">
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="txtModified_on" class="col-sm-2 col-form-label">Ngày cập nhật: </label>
                        <div class="col-sm-10">
                            <input type="date" class="form-control" id="txtModified_on" name="txtModified_on">
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</main>

<?php
include './footer.php';
?>