
const photos = ["../img/changing/chairs/chair1.jpg",
"../img/changing/desks/desk3.webp",
 "../img/changing/elec/elec1.jpg"];
const headers = ["FOTEL BIUROWY ZIRA EFG 500A", 
"Biurko Berg 6 crem/dąb złoty", 
"Mysz APPLE Magic Mouse 2 Biała"];
const conts = ["Fotel gabinetowy Zira - zderzenie piękna z komfortem. Zaprojektowany przez studio Horn Design and Engineering fotel Zira przywodzi na myśl skojarzenia z prestiżowymi przestrzeniami. Stworzony z myślą o zapewnieniu najwyższego poziomu komfortu przy jednoczesnym zachowaniu estetyki. W efekcie powstał fotel, który nie tylko wygląda niesamowicie, ale również zapewnia wsparcie całego ciała. Wraz z intuicyjnym mechanizmem gwarantuje pełną ergonomię i komfort siedzenia na co dzień. Zira to z jednej strony minimalistyczny design, w którym nie ma żadnych zbędnych elementów ponad to co niezbędne.",
"Kolekcja Berg idealni spełni się w aranżacji salonu czy pokoju dziennego. Ciekawie połączenie jasnego cremu z ciepłym kolorem dąb złoty sprawia, że wnętrze nabierze niezwykłego wyglądu. Ryflowane obrzeża oraz małe, zgrabne uchwyty nadają meblom elegancji. Głównym atutem systemu Berg jest funkcjonalność, pakowność oraz minimalistyczna stylistyka. Materiały i solidne wykonanie świadczą o wysokiej jakości mebli Berg.",
"Mysz Magic Mouse 2 oprócz nowego wyglądu i konstrukcji ma akumulator do wielokrotnego ładowania, więc nie potrzebuje tradycyjnych baterii. Jest lżejsza, ma mniej ruchomych części dzięki zastosowaniu wbudowanego akumulatora i jednolitej dolnej powierzchni, a konstrukcja jej spodu została zoptymalizowana, by płynniej i z mniejszym oporem przesuwać się po biurku. Powierzchnia Multi-Touch reaguje na proste gesty, takie jak machnięcia i przewijanie, ułatwiając przechodzenie między stronami internetowymi i przeglądanie dokumentów. Magic Mouse 2 jest gotowa do użytku zaraz po wyjęciu z pudełka i automatycznie łączy się w parę z Twoim komputerem Mac."];
const prices = ["<s>2 200 PLN</s><b> 1 999 PLN </b>",
"<s>500 PLN</s><b> 399 PLN </b>",
"<s>550 PLN</s><b> 400 PLN </b>"];
const links =["../products/chairs/chair1.php",
"../products/desks/desk3.php",
"../products/elec/elec1.php"];
//kamci0
var i = 0;

window.onload = zamien;
window.setInterval(zamienNast, 20000)

function zamien(){
    var photo = document.getElementById('photoSwap');
    var head = document.getElementById('headeU');
    var cont = document.getElementById('contentU');
    var price = document.getElementById("price");
    var link = document.getElementById("sudoP");

    photo.src=photos[i];
    head.innerHTML=headers[i];
    cont.innerHTML=conts[i];
    price.innerHTML=prices[i];
    link.href=links[i];

}


function zamienPop(){
    if(i==0){
        i=2
    }else if(i==1){
        i=0;
    }else if(i==2){
        i=1;
    }
    zamien()
}


function zamienNast(){
    if(i==0){
        i=1
    }else if(i==1){
        i=2;
    }else if(i==2){
        i=0;
    }  
    zamien()
}
