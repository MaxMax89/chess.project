$(function () {

    var currentColor = $.cookie('currentColor');


    $(document).on("click", ".select_color", selectColor);
    $(document).on("click", ".cell_board", changeColor);
    $(document).on("click", ".color_reset", resetColorBoard);





    function changeColor() {
        var $cell = $(this);
        var attributeCell = $cell.attr("data-cell");
        if ($cell.attr("data-bgcolor") === currentColor) {
            resetColor($cell);
        } else {
            setCurrentColor($cell, currentColor);
        }
    }

    function selectColor() {
        var $cell = $(this);
        currentColor = $cell.attr("data-cell");
        $("tr td.active").removeClass("active");
        $cell.addClass("active");
        $.cookie('currentColor', currentColor, {expires: 7, path: '/'});
    }

    function resetColor($cell) {
        var currentColor = "white";
        $cell.css("background-color", currentColor);
        $cell.attr("data-bgcolor", currentColor);
        var attributeCell = $cell.attr("data-cell");
        saveColor(attributeCell, currentColor)
    }




    function setCurrentColor($cell, currentColor) {

        var attributeCell = $cell.attr("data-cell");
        $cell.css("background-color", currentColor);
        $cell.attr("data-bgcolor", currentColor);
        saveColor(attributeCell, currentColor)
    }

    function saveColor(attributeCell, currentColor) {
        var cookie = $.cookie('cell');
        if (cookie !== undefined) {
            $.cookie('cell', cookie + attributeCell + ":" + currentColor + ";", {expires: 7, path: '/'});
        } else {
            $.cookie('cell', attributeCell + ":" + currentColor + ";", {expires: 7, path: '/'});
        }
    }

    function resetColorBoard() {
        var $chess = $(".cell_board");
        $chess.css("background-color", "white");
        $.removeCookie('cell', {path: '/'});

    }

});