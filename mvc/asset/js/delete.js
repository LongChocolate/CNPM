
let Ma,c,a,s,b;
function message(id,controller,action,clas,button)
{
   Ma = id;
   c = controller;
   a = action;
   s = clas;
   b = button
}
 
function onSubmit(button)
{
   var xhr = new XMLHttpRequest();
   xhr.open('GET','index.php?controller=' +c+ '&action='+ a+ '&class=' + s + '&id='+Ma);
   xhr.send();
   xhr.addEventListener('load',e =>{
      if (xhr.readyState === 4 && xhr.status ===200)
      {
         let response = xhr.responseText;
         var data = JSON.parse(response);
         var mess = document.getElementById('ThongBaoModal');
         var content = mess.querySelector('#Content-Thongbao');
         content.innerHTML = data.error;
         $('#question').modal('hide');
         $('#ThongBaoModal').modal('toggle');
         if(data.code == 0)
         {
            b.parentElement.parentElement.remove();
         }
      }
   });
}
