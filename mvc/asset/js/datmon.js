var fullSize = '';
var Tong_Tien;
function nextSize(MaSP,SoLuong)
{
    var item = document.getElementById(MaSP);
    var size = item.querySelector('.size');
    var count = parseInt(size.innerHTML);
    if(count == SoLuong)
    {
        fullSize = "Đồ uống này chỉ còn " + SoLuong + " số lượng";
        item.querySelector('.text-danger').innerHTML = fullSize;
        fullSize = '';
    }
    else
    {
        count = count + 1;
        
    }
    size.innerHTML = count;
}

function prevSize(MaSP,SoLuong)
{
    var item = document.getElementById(MaSP);
    var size = item.querySelector('.size');
    var count =  parseInt(size.innerHTML) == 0 ? parseInt(size.innerHTML) : parseInt(size.innerHTML) - 1;
    if(count != SoLuong)
    {
        item.querySelector('.text-danger').innerHTML = fullSize;
    }
    size.innerHTML = count;
}

function datMon(object)
{

    var item = document.getElementById(object.MaSP);
    var size = item.querySelector('.size').innerHTML;

    if(size == 0)
    {
        item.querySelector('.text-danger').innerHTML = "Vui lòng chọn số lượng";
    }
    else
    {
        item.querySelector('.text-danger').innerHTML = "";
        var gia = trans(object.Gia)
        let ul = document.getElementsByClassName('ds-hoaDon')[0];
        let li = document.createElement("li");

        li.innerHTML = `
                        <div class='left'>
                            <span class='soLuong'>${size}</span>
                            <span class='tenMon'>${object.Ten}</span>
                        </div>
                        <div class='right'>
                            <span class='giaTien'>${gia}</span>
                        </div>
                        `
        ul.appendChild(li);
        object.soDat = parseInt(size);

        var xhr = new XMLHttpRequest();
        xhr.open('GET','function.php?cart='+JSON.stringify(object));
        xhr.send();
        xhr.addEventListener('load',e =>{
           if (xhr.readyState === 4 && xhr.status ===200)
           {
                let response = xhr.responseText;
                
                var data = JSON.parse(response);
                Tong_Tien = data.tongTien;
                var Tong_SoLuong = data.tongSoLuong;
            
                var g = trans(Tong_Tien);
                let tong_soluong = document.getElementsByClassName('tong__soLuong')[0];
                let soluong = tong_soluong.querySelector('span');
                
                soluong.innerHTML = Tong_SoLuong;
                let tong_tien = document.getElementsByClassName('tong__tien')[0];
                let tien = tong_tien.querySelector('span');
                tien.innerHTML = g;
              


           }
        });
        
    }
    

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

function payByCash()
{

    let tong_tien = document.getElementsByClassName('tong__tien')[0];
    let tien = tong_tien.querySelector('span');

    let modal = document.getElementById('payByCash');
    let totalBill = modal.querySelector('#totalBill');
    totalBill.innerHTML = tien.innerHTML;
}


function moneyOfCustomer(e,check)
{

    moneyOfCus = parseInt(e.value);
    if(check == 0)
    {
        var exceedCash = document.getElementsByClassName('exceedCash')[check];
        var xhr = new XMLHttpRequest();
        xhr.open('GET','function.php?getCart=0');
        xhr.send();
        xhr.addEventListener('load',e =>{
            if (xhr.readyState === 4 && xhr.status ===200)
            {
                let response = xhr.responseText;
                data = JSON.parse(response);
                
                exceedCash.innerHTML = trans(moneyOfCus - data.tongTien);
                
            }
        });
    }
    else
    {
        var exceedCash = document.getElementsByClassName('exceedCash')[1];
        var CTHD = document.getElementById('totalBillCTHD');
        exceedCash.innerHTML = trans(moneyOfCus - check);
    }
    
            
}
function themMon($MaHD)
{
    var xhr = new XMLHttpRequest();
    xhr.open('GET','index.php?controller=nhanvienbanhang&action=save&class=Hoadon&MaHD='+$MaHD);
    xhr.send();
    xhr.addEventListener('load',e =>{
        if (xhr.readyState === 4 && xhr.status ===200)
        {
            let response = xhr.responseText;  
         
            window.location = 'index.php?controller=nhanvienbanhang&action=index&class=sanpham';
            window.onload();
        }
    });
    
}

function editMon(MaHD)
{
    var xhr = new XMLHttpRequest();
    xhr.open('GET','index.php?controller=nhanvienbanhang&action=edit&class=Hoadon&MaHD='+MaHD);
    xhr.send();
    xhr.addEventListener('load',e =>{
        if (xhr.readyState === 4 && xhr.status ===200)
        {
            window.location = 'index.php?controller=nhanvienbanhang&action=index&class=Hoadon';
            window.onload();
        }
    });
    
}
