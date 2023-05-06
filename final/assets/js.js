//validate user inputs and return an indication when a user input is not valid
var firstname=document.getElementByName('first_name');
var lastname=document.getElementByName('first_name');
var email=document.getElementByName('email');
var contain = /@/;
function validateInput(){
    if(firstname.value == ''||firstname.value != String){
        firstname.style.backgroundColor='cyan';
        return false;
    }
    if(lastname.value == ''||lastname.value != String){
        lastname.style.backgroundColor='cyan';
        return false;
    }
    if(contain.test(email.value) == false){
        lastname.style.backgroundColor='cyan';
        return false;
    }
}

var font_mode=0;
var brightness_mode=0;
function font(){
    document.getElementsByTagName('p').style=font_size_array[font_mode];
    let font_size_array=['font-size:1em','font-size:1.5em'];
    if(font_mode==0){
        font_mode++;
    }else if(font_mode==1){
        font_mode=0;
    }else{
        font_mode=0;
    }
}
function brightness(){
    document.getElementsByTagName('main').style=background_color_array[brightness_mode];
    document.getElementsByTagName('p').style=font_color_array[brightness_mode];
    let background_color_array=['background-color:rgb(50,50,50)','background-color:rgb(235,235,235)'];
    let font_color_array=['color:rgb(235,235,235)','color:rgb(50,50,50)'];
    if(brightness_mode==0){
        brightness_mode++;
    }else if(brightness_mode){
        brightness_mode=0;
    }else{
        brightness_mode=0;
    }
}

var input;
function move(input){
    return document.getElementById(input);
}
function right(input){
    move(input).style.left = parseInt(move(input).style.left) + 10 + 'px';
}

function left(input){
    move(input).style.left = parseInt(move(input).style.left) - 10 + 'px';
}

function show_menu(){
    document.getEmementById('navigation').style = 'height:15em';
}