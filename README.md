# test-yii2-postback
Проект агрегатор постбеков. Первая страница регистрация, вторая таблица с полученными данными. Создал 4 таблицы user, click, install, trial. Через миграции залил в базу, потом через gii добавил модели, контроллеры и представления. У пользователей сделал поле isAdmin для отображения данных если isAdmin=1. После того как пользователь вводит test.@gmail.com то он входит как админ если test1.@gmail.com то простой пользователь. После того как на url postback шлется запрос то в зависимости от того какой event идет запись в оределенную таблицу
Замечание: так как я не понял что значит "Clicks - из параметра event при значении click" я поменял запрос с
/postback.php?cid=0974dsye2sy0256&campaign_id=212&time=1596407855299&sub1=20080217370005d310ff014bf7bd58add6cf&event=click
на
/postback.php?cid=0974dsye2sy0256&campaign_id=212&time=1596407855299&sub1=20080217370005d310ff014bf7bd58add6cf&event=22&event=click
