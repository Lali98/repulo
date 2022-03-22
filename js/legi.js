legi_tar = ["Endeavor Air Inc.", "American Airlines Inc.", "Alaska Airlines Inc.", "JetBlue Airways", "Delta Air Lines Inc.", "ExpressJet Airlines Inc.", "Frontier Airlines Inc.", "Allegiant Air", "Hawaiian Airlines Inc.", "Envoy Air", "Spirit Air Lines", "PSA Airlines Inc.", "SkyWest Airlines Inc.", "United Air Lines Inc.", "Southwest Airlines Co.", "Mesa Airlines Inc.", "Republic Airline", "ExpressJet Airlines LLC"];

function fel(){
    for(let i = 0; i < legi_tar.length; i++){
        let ua = document.createElement("a");
        ua.setAttribute("href", "#");
        let usz = document.createTextNode(legi_tar[i]);
        ua.appendChild(usz);
        let uli = document.createElement("li");
        uli.appendChild(ua);
        document.getElementById("felsor").appendChild(uli);
    }
}