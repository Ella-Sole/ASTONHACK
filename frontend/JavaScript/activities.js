let A = document.querySelector("#A");
let R = document.querySelector("#R");
let T = document.querySelector("#T");
let P = document.querySelector("#P");
let L = document.querySelector("#L");
let Litter = document.querySelector("#Litter");
let Tree = document.querySelector("#Tree");
let Recycled = document.querySelector("#Recycled");
let Transport = document.querySelector("#Transport");
let Veg = document.querySelector("#Veg");

A.addEventListener ('click', ()=> {
    Veg.hidden = false;
});

L.addEventListener ('click', ()=> {
    Litter.hidden = false;
});
P.addEventListener ('click', ()=> {
    Transport.hidden = false;
});

R.addEventListener ('click', ()=> {
    Recycled.hidden = false;
});

T.addEventListener ('click', ()=> {
    Tree.hidden = false;
});

Recycled.addEventListener ('click', ()=> {
    Recycled.hidden = true;
    document.querySelector('#Recycled').value = "Recycled";
});

Transport.addEventListener ('click', ()=> {
    Transport.hidden = true;
    document.querySelector('#Transport').value = "Public Transport";
});

Litter.addEventListener ('click', ()=> {
    Litter.hidden = true;
    document.querySelector('#PickedLitter').value = "PickedLitter";
});

Veg.addEventListener ('click', ()=> {
    Veg.hidden = true;
    document.querySelector('#Veg').value = "GrowVeg";
});

Tree.addEventListener ('click', ()=> {
    Tree.hidden = true;
    document.querySelector('#GrowTree').value = "GrowTree";
});
