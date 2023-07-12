$(function () {
    $(document).on("click", ".white", onClickCell);

    function onClickCell() {
        var $cell = $(this);

        if ($cell.hasClass("black")) {
            $cell.removeClass("black");
        } else {

            $cell.addClass("black");
        }
    }


});