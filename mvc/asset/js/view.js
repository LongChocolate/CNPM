let state;
let button;
function onSubmitEdit(controller,action,clas)
{
    var modal = document.getElementById(action+clas);
    var form = modal.querySelector('form');
    var data = {};
    for(let i = 0; i < state.length ; i++ )
    {
        if(state[i] == "Anh")
        {
            data[state[i]] = (modal.querySelector('#' + state[i]).src).slice(45);
        }
        else if(state[i] == "category_id" || state[i] == "Loai" || (clas == 'Sanpham' && state[i] == 'MaNL'))
        {
            var inpt = form.querySelector('#' + state[i]);
            data[state[i]] = inpt.options[inpt.selectedIndex].value;
        }
        else if(state[i] == "GioiTinh")
        {
            inpt = form.querySelectorAll('input[name='+ state[i] + ']');
            for(var ip of inpt)
            {
                if(ip.checked)
                {
                    data[state[i]] = ip.value;
                }
            }
        }
        else{
            data[state[i]] = (form.querySelector('#' + state[i]).value);
        }
    }
    const xhr = new XMLHttpRequest();
    xhr.open('GET','index.php?controller=' + controller + '&action=edit' + '&class=' + clas + '&object=' + JSON.stringify(data));
    xhr.send();
    xhr.addEventListener('load',e =>{
        if (xhr.readyState === 4 && xhr.status ===200)
        {
            let response = xhr.responseText;
            console.log(response)
            response = JSON.parse(response);
            var mess = document.getElementById('ThongBaoModal');
            var content = mess.querySelector('#Content-Thongbao');
            content.innerHTML = response.error;         
            data = response.data            

            $('#'+action+clas).modal('hide');
            $('#ThongBaoModal').modal('toggle');
            if(response.code == 0)
            {
                if (clas == "Nhanvien"){    
                button.parentElement.parentElement.innerHTML = `
                <li style='width:10%;'>${data['MaNV']}</li>
                <li style='width:15%;'>${data['SDT']}</li>
                <li style='width:20%;'>${data['HoTen']}</li> 
                <li style='width:20%;'>${data['GioiTinh'] == "0" ? "Nam" : "Nữ" }</li>
                <li style='width:15%;'>${data['Loai']}</li>	
                <li style='width:20%;'>
                    <button  onclick="view('${data.MaNV}','quanli','view','${clas}',this)"  data-toggle='modal' data-target='#viewNhanvien' class='Xem btn' id='btnSua' >Xem</button>
                    <button  onclick="message('${data.MaNV}','quanli','delete','${clas}',this)" data-toggle='modal' data-target='#question'  class='Xoa btn' name='delete' id='btnXoa' >Xoá</button>
                </li>`   
                }
                else if(clas == "Danhmuc")
                    {
                        button.parentElement.parentElement.innerHTML = `<li style='width:25%;'>${data['id']}</li>
                                        <li style='width:40%;'>${data['TenDM']}</li>
                                        <li style='width:35%;'>
                                            <button  onclick="view('${data.id}','quanli','view','${clas}',this)"   data-toggle='modal' data-target='#viewDanhmuc' class='Xem btn'  >Xem</button>
                                            <button  onclick="message('${data.id}','quanli','delete','${clas}',this)"    data-toggle='modal' class='Xoa btn'  data-target='#question'>Xoá</button>
                                        </li>`
                    }
                
                else if(clas == "Nguyenlieu")
                {
                   
                    button.parentElement.parentElement.innerHTML =  `<li style='width:25%;'>${data['MaNL']}</li>
                                    <li style='width:40%;'>${data['TenNL']}</li>
                                    <li style='width:35 %;'>
                                        <button  onclick="view('${data['MaNL']}','nhanvienkho','view','${clas}',this)"   data-toggle='modal' data-target='#viewNguyenlieu' class='Xem btn' >Xem</button>
                                        <button  onclick="message('${data['MaNL']}','nhanvienkho','delete','${clas}',this)"   data-toggle='modal'  class='Xoa btn'  data-target='#question' >Xoá</button>
                                </li>	 `
                }
                else 
                {
                    
                    button.parentElement.parentElement.innerHTML = `
                                    <li style='width:10%;'>${data['MaSP']}</li>
                                    <li style='width:15%;'>${data['Ten']}</li>
                                    <li style='width:20%;'>${data['MaNL']}</li>
                                    <li style='width:20%;'>${data['Gia']}</li>
                                    <li style='width:15%;'>${data['category_id']}</li>
                                    <li style='width:20%;'>
                                        <button  onclick="view('${data.MaSP}','quanli','view','${clas}',this)"   data-toggle='modal' data-target='#viewSanpham' class='Xem btn'  >Xem</button>
                                        <button  onclick="message('${data.MaSP}','quanli','delete','${clas}',this)"   data-toggle='modal' class='Xoa btn'   data-target='#question'>Xoá</button>
                                    </li>`    
                }
            }    
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
            var data = {};
            var modal = document.getElementById(action+clas);
            var form = modal.querySelector('form');
            for(let i = 0; i < state.length ; i++ )
            {
                if(state[i] == "Anh")
                {
                    data[state[i]] = (modal.querySelector('#' + state[i]).src).slice(45);
                }
                else if(state[i] == "category_id" || state[i] == "Loai" || (clas == 'Sanpham' && state[i] == 'MaNL'))
                {
                    var inpt = form.querySelector('#' + state[i]);
                    
                    data[state[i]] = inpt.options[inpt.selectedIndex].value;
                    
                }
                else if(state[i] == "GioiTinh")
                {
                    inpt = form.querySelectorAll('input[name='+ state[i] + ']');
                    for(var ip of inpt)
                    {
                        if(ip.checked)
                        {
                            data[state[i]] = ip.value;
                        }
                    }
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
                // console.log(response)
                response = JSON.parse(response);
                var mess = document.getElementById('ThongBaoModal');
                var content = mess.querySelector('#Content-Thongbao');
                content.innerHTML = response.error;
                
                data = response.data;
                console.log(data)
                $('#'+action+clas).modal('hide');
                $('#ThongBaoModal').modal('toggle');
                if(response.code == 0)
                {
                    let ul = document.createElement('ul');
                    ul.className = "danhsach-item";
                    if (clas == "Nhanvien")
                    {
                        ul.innerHTML = `
                                    <li style='width:10%;'>${data['MaNV']}</li>
                                    <li style='width:15%;'>${data['SDT']}</li>
                                    <li style='width:20%;'>${data['HoTen']}</li> 
                                    <li style='width:20%;'>${data['GioiTinh']  == "0" ? "Nam" : "Nữ"}</li>
                                    <li style='width:15%;'>${data['Loai']}</li>	
                                    <li style='width:20%;'>
                                        <button  onclick="view('${data.MaNV}','quanli','view','${clas}',this)"  data-toggle='modal' data-target='#viewNhanvien' class='Xem btn'  >Xem</button>
                                        <button  onclick="message('${data.MaNV}','quanli','delete','${clas}',this)" data-toggle='modal' data-target='#question'  class='Xoa btn' name='delete' id='btnXoa' >Xoá</button>
                                    </li>	                              
                                `
                    }
                    else if(clas == "Danhmuc")
                    {
                        ul.innerHTML = `<li style='width:25%;'>${data['id']}</li>
                                        <li style='width:40%;'>${data['TenDM']}</li>
                                        <li style='width:35%;'>
                                            <button  onclick="view('${data.id}','quanli','view','${clas}',this)"   data-toggle='modal' data-target='#viewDanhmuc' class='Xem btn'>Xem</button>
                                            <button  onclick="message('${data.id}','quanli','delete','${clas}',this)"   data-toggle='modal'  class='Xoa btn'  data-target='#question' >Xoá</button>
                                        </li>`
                    }
                    else if(clas == "Nguyenlieu")
                    {
                        ul.innerHTML =  `<li style='width:25%;'>${data['MaNL']}</li>
                                        <li style='width:40%;'>${data['TenNL']}</li>
                                        <li style='width:35 %;'>
                                            <button  onclick="view('${data.MaNL}','nhanvienkho','view','${clas}',this)"   data-toggle='modal' data-target='#viewNguyenlieu' class='Xem btn' >Xem</button>
                                            <button  onclick="message('${data.MaNL}','nhanvienkho','delete','${clas}',this)"   data-toggle='modal'  class='Xoa btn'   data-target='#question' >Xoá</button>
                                    </li>	 `
                    }
                    else
                    {
                        ul.innerHTML = `<li style='width:10%;'>${data['MaSP']}</li>
                        <li style='width:15%;'>${data['Ten']}</li>
                        <li style='width:20%;'>${data['MaNL']}</li>
                        <li style='width:20%;'>${data['Gia']}</li>
                        <li style='width:15%;'>${data['category_id']}</li>
                                        <li style='width:20%;'>
                                            <button  onclick="view('${data.MaSP}','quanli','view','${clas}',this)"   data-toggle='modal' data-target='#viewSanpham' class='Xem btn' id='btnSua' >Xem</button>
                                            <button  onclick="message('${data.MaSP}','quanli','delete','${clas}',this)"    data-toggle='modal' class='Xoa btn'   data-target='#question' >Xoá</button>
                                        </li>`
                    } 
                    let body = document.querySelector('.body-list');
                    body.appendChild(ul);
                }
            });

            
        }
    });
}

function view(object ,controller,action,clas,ths)
{
    button = ths;
    const xhr = new XMLHttpRequest();
    xhr.open('GET','index.php?controller='+controller + '&action=' + action + '&class=' + clas + '&id=' + object);
    xhr.send();
    xhr.addEventListener('load',e =>{
        if (xhr.readyState === 4 && xhr.status ===200)
        {
            if (xhr.readyState === 4 && xhr.status ===200)
            {
                let response = xhr.responseText;
                console.log(response)
                response = JSON.parse(response)
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
                        inpt = form.querySelectorAll('input[name='+ state[i] + ']');
                        
                        if(data[state[i]] == "0")
                        {
                            inpt[0].checked = true
                        }
                        else
                        {
                            inpt[1].checked =true
                        }
                    }
                    else if (state[i] == "category_id" )
                    {
                        inpt.options[data[state[i]]-1].selected = "selected"
                    }
                    else if(state[i] == "Loai" || (clas == 'Sanpham' && state[i] == 'MaNL'))
                    {
                        var select = data[state[i]];
                        var op = modal.querySelector('select')
                        for(var o of op.querySelectorAll("option"))
                        {
                            if(o.value == select)
                            {
                                o.selected = "selected"
                            }
                        }
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