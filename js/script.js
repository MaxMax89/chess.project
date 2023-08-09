$(function () {


    $(document).on("click", ".white", activateCell);
    $(document).on("click", ".black", deactivateCell);
    $(document).on("click", ".select_color", selectColor);


function selectColor(){
    var  cell = $(this);
    var bgCell = cell.attr("data-cell");
    console.log(bgCell);
    $.get("ajax/cell.saver.php?cmd=selectColor&color=" + bgCell);
}

    function activateCell() {
        var cell = $(this);
        var attributeCell = cell.attr("data-cell");
        $.ajax({url:"ajax/bg.color.txt", success: function (color){
            console.log("patetoo");
            cell.css("background-color", color);
        cell.addClass("black");
        cell.removeClass("white");
        }})

        cell.css("background-color", "blue");
        cell.addClass("black");
        cell.removeClass("white");


        $.get("ajax/cell.saver.php?cmd=add&cell=" + attributeCell);


    }

    function deactivateCell(color) {
        var cell = $(this);
        var attributeCell = cell.attr("data-cell");
        cell.css("background-color", "white");
        cell.addClass("white");
        cell.removeClass("black");

        $.get("ajax/cell.saver.php?cmd=dell&cell=" + attributeCell);
    }

});