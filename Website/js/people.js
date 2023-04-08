function people(that){
    if (that.value == "studying room") {
        document.getElementById("sr").style.display = "block";
    } else {
        document.getElementById("sr").style.display = "none";
    }


    if (that.value == "lab") {
        document.getElementById("l").style.display = "block";
    } else {
        document.getElementById("l").style.display = "none";
    }



    if (that.value == "meeting") {
        document.getElementById("m").style.display = "block";
    } else {
        document.getElementById("m").style.display = "none";
    }




}