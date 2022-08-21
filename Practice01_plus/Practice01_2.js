const btn = document.getElementById('btn');
const saveResult = document.getElementById('saveResult');
btn.addEventListener('click',function(){
    const choice = window.confirm('CLICK COMPLETE');
    if(choice){
        saveResult.textContent = "OKが選択されました。";
    }
    else{
        saveResult.textContent = "キャンセルが選択されました。";
    }
})
