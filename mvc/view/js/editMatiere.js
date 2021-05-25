function addItem() {

    var html = "<tr>";
        html += "<td> <input type='hidden' name='id'></td>";
        html += "<td><input type='text' name='MatiereLibelle[]'></td>";
        html += "<td><button class='btn btn-warning' type='button' onclick='deleteRow(this);'>annuler</button></td>"
        html += "</tr>";

    var row = document.getElementById("tbody").insertRow();
    row.innerHTML = html;
}

function deleteRow(button) {
    button.parentElement.parentElement.remove();
}

function modifie(e){
    document.getElementById('MtrLibellelabel'+e).style.display="none";
    document.getElementById('MtrLibelle'+e).style.display="block";
    document.getElementById('btnedit'+e).style.display="none";
    document.getElementById('btndelet'+e).style.display="none";
    document.getElementById('btnsave'+e).style.display="inline-block";
    document.getElementById('btncancel'+e).style.display="inline-block";
}

function cancel(e)
{
    document.getElementById('MtrLibellelabel'+e).style.display="block";
    document.getElementById('MtrLibelle'+e).style.display="none";
    document.getElementById('btnedit'+e).style.display="inline-block";
    document.getElementById('btndelet'+e).style.display="inline-block";
    document.getElementById('btnsave'+e).style.display="none";
    document.getElementById('btncancel'+e).style.display="none";
}