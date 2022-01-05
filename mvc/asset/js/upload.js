function upload(controller,action,clas)
{
    var modal = document.getElementById(action+clas);
    var fileIp = modal.querySelector('#image');
    var file = fileIp.files[0];
    var mess = document.getElementById('ThongBaoModal');
    var expensions= ["image/jpeg","image/jpg","image/png"];
    if(expensions.indexOf(file.type) == -1){
        var content = mess.querySelector('#Content-Thongbao');
        content.innerHTML = "Chỉ hỗ trợ upload file JPEG,JPG hoặc PNG.";         
        $('#ThongBaoModal').modal('toggle');
    }
    else if(file.size > 2*1024*1024) {
        var content = mess.querySelector('#Content-Thongbao');
        content.innerHTML = 'Kích thước file không được lớn hơn 2MB';        
        $('#ThongBaoModal').modal('toggle');
    }
    else
    {

        let t = new Date();
        var name_tmp = parseInt(Math.random()*1000)+t.getTime()+ file.name.slice((file.name.indexOf('.')));

        var xhr = new XMLHttpRequest();
        xhr.open('POST','index.php?controller=' +controller+ '&action=upload'+ '&class=' + clas);
        var formData = new FormData();
        formData.append('name',name_tmp)
        formData.append('myfile',file);

        xhr.send(formData);
        xhr.addEventListener('load',e =>{
            if (xhr.readyState === 4 && xhr.status ===200)
            {
                let response = xhr.responseText;
                response = JSON.parse(response);
                modal.querySelector('#Anh').src = "asset/image/"+clas +"/" + name_tmp

                var content = mess.querySelector('#Content-Thongbao');
                content.innerHTML = response.data;        
                $('#ThongBaoModal').modal('toggle');
            }
        });
        
    }

   
}