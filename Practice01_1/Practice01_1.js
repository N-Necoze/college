document.getElementById("save").onclick = function() {
    let checkSaveFlg = window.confirm('CLICK COMPLETE');
    
    if(checkSaveFlg) {
      document.getElementById("saveResult").textContent = "OKが選択されました。";
    } else {
      document.getElementById("saveResult").textContent = "キャンセルが選択されました。";
    }
  };
  // 