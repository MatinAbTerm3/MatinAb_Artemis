function radioCheck()
{
    if(document.getElementById("yes1").checked)
    {
        //Do Nothing
    }
    else if(document.getElementById("no1").checked)
    {
        document.getElementById("hide1").style.display = "block";
    }
    else if(document.getElementById("yes2").checked)
    {
        //Do nothing
    }
    else if(document.getElementById("no2").checked)
    {
        document.getElementById("hide2").style.display = "block";
    }
    else if(document.getElementById("yes3").checked)
    {
        document.getElementById("hide3").style.display = "block";
    }
    else if(document.getElementById("no3").checked)
    {
        document.getElementById("hide3").style.display = "block";
    }
}