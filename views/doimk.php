<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="" method="POST">
        <h3>Đổi Mật Khẩu</h3>
            <div class="form-group password-group">
                <label for="current_password">Mật khẩu hiện tại:</label>
                <input type="text" id="current_password" name="mkcu" required>
            </div>
            <div class="form-group">
                <label for="new_password">Mật khẩu mới:</label>
                <input type="text" id="new_password" name="mkmoi" required>
            </div>
            <div class="form-group">
                <label for="confirm_password">Xác nhận mật khẩu mới:</label>
                <input type="text" id="confirm_password" name="nhaplaimk" required>
            </div>

            <div class="form-actions">
                <button type="submit" name="btn_updatemk">LƯU</button>
            </div>
        </form>
    
</body>
</html>