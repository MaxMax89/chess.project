//------Работа с переменными---------
var name = "Max";
document.write ("Имя " + name + "<br>");  // - выведет на экран.

//------Математические операции------

var num = 15;
var num2 = 25;
document.write ("Результат равен ", num + num2);

//------------Массивы---------------

var array = ["red", "blue", "black"];

//------------Объекты---------------

let user = {
	name: "Max",       // Литерал объекта
	age: 30,
}; */

/*user.gender = "man";   // Добавить значение
delete user.age;    // Удалить значение 

let user = {
  name: "John",
  age: 30,

  sayHi() {
    // "this" - это "текущий объект".
    alert(this.name);
  }

};

user.sayHi(); // John

//-----------Циклы-------------
let i = 0;
for (let i = 0; i < 5 ; i++) {
	document.write(i);
}
document.write(i);