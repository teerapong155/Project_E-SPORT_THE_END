<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
        <div class="title_table">
            <label>ลงชื่อเข้าใช้งาน</label>
        </div>
        <form id="fr_login" name="fr_login">
            <div class="form-group space_box">
                <label for="fname">ชื่อ</label>
                <input type="text" class="form-control" id="fname" placeholder="ชื่อ">
                <label for="lname">นามสกุล</label>
                <input type="text" class="form-control" id="lname" placeholder="นามสกุล">
            </div>
            <div class="form-group space_box">
                <label for="email">อีเมล</label>
                <input type="email" class="form-control" id="email" placeholder="อีเมล">
                <label for="phone">เบอร์โทร</label>
                <input type="tel" class="form-control" id="phone" placeholder="เบอร์โทร">
            </div>
            <div class="form-group space_box">
                <label for="username">ชื่อผู้ใช้</label>
                <input type="text" class="form-control" id="username" placeholder="ชื่อผู้ใช้">
                <label for="password">รหัสผ่าน</label>
                <input type="password" class="form-control" id="password" placeholder="รหัสผ่าน">
            </div>
            <div class="space_box">
                <button type="button" class="btn btn-primary">ตกลง</button>
            </div>
        </form>
</body>
</html>