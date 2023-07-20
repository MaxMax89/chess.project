$(function () {
    $(document).on("click", ".white", onClickCell);

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

              $.get("ajax/cell.saver.php?info=" + info);


}

});