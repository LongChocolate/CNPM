let state;
function onSubmitEdit(controller,action,clas)
{
    var modal = document.getElementById(action+clas);
    var form = modal.querySelector('form');
    let data = {};
    for(let i = 0; i < state.length ; i++ )
    {
        if(state[i] == "Anh")
        {
            data[state[i]] = (modal.querySelector('#' + state[i]).src);
        }
        else{
            data[state[i]] = (form.querySelector('#' + state[i]).value);
        }
    }
    
    const xhr = new XMLHttpRequest();
    xhr.open('GET','index.php?controller=' + controller + '&action=' +action + '&class=' + clas + '&object=' + JSON.stringify(data));
    xhr.send();
    xhr.addEventListener('load',e =>{
        if (xhr.readyState === 4 && xhr.status ===200)
        {
            let response = xhr.responseText;
            data = JSON.parse(response);


            var mess = document.getElementById('ThongBaoModal');
            var content = mess.querySelector('#Content-Thongbao');
            content.innerHTML = data.error;
            $('#'+action+clas).modal('hide');
            $('#ThongBaoModal').modal('toggle');
            
        }
    });
}
function onSubmitCreate(controller,action,clas)
{
    
    const xhr = new XMLHttpRequest();
    xhr.open('GET','function.php?state=' + clas);
    xhr.send();
    xhr.addEventListener('load',e =>{
        if (xhr.readyState === 4 && xhr.status ===200)
        {
            let response = xhr.responseText;
            state = JSON.parse(response);
            let data = {};
            var modal = document.getElementById(action+clas);
            var form = modal.querySelector('form');
            for(let i = 0; i < state.length ; i++ )
            {
                if(state[i] == "Anh")
                {
                    data[state[i]] = (modal.querySelector('#' + state[i]).src);
                }
                else{
                    data[state[i]] = (form.querySelector('#' + state[i]).value);
                }
            }

            const xr = new XMLHttpRequest();
            xr.open('GET','index.php?controller=' + controller + '&action=' +action + '&class=' + clas + '&object=' + JSON.stringify(data));
            xr.send();
            xr.addEventListener('load',e =>{

                let response = xr.responseText;
                response = JSON.parse(response);
                var mess = document.getElementById('ThongBaoModal');
                var content = mess.querySelector('#Content-Thongbao');
                content.innerHTML = response.error;
                $('#'+action+clas).modal('hide');
                $('#ThongBaoModal').modal('toggle');
                if(response.code == 0)
                {
                    let ul = document.createElement('ul');
                    ul.innerHTML = `<ul class='danhsach-item'>
                                <li style='width:10%;'>${data['MaNV']}</li>
                                <li style='width:15%;'>${data['SDT']}</li>
                                <li style='width:20%;'>${data['HoTen']}</li> 
                                <li style='width:20%;'>${data['GioiTinh']}</li>
                                <li style='width:20%;'>${data['Loai']}</li>	
                                <li style='width:25%;'>
                                    <button  onclick='view(${data['MaNV']},'quanli','view',$class)'   data-toggle='modal' data-target='#editNhanvien' class='Xem' id='btnSua' >Xem</button>
                                    <button  onclick='message(${data['MaNV']},'quanli','delete',$class,this)' data-toggle='modal' data-target='#question'  class='Xoa' name='delete' id='btnXoa' >Xoá</button>
                                </li>	                              
                            </ul>`
                    ul.setAttribute('class','danhsach-item');
                    let body = document.querySelector('.body-list');
                    body.appendChild(ul);
                }
            });

            
        }
    });
}

function view(object ,controller,action,clas)
{
    const xhr = new XMLHttpRequest();
    xhr.open('GET','index.php?controller='+controller + '&action=' + action + '&class=' + clas + '&id=' + object);
    xhr.send();
    xhr.addEventListener('load',e =>{
        if (xhr.readyState === 4 && xhr.status ===200)
        {
            if (xhr.readyState === 4 && xhr.status ===200)
            {
                let response = xhr.responseText;
                response = JSON.parse(response);

                var data = response.data;
                state = response.attribute;
                var modal = document.getElementById(action+clas);
                var form = modal.querySelector('form');
                for(let i = 0; i < state.length ; i++ )
                {
                    let inpt = form.querySelector('#' + state[i]);
                    
                    if(state[i] == "Anh")
                    {
                        inpt.setAttribute("src",data[state[i]]);
                    }
                    else if(state[i]  == "SDT")
                    {
                        inpt.setAttribute("value",data[state[i]]);
                        inpt.disabled = false;
                    }
                    else if (state[i]  == "GioiTinh")
                    {
                        inpt.setAttribute("value",data[state[i]]);
                    }
                    else
                    {
                        inpt.setAttribute("value",data[state[i]]);
                    }
                }
            }
        }
    });
}