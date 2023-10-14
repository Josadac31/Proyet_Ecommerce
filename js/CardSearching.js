
 // filter array 
let filterarray = [];

// gallery card array

let galleryarray = [
    {
        id: 1,
        name: "samsung watch",
        src: "./img/SamsungWatch.png",
        desc: "Se trata de un reloj inteligente que combina funcionalidades de reloj tradicional con características avanzadas de seguimiento de salud y conectividad."
    },
    {
        id: 2,
        name: "iphone 13 pro",
        src: "./img/Iphone13Pro.png",
        desc: "iPhone 13 Pro: Potente smartphone de Apple, cámaras avanzadas, rendimiento excepcional, pantalla ProMotion, diseño elegante, iOS fluido."
    },
    {
        id: 3,
        name: "iphone 11",
        src: "./img/Iphone11.png",
        desc: "iPhone 11: Smartphone de Apple con cámara dual, rendimiento rápido, pantalla Liquid Retina, iOS, y gran valor."
    },
    {
        id: 4,
        name: "simple white watch",
        src: "./img/simplewhitewatch.png",
        desc: "Simple White Watch: es un reloj minimalista de diseño blanco con funciones básicas de hora y estilo elegante."
    },
    {
        id: 5,
        name: "headphone",
        src: "./img/Headphone.png",
        desc: "Los auriculares, comúnmente conocidos como headphones, son dispositivos de audio que se usan para escuchar música o sonidos de forma personal."
    },
    {
        id: 6,
        name: "smart watch",
        src: "./img/SmartWatch.png",
        desc: "Se trata de un reloj inteligente que combina funcionalidades de reloj tradicional con características avanzadas de seguimiento de salud y conectividad."
    },
    {
        id: 7,
        name: "Beats",
        src: "./img/ShpProd1.jpg",
        desc: "Se trata de un reloj inteligente que combina funcionalidades de reloj tradicional con características avanzadas de seguimiento de salud y conectividad."
    },
    {
        id: 8,
        name: "Rocky Mountain",
        src: "./img/ShpProd2.jpg",
        desc: "Se trata de un reloj inteligente que combina funcionalidades de reloj tradicional con características avanzadas de seguimiento de salud y conectividad."
    },
    {
        id: 9,
        name: "Game Console Controller Cable",
        src: "./img/ShpProd3.jpg",
        desc: "Se trata de un reloj inteligente que combina funcionalidades de reloj tradicional con características avanzadas de seguimiento de salud y conectividad."
    },
    {
        id: 10,
        name: "White EliteBook Tablet 810",
        src: "./img/ShpProd4.jpg",
        desc: "Se trata de un reloj inteligente que combina funcionalidades de reloj tradicional con características avanzadas de seguimiento de salud y conectividad."
    },
    {
        id: 11,
        name: "Gore Wear C7",
        src: "./img/ShpProd5.jpg",
        desc: "Se trata de un reloj inteligente que combina funcionalidades de reloj tradicional con características avanzadas de seguimiento de salud y conectividad."
    },
    {
        id: 12,
        name: "Wireless Audio System Multiroom 360",
        src: "./img/ShpProd6.jpg",
        desc: "Se trata de un reloj inteligente que combina funcionalidades de reloj tradicional con características avanzadas de seguimiento de salud y conectividad."
    },
    {
        id: 13,
        name: "Beats",
        src: "./img/ShpProd7.jpg",
        desc: "Se trata de un reloj inteligente que combina funcionalidades de reloj tradicional con características avanzadas de seguimiento de salud y conectividad."
    },
    {
        id: 14,
        name: "Smartwatch 2.0 LTE Wifi",
        src: "./img/ShpProd8.jpg",
        desc: "Se trata de un reloj inteligente que combina funcionalidades de reloj tradicional con características avanzadas de seguimiento de salud y conectividad."
    },
    {
        id: 15,
        name: "Rocky Mountain",
        src: "./img/ShpProd9.jpg",
        desc: "Se trata de un reloj inteligente que combina funcionalidades de reloj tradicional con características avanzadas de seguimiento de salud y conectividad."
    }
    
];

showgallery(galleryarray);

// create function to show card

function showgallery(curarra) {
    document.getElementById("card").innerText = "";
    for (var i = 0; i < curarra.length; i++) {
        document.getElementById("card").innerHTML += `
        <div class="col-md-4 mt-3">
    <div class="card p-3 ps-5 pe-5 text-stard">
        <h4 class="text-capitalize text-center">${curarra[i].name}</h4>
        <img src="${curarra[i].src}" class="mx-auto w-80"  width="80%" height="auto" />
        <p class="mt-2">${curarra[i].desc}</p>        <button class="btn btn-primary w-100 mx-auto add-to-cart">Agregar a la Cesta <i class='fas fa-shopping-basket' style='font-size:18px;color:red'></i></button>
    </div>
</div>
`
    }

}

// For Live Searching Product

document.getElementById("myinput").addEventListener("keyup", function () {
    let text = document.getElementById("myinput").value;

    filterarray = galleryarray.filter(function (a) {
        if (a.name.includes(text)) {
            return a.name;
        }

    });
    if (this.value == "") {
        showgallery(galleryarray);
    }
    else {
        if (filterarray == "") {
            document.getElementById("para").style.display = 'block'
            document.getElementById("card").innerHTML = "";
        }
        else {

            showgallery(filterarray);
            document.getElementById("para").style.display = 'none'
        }
    }

});