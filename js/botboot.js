var a = Math.ceil(Math.random() * 10);
var b = Math.ceil(Math.random() * 10);       
var c = a + b;
function DrawBotBoot()
{
    document.write("<label for='botboot' class='contact_label'>What is "+ a + " + " + b +"?</label>");
    document.write("<input name='botboot' id='BotBootInput' type='number' class='input_field' maxlength='2' size='2' required>");
}    
function ValidBotBoot(){
    var d = document.getElementById('BotBootInput').value;
    if (d == c) console.log('ValidBotBoot: true'); return true;        
    return false;  
}

// $(document).ready(function(){
//     $('#BotBootInput').change(function(){
//         console.log('Clicked!!');
//         if(ValidBotBoot() === true){
//             console.log('true');
//         }else{
//             console.log('false');
//         }
//     });
// });