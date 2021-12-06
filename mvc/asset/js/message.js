var question;
var typeMessage;
var form;
function message(id,controller,action,c,type,mess)
{
   // var http = new XMLHttpRequest();
   // var url = '?';
   // var params = 'controller=admin&action=delete&class=Staff&id='+id;
   // http.open('GET', url, true);
   // http.setRequestHeader('Content-type','application/x-www-form-urlencoded');

   // http.onreadystatechange = function() {
   //    if (this.readyState == 4 && this.status == 200) {
   //      alert("asd");
   //    }
   //  };
   
   // http.send(params);
   typeMessage = type;
   question = document.getElementsByClassName('modal')[typeMessage];
   if(typeMessage == 0)
   {
      setAction(id,controller,action,c);
   }
   else
   {
      let p = question.querySelector('p');
      p.innerHTML = mess;
   }
   question.style.display = 'flex';
   
}
function onSubmit()
{
   return true;
}

function setAction(id,controller,action,c)
{
   form = question.querySelector('form');
   let url = "?controller=" + controller +"&action="+action + "&class=" + c + "&id=" +id;
   form.setAttribute("action",url);
   
}
function backMess()
{
	question.style.display = 'none';
}
function getChildren(question,event)
{
   while(question.children)
   {
      if(question.children == event)
      {
         return question.children;
      }
   }
   return null;
}


window.onclick = function(event) 
{

	let menu = document.getElementsByClassName("my-menuBar")[0];
	let overlayMenu = document.getElementsByClassName("my-menuBar-overlay")[0];

   let modal = document.getElementById('myModal');
   let overlayModal = document.getElementsByClassName('my-modal-overlay')[0];
   
   if(event.target == question)
   {
      question.style.display = 'none';
   }
 	if(event.target == overlayMenu)
 	{
 		menu.style.display = "none";
 	}
   if(event.target == overlayModal)
   {
      modal.style.display = "none";
   }
}	