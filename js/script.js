$(function () {
    $(document).on("click", ".white", onClickCell);

    // path?cmd=add&cell=a1  // Добавление
    // path?cmd=dell&cell=b1 // Удаление


    function onClickCell() {
        var $cell = $(this);
        var info = $cell.attr("data-cell");

        if ($cell.hasClass("black")) {
            $cell.removeClass("black");
            sendData(info, "remove");
        } else {
            $cell.addClass("black");
            sendData(info, "add");
        }
    }

function sendData(info, flag){

        if(flag=="remove"){

        } else {

        }
        // $.get("ajax/cell.saver.php?cmd=add&cell=a1);

    $.get("ajax/cell.saver.php?info=" + info);

}

function activateCell(){

}

function deactivateCell(){

}

});