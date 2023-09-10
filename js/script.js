$(function () {


    $(document).on("click", ".cell_board", changeColorCell);
    $(document).on("click", ".select_color", selectColor);


    var colorCell = "darkgray";

    function selectColor() {
        var cell = $(this);
        colorCell = cell.attr("data-bgcolor");
        $("tr td.active").removeClass("active");
        cell.addClass("active");

    }


    function changeColorCell() {
        var cell = $(this);
        var attributeCell = cell.attr("data-cell");
        if (cell.attr("data-bgcolor") === colorCell) {
            cell.css("background-color", "white");
            cell.attr("data-bgcolor", "white");
            $.get("ajax/cell.saver.php?cmd=add&cell=" + attributeCell + ":white;");

        } else {
            cell.css("background-color", colorCell);
            cell.attr("data-bgcolor", colorCell);
            $.get("ajax/cell.saver.php?cmd=add&cell=" + attributeCell + ":" + colorCell + ";");
        }

    }


});