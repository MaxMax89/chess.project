$(function () {

    var currentColor = "darkgray"; // default;
    var ajaxURL  = "ajax/cell.saver.php";

    $(document).on("click", ".select_color", selectColor);
    $(document).on("click", ".cell_board", changeColor);

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
        currentColor = $cell.attr("data-bgcolor");
        $("tr td.active").removeClass("active");
        $cell.addClass("active");
        //console.log("selectColor");
    }

    function resetColor($cell){
        $cell.css("background-color", "white");
        $cell.attr("data-bgcolor", "white");
        var attributeCell = $cell.attr("data-cell");

        $.get(ajaxURL + "?cmd=add&cell=" + attributeCell + ":white;");
    }

    function setCurrentColor($cell, currentColor){

        var attributeCell = $cell.attr("data-cell");
        $cell.css("background-color", currentColor);
        $cell.attr("data-bgcolor", currentColor);

        $.get(ajaxURL + "?cmd=add&cell=" + attributeCell + ":" + currentColor + ";");
    }


});