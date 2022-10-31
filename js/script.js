/* Select */
var search = document.getElementById('pesquisar');


    search.addEventListener("keydown", function(event){
        if(event.key === "Enter"){
            searchData();
        }
    });

    function searchData(){
        window.location = 'sistema.php?search='+search.value;
    }



















