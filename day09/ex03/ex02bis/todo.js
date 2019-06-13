var ft_list;
var cookie = [];

$( document ).ready(function () {
	var element = $('#ft_list');
	$('#new').click(add);
	ft_list = $('#ft_list');
	var tmp = document.cookie;
	if (tmp) {
		cookie = JSON.parse(tmp);
	}
});

$(window).unload(function(){
	var todo = ft_list.children();
	var newCookie = [];
	for (var i = 0; i < todo.length; i++)
		newCookie.unshift(todo[i].innerHTML);
	document.cookie = JSON.stringify(newCookie);
})

function add() {
	var tmp = prompt('Enter new element', 'TO DO');
	if (tmp) {
		var element = $('#ft_list');
		var link = $('<div/>');
		link.click(delme);
		tmp = '&#9830 ' + tmp + '<br>';
		link.html(tmp);
		element.prepend(link);
		cookie.ft_list;
	}
}

function delme() {
	var answer = confirm('Do you want to remove task?');
	if (answer) {
		this.remove();
	}
}