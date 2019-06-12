$(document).ready(function () {
    var counter = 0;

    $("#addrow").on("click", function () {
        var newRow = $("<tr>");
        var cols = "";

        cols += '<td><input type="text" class="form-control" name="fname' + counter + '"/></td>';
        cols += '<td><input type="text" class="form-control" name="sname' + counter + '"/></td>';
        cols += '<td><input type="text" class="form-control" name="ama' + counter + '"/></td>';
        cols += '<td><input type="text" class="form-control" name="salary' + counter + '"/></td>';

        cols += '<td><input type="button" class="ibtnDel btn btn-md btn-outline-danger "  value="Διαγραφή"></td>';
        newRow.append(cols);
        $("table.order-list").append(newRow);
        counter++;
    });

    $("table.order-list").on("click", ".ibtnDel", function (event) {
        $(this).closest("tr").remove();       
        counter -= 1
    });

});


function calculatePayments() {
    var total = 0;
    $("table.order-list").find('input[name^="salary"]').each(function () {
        total += +$(this).val();
    });
    total *= 0.15;
    $("#total").text(total.toFixed(2));
}