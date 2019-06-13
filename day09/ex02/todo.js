window.onload = function() {
	var element = document.getElementById('ft_list');
	element.innerHTML = getCookie("ft_list");
}

function add() {
	var tmp = prompt('Enter new element', 'TO DO');
	if (tmp) {
		var element = document.getElementById('ft_list');
		var link = document.createElement('div');
		link.setAttribute("onclick", "delme(this)");
		tmp = '&#9830 ' + tmp + '<br>';
		link.innerHTML = tmp;
		element.insertBefore(link, element.firstChild);
		setCookie("ft_list", element.innerHTML, 7);
	}
}

function delme( node ) {
	var answer = confirm('Do you want to remove task?');
	if (answer) {
		var element = document.getElementById('ft_list');
		element.removeChild(node);
		setCookie("ft_list", element.innerHTML, 7);
	}
}

function setCookie(cname, cvalue, exdays) {
	var d = new Date();
	d.setTime(d.getTime() + (exdays * 24 * 60 * 60 * 1000));
	var expires = "expires="+ d.toUTCString();
	document.cookie = cname + "=" + cvalue + ";" + expires + ";path=/";
}

function getCookie(cname) {
	var name = cname + "=";
	var decodedCookie = decodeURIComponent(document.cookie);
	var ca = decodedCookie.split(';');
	for(var i = 0; i < ca.length; i++) {
		var c = ca[i];
		while (c.charAt(0) == ' ') {
			c = c.substring(1);
		}
		if (c.indexOf(name) == 0) {
			return c.substring(name.length, c.length);
		}
	}
	return "";
}