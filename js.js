"use strict";

var errorMessages = document.getElementById('errorMessages').innerHTML

document.getElementById('displayDateTime').innerHTML = Date();
document.getElementById('clock').src = "Images/watch.png";
document.getElementById('clock').style.width = "614px";
document.getElementById('clock').style.height = "460px";

function myFirstFunction() {
    document.getElementById('myFirstFunction').style.backgroundColor = "yellow";
    document.getElementById('myFirstFunction').innerHTML = "I'm highlighted!";
}

var animals = ["dog", "cat", "panda"],
    number = 1,
    favoriteFruit = "pineapple";
var $var1 = 0,
    $var2 = 1,
    _var3 = "Koolaid";

document.getElementById('multiple-declarations').innerHTML =
    animals.toString() + "<br> " + number.toString() + "<br>" + favoriteFruit + "<br>" +
    $var1.toString() + "<br>" + $var2.toString() + "<br>" + _var3;

var person = {
    firstName: "Bob",
    lastName: "Sandoval",
    age: 20,
    gender: "Male",
    height: 6.2,
    fullName: function() {
        return this.firstName + " " + this.lastName;
    }
};

document.getElementById('js-object').innerHTML = person.firstName;
document.getElementById('js-object2').innerHTML = person["lastName"];
document.getElementById('js-object3').innerHTML = person.fullName();

function increaseFont() {
    var fontSize = parseInt(document.getElementById("too-small").style.fontSize);
    var increaseBy = 5;
    document.getElementById("too-small").style.fontSize = fontSize + increaseBy + "px";
    document.getElementById("too-small").style.lineHeight = fontSize + increaseBy + "px";
}

function crossBrowserAttach(element, event, behaviour) {
    if (element.attachEvent) {
        return element.attachEvent(event, behaviour);
    }
    else if (element.attachEventHandler) {
        return element.attachEventHandler(event, behaviour);
    }
    else {
        errorMessages += "bro your crossBrowserAttach messed up<br>"
    }
}

function manualGeneration() {
    var title = document.createTextNode('The cars I\'ve owned!')
    var carList = document.createElement('ul');
    var car1 = document.createElement('li');
    var car1Desc = document.createTextNode('Mazda');
    var car2 = document.createElement('li');
    var car2Desc = document.createTextNode('Toyota');
    var car3 = document.createElement('li');
    var car3Desc = document.createTextNode('Dodge');
    
    car1.appendChild(car1Desc);
    car2.appendChild(car2Desc);
    car3.appendChild(car3Desc);
    
    carList.appendChild(car1);
    carList.appendChild(car2);
    carList.appendChild(car3);
    
    var element = document.getElementById('manualGeneration');
    element.style.fontSize = '20px';
    
    element.appendChild(title);
    element.appendChild(carList);
}

window.onload = manualGeneration;

// function Book(name) {
    
//   this.name = name;
    
//     Object.defineProperty(this,"name", {
//         get: function() {
//             return "Book: " + name;
//         },
//         set: function(newName) {
//             name = newName;
//         },
//         configurable: false
//     });
    
    
// }

// var book1 = new Book("The Adventures of Huckleberry Finn");
// document.getElementById('constructor').innerHTML = book1.constructor;
// document.getElementById('constructor').innerHTML += "<br>"+ book1.name;