function triggerclick(){
    document.querySelector('#imf').click();
}
function dispimg(e){
    if(e.files['0']){
        var reader= new FileReader();
        reader.onload=function(e){
            document.querySelector('#pimage').setAttribute('src',e.target.result);
        }
        reader.readAsDataURL(e.files['0']);
    }
}
function profile(f){
    document.querySelector('#pimage').setAttribute('src',f);
}