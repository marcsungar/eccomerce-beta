function Page(pages){
    /* for (let i = 0; i < pages.length; i++){
        console.log(pages[i]);
        for(let z = 0; z < pages[i].length; z++){
             console.log(pages[i][z]);
         }
    }*/
}
function Check(){
    var page = localStorage.getItem("ActualPage");
    var actual;
    if(page === null){
        localStorage.setItem("ActualPage", "home");
        actual = "home";
        history.replaceState("","","?"+actual);
    }else{
        history.replaceState("","","?"+page);
    }
}