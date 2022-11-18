let workers = [
	{
		name: "Иван Степанович",
		department: "Бухгалтерия",
		people: 30,
		note: {
			positin: "Бухгалтер",
			solary: 40000,
		}
	},	
	{
		name: "Светлана Юрьевна",
		deparmment: "Юридический 1",
		people: 30,
		note: {
			position: "Юрист",
			solary: 50000,
		}

	},
	{
		name: "Борис Борисович",
		department: "Юридический 2",
		people: 30,
		note: {
			position: "Юрист",
			solary: 45000,
		}
	},
	{
		name: "Леонид Иванович",
		department: "Бухгалтерия",
		people: 30,
		note: {
			position: "Бухгалтер",
			solary: 40000,
		}
	},
];



let sortworkers = workers.sort(function(a, b) {
	if (a.note.solary < b.note.solary) return -1;
})
	


console.log(sortworkers);