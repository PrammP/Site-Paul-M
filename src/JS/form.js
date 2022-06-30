let e;

function checkError(element, id)
{
    if (element.value == '') {
        document.getElementById(id).classList.remove("cache");
        e.preventDefault();
    }
    else{
        document.getElementById(id).classList.add("cache");
    }
}

document.querySelector("form").addEventListener("submit", (ev) =>
{
    e = ev;
    checkError(nom, "name");
    checkError(prenom, "lname")
    checkError (sujet,"subject")
    checkError(mail,"mail1")
    
    
    
});