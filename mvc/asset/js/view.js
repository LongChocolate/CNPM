var modal;
var form;
var ctr,act,clas,inf,s;
function init(info,state,controller,action,c)
{
    ctr = controller;
    act = action;
    clas = c;
    inf = info;
    s = state;
}
function view(info,state,controller,action,c)
{
    init(info,state,controller,action,c)
    modal = document.getElementsByClassName('my-modal')[0];
    setInfo();
    console.log(inf);
    modal.style.display="flex";

}
function backView()
{
    modal.style.display="none";
}
function onSubmitEdit()
{
    for(let i = 0; i < s.length ; i++ )
    {
        if(s[i] == "image")
        {
            
        }
        else{
            inf[i] = form.querySelector('#' + s[i]).value;
        }
    }
    let url = "?controller=" + ctr +"&action="+act+ "&class=" + clas + "&info=" +inf + "&state=" +s;
    form.setAttribute("action",url);
    return true;
}
function setInfo()
{
    form = modal.querySelector('form');
    for(let i = 0; i < s.length ; i++ )
    {
        let inpt = form.querySelector('#' + s[i]);
        if(s[i] == "image")
        {
            inpt.setAttribute("src","asset/image" + inf[i]);
        }
        else
        {
            inpt.setAttribute("value",inf[i]);
        }
    }
}