






function myFunction() {
    var x = document.getElementById("myTopnav");
    if (x.className === "topnav") {
        x.className += " responsive";
    } else {
        x.className = "topnav";
    }
}























function otvori(id){

	if(id==1){
		document.getElementById("pocetna").setAttribute("href", "index.html");
	}

	if(id==2){
		document.getElementById("onama").setAttribute("href", "onama.html");
	}

	if(id==3){
		document.getElementById("galerija").setAttribute("href", "galerija.html");
	}

	if(id==4){
		document.getElementById("zaposleni").setAttribute("href", "zaposleni.html");
	}

	if(id==5){
		document.getElementById("prijava").setAttribute("href", "prijava.html");
	}

	if(id==6){
		document.getElementById("kontakt").setAttribute("href", "kontakt.html");
	}

	if(id==7){
		document.getElementById("link").setAttribute("href", "index.html");
	}


}