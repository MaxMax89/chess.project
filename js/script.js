$(function () {
    $(document).on("click", ".white", activateCell);
    $(document).on("click", ".black", deactivateCell);


    function activateCell() {
        var addCell = $(this);
        var attributeCell = addCell.attr("data-cell");

        addCell.addClass("black");
        addCell.removeClass("white");

        $.get("ajax/cell.saver.php?cmd=add&cell=" + attributeCell);


    }

    function deactivateCell() {
        var dellCell = $(this);
        var attributeCell = dellCell.attr("data-cell");

        dellCell.addClass("white");
        dellCell.removeClass("black");

        $.get("ajax/cell.saver.php?cmd=dell&cell=" + attributeCell);
    }

});