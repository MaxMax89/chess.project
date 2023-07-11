$(function(){

   // $(".cell").click(onClickCell);
   $("td").click(onClickCell);

   // $(document).on("click", ".cell", onClickCell);

   function onClickCell(){
      var $cell = $(this);

      var info = "A1"; // ЗАГЛУШКА

      if($cell.hasClass("black")){
         $cell.removeClass("black");
         sendData(info, "remove");
      } else {
         $cell.addClass("black");
         sendData(info, "add");
      }

      console.log("CLICKED");
   }

   function sendData(info, flag){

      console.log("info: ", info);

      $.get("/ajax/cellSaver.php?info="+info);

   }

});