<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Мой первый блог</title>
    <link rel="stylesheet" href="../style.css">
    <link href="https://yastatic.net/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container">
        <h1>Мой первый блог</h1>

        <div>
           <a href="index.php?action=add">Добавить статью</a>
            <table class="admin-table" >
                <tr>
                    <th>Дата</th>
                    <th>Заголовок</th>
                    <th></th>
                    <th></th>
                </tr>

                <?php foreach($articles as $a): ?>

                    <tr>
                        <td><?=$a['date']?></td>
                        <td><?=$a['title']?></td>
                        <td> <a href="index.php?action=edit&id=<?=$a['id']?>">Редактировать</a> </td>
                        <td> <a href="index.php?action=delete&id=<?=$a['id']?>">Удалить</a>  </td>
                    </tr>

                <?php endforeach ?>

            </table>



          </div>
          <footer>
            <p>Мой первый блог<br>
            Copyright &copy; 2016
            </p>
          </footer>
    </div>
</body>
</html>
