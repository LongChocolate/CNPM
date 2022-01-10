function thongke(button)
{
    
    const xhr = new XMLHttpRequest();
    xhr.open('GET','index.php?controller=quanli&action=thongke&class=Hoadon' + '&loai=' + button.options[button.selectedIndex].value);
    xhr.send();
    xhr.addEventListener('load',e =>{
        if (xhr.readyState === 4 && xhr.status ===200)
        {
            let response = xhr.responseText;
            var data = JSON.parse(response);
            var table = document.getElementsByClassName('body-list')[0];
            table.innerHTML = `<ul class='header-list text-center'>
                                <li style='width:50%;'>Thời gian</li>
                                <li style='width:50%;'>Tổng tiền</li> 
                            </ul>`
            for(var d of data)
            {
                var body = document.createElement('ul')
                body.className = 'danhsach-item text-center'
                body.innerHTML = `<li style='width:50%;'>${d[0]}</li>
                                <li style='width:50%;'>${trans(d[1])}</li> `
                table.appendChild(body)
            }
        }
    });
}


function trans(Gia)
{
    let gia = Gia
    let stringGia = 'đ';
    let count = 0;
    while(gia > 0)
    {
        stringGia = (gia%10) + stringGia;
        gia = parseInt(gia/10);
        count +=1;
        if(count == 3 && gia != 0)
        {
            stringGia = '.' + stringGia;
            count = 0;
        }
    }
    return stringGia;
}