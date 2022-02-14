<script>
    var items = 0;
    function addItem() {
        items++;
 
        var html = "<tr>";
            html += "<td>" + items + "</td>";
            html += "<td><input type='text' name='itemName[]'></td>";
            html += "<td><input type='number' name='itemQuantity[]'></td>";
            html += "<td><input type='number' name='itemPrice[]'></td>";
            html += "<td><button type='button' onclick='deleteRow(this);'>Delete</button></td>"
        html += "</tr>";
 
        var row = document.getElementById("tbody").insertRow();
        row.innerHTML = html;
    }
 
function deleteRow(button) {
    button.parentElement.parentElement.remove();
    // first parentElement will be td and second will be tr.
}
</script>