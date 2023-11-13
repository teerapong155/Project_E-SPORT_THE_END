<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
        <div class="title_table">
            <label>ลงทะเบียนทีมเข้าแข่งขัน</label>
        </div>
        <form id="fr_login" name="fr_login">
            <div class="form-group space_box">
                <label for="tname">ชื่อทีม</label>
                <input type="text" class="form-control" id="tname">
            </div>
            <div class="form-group space_box">
                <label for="fname">ชื่อ-นามสกุล(หัวหน้าทีม)</label>
                <input type="text" class="form-control" id="fname">
                <label for="gname">ชื่อในเกม</label>
                <input type="text" class="form-control" id="gname">
            </div>
            <div class="form-group space_box">
                <label for="email">อีเมล</label>
                <input type="email" class="form-control" id="email">
                <label for="phone">เบอร์โทร</label>
                <input type="tel" class="form-control" id="phone">
            </div>
            <div class="form-group space_box">
                <label for="teamfile">โลโก้ทีม</label>
                <input type="file" class="form-control" id="teamfile">
            </div>
            <div class="space_box">
                <button type="button" class="btn btn-primary">ตกลง</button>
            </div>
        </form>
</body>
</html>