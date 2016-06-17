/****************************************************************************************
 * 							Functions for STRINGS and ARRAYS							*
 * 																						*
 * 		Author	: Ousmane SENE															*
 * 		Year	: 2014																	*
 * 		Version	: 1.0																	*
 ****************************************************************************************/
function test_bdi()
{
	var name = 'JAG';
	
	var bdi = new BDI(name);
	var maslow = [];
	
	maslow.push({'name':'security', 'category':['authentification', 'access', 'crypt']});
	maslow.push({'name':'persistence', 'category':['read', 'write', 'update', 'delete']});
	maslow.push({'name':'connection', 'category':['push', 'pull']});
	maslow.push({'name':'display', 'category':['show', 'hide']});
	maslow.push({'name':'files', 'category':['download', 'upload']});
	
	bdi.maslow = maslow;
	
	bdi.addDesire('home-page', 'display.show');
	bdi.addDesire('login-form', "security.authentification", 1);
	bdi.makeChoice();
	
	alert(bdi.getIntentions());
}

test_bdi();