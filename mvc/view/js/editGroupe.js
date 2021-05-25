function addItem() {

    var html = "<tr>";
        html += "<td> <input type='hidden' name='id'></td>";
        html += "<td><input type='text' name='GroupeLibelle[]'></td>";
        html += "<td><input type='number' name='GroupeEffectif[]'></td>";
        html += "<td><button class='btn btn-warning' type='button' onclick='deleteRow(this);'>annuler</button></td>"
        html += "</tr>";

    var row = document.getElementById("tbody").insertRow();
    row.innerHTML = html;

}

function deleteRow(button) {
    button.parentElement.parentElement.remove();
}

function modifie(e){
    document.getElementById('Glibellelabel'+e).style.display="none";
    document.getElementById('Glibelle'+e).style.display="block";
    document.getElementById('GeffectifLabel'+e).style.display="none";
    document.getElementById('Geffectif'+e).style.display="block";
    document.getElementById('btnedit'+e).style.display="none";
    document.getElementById('btndelet'+e).style.display="none";
    document.getElementById('btnsave'+e).style.display="inline-block";
    document.getElementById('btncancel'+e).style.display="inline-block";
}

function cancel(e)
{
    document.getElementById('libellelabel'+e).style.display="block";
    document.getElementById('libelle'+e).style.display="none";
    document.getElementById('effectifLabel'+e).style.display="block";
    document.getElementById('effectif'+e).style.display="none";
    document.getElementById('btnedit'+e).style.display="inline-block";
    document.getElementById('btndelet'+e).style.display="inline-block";
    document.getElementById('btnsave'+e).style.display="none";
    document.getElementById('btncancel'+e).style.display="none";
}