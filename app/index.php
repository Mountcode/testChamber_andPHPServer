<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <title>Полигон</title>
    <link rel="stylesheet" href="css/style.min.css">
</head>

<body>
    <form action="">
        <input type="text" placeholder="Имя" name="name">
        <input type="text" placeholder="Фамилия" name="surname">
        <input type="text" placeholder="Телефон" name="phone">
        <input type="button" value="отправить" class="send">
    </form>
    <script src="js/libs.min.js"></script>
    <script src="js/main.js"></script>
</body>

</html>



































<!--

// Маленькие подсказки

i += 2; Увеличить i от его текущего значения на 2

ЗАПОМНИ ЭТО ОЧЕНЬ ВАЖНО! Создаем массив с чем угодно для работы и перебираем его так:

задать i; посчитать i(перем массив с каторым работаем); добавить i;
for( var i = 0; i < link.length; i++){
        link[i] = ...
}

*****Массив считается от единицы

***** Через точку всегда обращаемся к ключу объекта. Например- console.log 
querySelectorAll


document.body.addEventListener('click', some );


**** VARIABLE.classList.remove('showed');

**** VARIABLE.classList.add('showed');

function some(e){
    console.log('tot');
};


for (var i - 0; i < buttons.length; i++){
        
}



for(var k in this){
//        document.body.innerHTML += '<strong>' + k + '</strong> ' + this[k] + '<br/>';
//    }


*************************
var modalSummoner = document.querySelector('.openmodal');
    
modalSummoner.onclick = function(e){ 
    console.log('sdf')
    e.preventDefault();
};

************************************

Это проверка переменной на то, является ли она просто строкой или уже элементом DOM.
если в JQuery передать ('.class') - то это строка которую он потом делаем элементом DOM с помощью querySelectorAll. А если передать (this) - то это сразу элемент DOM. И что бы не было ошибки нужно проверить и решить использовать querySelectorAll или нет.

if(variable instanceof HTMLElement){

}



**********************************
CALLBACK
Пишется в кинце работы функции. Это дает возможность, при завершении функции, попросить ее сразу запустить любую другую. При этом callback передается как один из параметров функции. При этом callback надо правильно задавать в функции которая его вызывает. Нужно помнить о контекте и вызывать колбэк в тож же контексте с которым работала функция. Пример:

function cb(elem,callback){
    var elem2 = document.querySelectorAll(elem);
    var func = callback || function(){};
    console.log('Функция начинает что то делать')
    
    setTimeout(function(elem){
        
        callback.call(elem2);
        
    },1000) 
}

window.onload = function(e){
    cb('.box',function(){
       console.log('А когда закончила вызвала другую функцию');
    });
}

Подытожем:
callback(); - Вызывает функцию в контексте Window. Из любого места, из любой другой функции
callback.call(elem2); - вызывает функцию из того контекста что мы передадим в elem2



Это пример 2 который лучше показывает сохранение контекта

function cb(callback){
    console.log('Функция начинает что то делать')
    console.log(this)

    var func = callback || function(){};
    elem = this;
    
    setTimeout(function(){
        callback.call(elem);
    },1000) 
}

window.onload = function(e){
    
    document.querySelector('.box').onclick = function(){
        cb.call(this,function(){
            console.log(this);
        });
    };
};



***************************************

JQUERY

***************************************

Вместо:
$(document).ready(function(){
})
Надо писать
$(function(){

})
****************************************
Не нужно вешать события просто //click
Подвешивай их через on
variable.on('click',function(){
})

****************************************
Шпаргалка JQuery
http://jquery.page2page.ru/tags/ifr.html

****************************************
Сброс цепочки анимации через функцию stop
$(this).stop(true).fadeIn(300).fadeOut(300).fadeIn(300).fadeOut(300).fadeIn(300)
так она не будет запускаться столько раз сколько кликнулит а только 1 раз.
****************************************
Короткая запись "переключить класс у массива только у активного элемента"
$('.menu a").removeClass('active).filter(this).addClass('active');

*****************************************
Как правильно написать JQuery плагин

это первоночальная структура плагина:
(function($){
    $.fn.ИМЯ ПЛАГИНА = function(){
        Код плагина
        
        return this;
    }
})(JQuery)

Любой плагин должен работать с объектом JQuery который может быть как дом элементом так и массивом а значить всё что мы туда передаем нужно обходить циклом. Правильный код такой

(function($){
    $.fn.ИМЯ ПЛАГИНА = function(){
        this.each(function(){
            Код плагина
        })
        
        return this;
    }

})(JQuery)

Так же этот плагин должен быть объектом дял передачи параметром. Надо делать так

(function($){
    $.fn.ИМЯ ПЛАГИНА = function(settings){
       
       //делаем массив options. сливаем его вместе с массивом settings куда и 
       //передаем набор параметров. Запись $.extend берет из второго массива значение по умолчанию ЕСЛИ первым массивом (массивом пользовательских параметров) мы не передали такое значение. Кароче массив со значениями по //умолчанию которые используются если не передат ьсвои
       
        var options = $.extend(settings,{
            'd' : ' ',
            cnt: 2
        });
         
        this.each(function(){
            Код плагина
        })
        
        return this;
    }

})(JQuery)



/////////////=======================/////////////////////
ООП

Определения главных принципов ООП (примерно)
- наследование. созданные объекты могут наследовать методы и классы у других объектов а так же у прототипов. прототипы просто содержать в себе методы которые можно наследовать классами. При создании нового обекта с наследованием метод или класс могут наследоваться, переопределится или добавиться к наследованным.
- полиморфизм. при наследовании методы и классы могут изменяться ребенком. классы переписываться а метода дописываться. И всё это достигается за счет гибкого понимания типа объекта джаваскриптом при его использовании.
- инкапсуляция. Возможность сделать приватными(скрыть для всех зон видимости кроме нужных) функции и переменные.Раньше в JS это делалось костылями. В новом станедарте обозначаесся кусок файла с функцией где получаем результат работы фонкции и ему прописывается экспорт. получается что все внутренние функции и переменные для успешной работы главнйо функции есть в файле и всё отрабатывает, н она экспорт идет только результат отработки. а в другм файле мы ипортируем этот результат. и там уже не видно того что не надо, оно остается в том файле откуда экспортировали. и кстати это ни в каких браузерах не работает) кароче в ES6 еще инкопсуляции особо нет. 


