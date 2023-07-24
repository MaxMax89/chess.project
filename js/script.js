$(function () {

    $(document).on("click", ".white", activateCell);
    $(document).on("click", ".black", deactivateCell);


    function activateCell() {
        var cell = $(this);
        var attributeCell = cell.attr("data-cell");

        cell.addClass("black");
        cell.removeClass("white");

        $.get("ajax/cell.saver.php?cmd=add&cell=" + attributeCell);


    }

    function deactivateCell() {
        var cell = $(this);
        var attributeCell = cell.attr("data-cell");

        cell.addClass("white");
        cell.removeClass("black");

        $.get("ajax/cell.saver.php?cmd=dell&cell=" + attributeCell);
    }

});