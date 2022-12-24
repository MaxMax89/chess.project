<div class ="form_conteiner">

	<form class="chess_form" method="post">
		<div class>
			<label class="text_input">Введите цвет HTML</label>
			<input type="text" value="<?echo $userColorOne?>" name="colorOne" placeholder="введите цвет поля 1"/>
		</div>
		<div>
			<label class="text_input">Введите цвет HTML</label>	
			<input type="text" value="<?echo $userColorTwo?>" name="colorTwo" placeholder="введите цвет поля 2"/>
		</div>
		<div>
		    <label class="text_input">Введите количество строк</label>
			<input type="number" value="<?echo $countRow?>" max="26" name="countRow" placeholder="max 26"/>
		</div>
		<div>
			<label class="text_input">Введите количество столбцов</label>
			<input type="number" value="<?echo $countCol?>" max="26" name="countCol" placeholder="max 26"/>
		</div>
		<button>ОТПРАВИТЬ</button>

	</form>

</div>