Как сделать объект
function Animal(name){ 
    this.name = name;
    this.weight = 1;
}

*******************************************

Способ создания обхекта с его свойствами и методами взятыми из прототипа.
Это правильная запись.

function Animal(name){ 
    this.name = name;
    this.weight = 1;
}

Animal.prototype.eat = function(){
    this.weight++;
}
Animal.prototype.log = function(){
    console.log(this.name + ' ' + this.weight);
}


*********************************************
Пример создания объекта с конструктором на новом стандарте

window.onload = function(e){
    var a1 = new Cat('Murzic',2,54);
    
    a1.eat();
    a1.log();
}


//Создаем класс с конструктором
class Animal{
    constructor(name, x, y){
        this.name = name;
        this.x = x;
        this.y = y;
        this.weight = 1;
    }
    
    eat(){
        this.weight++;
    }
    log(){
        console.log(this.name + ' ' + this.weight + ' ' + this.x + ' ' + this.y);
    }
}

***********************************************
//Создаем объект класса и добавляем ему собственное свойство приплюсовывая его к уже существующему конструктору
class Cat extends Animal{
    constructor(name, x, y){
        super(name, x, y);
        this.lifes = 9;
    }
}


**********************************************
//Можно так же добавить к существующему методу класса созданному конструктором дополнительные инструкции для определенного объекта

class Cat extends Animal{
    constructor(name, x, y){
        super(name, x, y);
        this.lifes = 9;
    }
    log(){
        return super.log() + ' ' + this.lifes;
    }
}

***********************************************
Это просто пример как создат массив и напихать в созданнх обхектов а потмо вывести циклом используя метода обектов

window.onload = function(e){
    var animals = []
    animals.push(new Cat('Murzic',2,54));
    animals.push(new Dog('Sharic',20,30));
    animals.push(new Cat('Murzic2',23,554));
    animals.push(new Dog('Sharic2',204,340));
    
    for (let animal of animals){
        animal.eat();
        animal.log();
        console.log(animal.log() );
    }
}













-->