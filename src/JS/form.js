function checkError(element, id)
{
    if (element.value == '') {
        document.getElementById(id).classList.remove("cache");
    }
    else{
        document.getElementById(id).classList.add("cache");
    }
}
function checkCBox(element, id)
{
    if(element.checked == false) {
        document.getElementById(id).classList.remove("cache");
    }
    else{
        document.getElementById(id).classList.add("cache");
    }
}

document.querySelector("form").addEventListener("submit", (ev) =>
{
    ev.preventDefault();
    checkError(nom, "name");
    checkError(prenom, "lname")
    checkError(mail,"mail1")
    checkCBox (cgu,"CGU")
    ev.preventDefault();
    
});