function showContent() {

    check = document.getElementById("check");
    pedimento = document.getElementById("pedimento");
    if (check.checked) {
        /*element.style.display='block';
         document.getElementById("pedimento").style.display = "block";*/
        pedimento.readOnly = true;
        pedimento.value = "";
        pedimento.style.backgroundColor = "#03E7F7";
        pedimento.placeholder = "No Aplica";

    }
    else {
        /*element.style.display='none';
         document.getElementById("pedimento").style.display = "none";*/
        pedimento.readOnly = false;
        pedimento.style.backgroundColor = "white";
        pedimento.placeholder = "";

    }
}
var base_url = document.location.origin + "/master";
$(document).ready(function() {

    $('#sku').change(function() {
        var sku = $(this).val();
        $.ajax({
            url: base_url + '/Products/productsDetails',
            method: 'post',
            data: {sku: sku},
            dataType: 'json',
            success: function(response) {
                var len = response.length;
                $('#sidproducto,#sdescripcion,#sprecio,#sstock').text('');
                if (len > 0) {
                    // Read values
                    var idproducto = response[0].id;
                    var descripcion = response[0].description;
                    var precio = response[0].price;
                    var stock = response[0].qty;



                    $('#sidproducto').val(idproducto);
                    $('#sdescripcion').text(descripcion);
                    $('#sprecio').text(precio);
                    $('#sstock').text(stock);

                }

            }
        });
    });
});


function showInpEntrada() {
    getSelectValue = document.getElementById("tipo_documento").value;
    if (getSelectValue === "") {
        document.getElementById("vacio").style.display = "inline-block";
        document.getElementById("vale_garantia").style.display = "none";

        document.getElementById("factura").style.display = "none"
        document.getElementById("factura").disabled = true;
        document.getElementById("porajuste").style.display = "none";

    } else if (getSelectValue === "Compra") {
        document.getElementById("factura").disabled = false;
        document.getElementById("vale_garantia").disabled = true;
        document.getElementById("porajuste").disabled = true;
        document.getElementById("factura").style.display = "inline-block";
        document.getElementById("vacio").style.display = "none";
        document.getElementById("vale_garantia").style.display = "none";
        document.getElementById("porajuste").style.display = "none";

    } else if (getSelectValue === "Devolución") {
        document.getElementById("factura").disabled = true;
        document.getElementById("vale_garantia").disabled = false;
        document.getElementById("vacio").style.display = "none";
        document.getElementById("factura").style.display = "none";
        document.getElementById("porajuste").disabled = true;
        document.getElementById("vale_garantia").style.display = "inline-block";
        document.getElementById("porajuste").style.display = "none";

    } else if (getSelectValue === "Ajuste") {
        document.getElementById("vacio").style.display = "none";
        document.getElementById("factura").disabled = true;
        document.getElementById("vale_garantia").disabled = true;
        document.getElementById("factura").style.display = "none";
        document.getElementById("vale_garantia").style.display = "none";
        document.getElementById("porajuste").style.display = "inline-block";
        document.getElementById("porajuste").disabled = false;

    }

}

function sumar() {
    m1 = document.getElementById("sstock").innerText;
    m2 = document.getElementById("multiplicador").value;
    r = parseInt(m1) + parseInt(m2);
    document.getElementById("qty").value = r;



    if (document.getElementById("qty").value === "Infinity") {
        document.getElementById("qty").value = " ";
    }
    if (document.getElementById("qty").value === "NaN") {
        document.getElementById("qty").value = " ";
    }

    if (document.getElementById("sstock").innerText === " ") {
        document.getElementById("multiplicador").readOnly = false;
    }

}
function soloNumeros(e) {
    var key = window.Event ? e.which : e.keyCode
    return (key >= 48 && key <= 57)
}


window.onload = function() {
    var myInput = document.getElementById('multiplicador');
    myInput.onpaste = function(e) {
        e.preventDefault();
        //alert("esta acción está prohibida");
    }

    myInput.oncopy = function(e) {
        e.preventDefault();
        // alert("esta acción está prohibida");
    }
}