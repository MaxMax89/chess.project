$(function () {


    $(document).on("click", ".cell_board", activateCell);
    $(document).on("click", ".select_color", selectColor);

    var colorCell = "black";

    function selectColor() {
        var cell = $(this);
        colorCell = cell.attr("bgcolor");
        $("tr td.active").removeClass("active");
        cell.addClass("active");
        $.get("ajax/cell.saver.php?cmd=selectColor&color=" + colorCell);
    }


    function activateCell() {
        var cell = $(this);
        var attributeCell = cell.attr("data-cell");
        if (colorCell == "black") {
            cell.css("color", "white");
            cell.css("background-color", colorCell);
            $.get("ajax/cell.saver.php?cmd=add&cell=" + attributeCell + ":" + colorCell + ";");


        } else {
            cell.css("color", "black");
            cell.css("background-color", colorCell);
            $.get("ajax/cell.saver.php?cmd=add&cell=" + attributeCell + ":" + colorCell + ";");
        }


    }

});