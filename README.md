# Учебный проект "Telegraph" (Skillbox)

## Что нужно сделать
Реализуйте функции добавления, удаления и редактирования текста в «Телеграф».

1. Задайте массив textStorage в глобальной области видимости для хранения текстов: массив с числовыми индексами, каждый элемент которого будет также являться ассоциативным массивом вида с ключами title и text — для заголовка и текста соответственно. Например, заголовок для первого текста можно будет получить так: $textStorage[0][‘title’]

2. Реализуйте функцию add для добавления нового текста в массив. Функция должна принимать на вход два текстовых параметра — title и text (заголовок и текст соответственно), и при этом ничего не возвращать. Функция должна иметь доступ к массиву с текстами — его также можно передать в качестве параметра. Помните про особенности передачи параметров по ссылке и значению.   

3. Попробуйте вызвать функцию add два раза, передав ей необходимые параметры, после чего выведете содержимое массива textStorage любым удобным способом. Если вы все сделали правильно, то в нём будет два элемента, содержащих переданные заголовки и тексты. 

4. Реализуйте функцию remove для удаления конкретного текста из массива. На выходе функция должна принимать номер текста (соответствующий индексу в массиве) и массив с текстами, а возвращать true в случае, если такой номер (индекс) существует, и false, если такого номера (индекса) в массиве не оказалось. 

5. Вызовете функцию remove несколько раз, сначала с параметром 0, а затем с параметром 5, и выведете значение, которое она вернёт на экран. 

6. Если до этого вы вызвали функцию add два раза, то у вас должно было быть два текста в массиве. После вызова remove с указанными параметрами должен остаться только второй текст. Чтобы убедиться в этом, выведете содержимое массива textStorage любым удобным способом.

7. Реализуйте функцию редактирования edit. Суть функции редактирования состоит в том, что мы должны иметь возможность обновить текст или заголовок выбранного элемента массива. То есть задать новое значение конкретному элементу. Таким образом, на входе функция должна принимать четыре параметра:

    - первый — это номер (индекс) текста в массиве; 
    - второй — заголовок (title); 
    - третий — сам текст; 
    - четвёртый — это массив с текстами.  
    
    Самостоятельно определите подходящие типы данных для всех параметров и укажите их при инициализации функции. Пусть функция возвращает true, если текст с нужным индексом существует, и false, если вдруг такого текста в массиве не оказалось.

8. Вызовите edit для первого текста и попробуйте обновить заголовок.

9. Выведите textStorage любым удобным способом и убедитесь, что данные сохранились.

10. Попробуйте вызвать edit с заведомо несуществующим индексом и убедитесь, что функция возвращает false.

11. Если все работает правильно — сделайте коммит ваших изменений с помощью Git и отправьте свой коммит в репозиторий.