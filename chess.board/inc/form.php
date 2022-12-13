<div class ="form_conteiner">

	<form class="chess_form" method="post">
		<div class>
			<input type="text" value="<?$_POST["colorOne"]?>" name="colorOne" placeholder="введите цвет поля 1"/>
		</div>
		<div>	
			<input type="text" value="<?$_POST["colorTwo"]?>" name="colorTwo" placeholder="введите цвет поля 2"/>
		</div>
		<div>	
			<input type="text" value="<?$_POST["countRow"]?>" name="countRow" placeholder="введите количество строк"/>
		</div>
		<div>
			<input type="text" value="<?$_POST["countCol"]?>" name="countCol" placeholder="введите количество столбцов"/>
		</div>
		<button>ОТПРАВИТЬ</button>

	</form>

</div>