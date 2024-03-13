<!DOCTYPE html>
<html>
<head>
    <title>Определение времени года</title>
</head>
<body>
    <h2>Введите номер месяца (1-12):</h2>
    <form method="post" action="">
        <input type="number" name="month" min="1" max="12" required>
        <input type="submit" name="submit" value="Подтвердить">
    </form>

    <?php
    // Проверяем, был ли отправлен номер месяца из формы
    if(isset($_POST['submit'])) {
        // Получаем введенный номер месяца
        $month = intval($_POST['month']); // Преобразуем введенное значение в целое число

        // Определяем время года
        switch($month) {
            case 12:
            case 1:
            case 2:
                $season = "Зима";
                break;
            case 3:
            case 4:
            case 5:
                $season = "Весна";
                break;
            case 6:
            case 7:
            case 8:
                $season = "Лето";
                break;
            case 9:
            case 10:
            case 11:
                $season = "Осень";
                break;
            default:
                $season = "Ошибка: неверный номер месяца";
        }

        // Выводим время года
        echo "<p>Время года для месяца $month: $season</p>";
    }
    ?>
</body>
</html>
