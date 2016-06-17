function trim (myString){return (myString.replace(/^\s+/g,'').replace(/\s+$/g,''));}

function isset(objectArray, key)
{
	for (var i = 0; i < objectArray.length; i++)
		if (objectArray[i].hasOwnProperty(key))
			return (true);
	return (false);
}

function getObjectArrayByKey(objectArray, key)
{
	for (var i = 0; i < objectArray.length; i++)
		if (objectArray[i].hasOwnProperty(key))
			return (objectArray[i][key]);
	return (false);
}

function uniqid()
{
	var n=Math.floor(Math.random()*11);
	var k = Math.floor(Math.random()* 1000000);
	
	return (String.fromCharCode(n)+k);
}

function NoSQLLite(appName){
	var self = this;

	self.appName = appName;
	self.sgbd = [{"default":[]}];
	self.currentDb = self.sgbd[0].default;
	self.isStorable = function(){
		if (!window.localStorage)
			return (false);
		else
			return(true);
	};

	self.createDb = function(_name){
		var name = trim(_name);
		var obj = {};
		
		obj[name] = [];
		if (name.length == 0)
			throw ("Database name must not be empty.");
		else if (!isset(self.sgbd, name))
			self.sgbd.push(obj);
		else
			throw (name+" exist! Please choose another name.");
	};
	
	self.useDb = function(_name){
		name = trim(_name);
		if (name.length == 0)
			throw("Database name must not be empty.");
		else if (!isset(self.sgbd, name))
			throw (name+" does not exist! Please choose a valid database name.");
		else
			self.currentDb = getObjectArrayByKey(self.sgbd, name);
	};
	
	self.createDocument = function(document){
		var idDoc = uniqid();
		var obj = {};
		obj[idDoc] = document;
		self.currentDb.push(obj);
		self.save();
	};
	
	self.save = function(){
		if (!window.localStorage)
			return (false);
		alert(JSON.stringify(self.sgbd));
		localStorage.setItem(self.appName, JSON.stringify(self.sgbd));
	};
}

var db = new NoSQLLite('Lunch');
if (db.isStorable())
{
	db.createDb('services');
	db.useDb('services');
	var product1 = {'name':'Sandwich thon', 'description':'Sandwich au thon et aux crudités', 'price':'0.99', 'currency':'€', 'tag':'thon|triangle'};
	var product2 = {'name':'Banane', 'price':'0.25', 'currency':'€', 'tag':'banane|fruit'};
	var product3 = {'name':'Soda', 'description':'Cannette de cola', 'price':'0.15', 'currency':'€', 'tag':'boisson|coca'};
	var product4 = {'name':'Calamar Fritti', 'description':'Plat de calamar avec des concombres et de la salade', 'price':'12.00', 'currency':'€', 'tag':'calamar|salade|concombre'};
	var product5 = {'name':'Provençale', 'description':'Pizza provençale au champignons et au poivrons', 'price':'9.50', 'currency':'€', 'tag':'pizza|champigon|poivron'};
	
	var repas1 = []; 
	repas1.push({'name':'sandwich classique', 'productList':[product1, product2]});
	repas1.push({'name':'sandwich full', 'productList':[product1, product2, product3]});
	
	
	var repas2 = [];
	repas2.push({'name':'Calamar fritti', 'productList':[product4]});
	repas2.push({'name':'Menu pizza', 'productList':[product5, product3]});
	
	var document1 = {'name':'monoprix', 'location':'63 rue des Fontanots, Nanterre, France', 'hour':'8h : 20h', 'rate':'3', 'menus':repas1};
	var document2 = {'name':'Pizzeria', 'location':'63 rue des Fontanots, Nanterre, France', 'hour':'8h : 15h', 'rate':'4', 'menus':repas2};
	
	db.createDocument(document1);
	db.createDocument(document2);
	alert('end');
}