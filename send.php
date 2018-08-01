<?php
if (isset($_POST['submit'])) {
    $fio = $_POST['fio'];
    $phone = $_POST['phone'];
    $fio = htmlspecialchars($fio);
    $phone = htmlspecialchars($phone);
    if (mail("dariafilatevaprogrammer@gmail.com", "Заявка с сайта", "ФИО:" . $fio . ".   Телефон: " . $phone)) {
        echo "Сообщение отправлено. " . $fio . ", спасибо Вам, вскоре я Вам перезвоню.";
    } else {
        echo "К сожалению, произошла ошибка. Попробуйте еще раз или позвоните мне на номер 8(996)-945-70-34 ";
    }
}

?>

<script language="JavaScript" type="text/javascript">
    function chageurl() {
        eval(self.location = "https://repetitormath.000webhostapp.com");
        window.setTimeout("changeurl();", 3000);
    }
</script>

