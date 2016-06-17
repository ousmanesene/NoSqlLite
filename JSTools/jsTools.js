/****************************************************************************************
 * 							Functions for STRINGS, ARRAYS and OBJECTS					*
 * 																						*
 * 		Author	: Ousmane SENE															*
 * 		Year	: 2014																	*
 * 		Version	: 1.0																	*
 ****************************************************************************************/

								// STRINGS

/****************************************************************************************
 * 		Function name	:	trim														*
 * 		Author			:	Ousmane SENE												*
 * 		Date			:	21 january 2014												*
 * 																						*
 * 		Description		:	Replace all the whites spaces before and after the given 	*
 * 							string.														*
 * 																						*
 * 		Example			:	var str = ' This is a test ';								*
 * 							var str2 = trim(str);										*
 * 																						*
 * 							alert(str2);	// Should output 'This is a test'			*
 * 																						*
 ****************************************************************************************/
function trim (myString){return (myString.replace(/^\s+/g,'').replace(/\s+$/g,''));}

/****************************************************************************************
 * 		Function name	:	uniqid														*
 * 		Author			:	Ousmane SENE												*
 * 		Date			:	21 january 2014												*
 * 																						*
 * 		Description		:	Generate a uniqid with only numbers.						*
 * 																						*
 * 		Example			:	var id = uniqid();											*
 * 																						*
 * 							alert(id);	// Should output something like '168464'		*
 * 																						*
 ****************************************************************************************/
function uniqid()
{
	var n=Math.floor(Math.random()*11);
	var k = Math.floor(Math.random()* 1000000);
	
	return (String.fromCharCode(n)+k);
}

								// ARRAYS

/****************************************************************************************
 * 		Function name	:	isset														*
 * 		Author			:	Ousmane SENE												*
 * 		Date			:	21 january 2014												*
 * 																						*
 * 		Description		:	Check if the given key is a property in an array of object.	*
 * 																						*
 * 		Example			:	var obj1 = {'foo':'bar', 'bar':'foo'};						*
 * 							var obj2 = {'key':'value'};									*
 * 							var myArray = [obj1, obj2];									*
 * 																						*
 * 							var bool1 = isset(myArray, 'foo');		// true				*
 * 							var bool2 = isset(myArray, 'bar');		// true				*
 * 							var bool3 = isset(myArray, 'value');	// false			*
 * 							var bool4 = isset(myArray, 'key');		// true				*
 * 																						*
 ****************************************************************************************/
function isset(objectArray, key)
{
	for (var i = 0; i < objectArray.length; i++)
		if (objectArray[i].hasOwnProperty(key))
			return (true);
		return (false);
}

/****************************************************************************************
 * 		Function name	:	getObjectArrayByKey											*
 * 		Author			:	Ousmane SENE												*
 * 		Date			:	21 january 2014												*
 * 																						*
 * 		Description		:	Return the value of the object linked to the key in the 	*
 * 							given array.												*
 * 																						*
 * 		Example			:	var obj1 = {'foo':'bar', 'bar':'foo'};						*
 * 							var obj2 = {'key':'value'};									*
 * 							var myArray = [obj1, obj2];									*
 * 																						*
 * 							var res1 = getObjectArrayByKey(myArray, 'foo');		// 'bar'*
 * 							var res2 = getObjectArrayByKey(myArray, 'bar');		// 'foo'*
 * 							var res3 = getObjectArrayByKey(myArray, 'value');	// false*
 * 							var res4 = getObjectArrayByKey(myArray, 'key');	// 'value'	*
 * 																						*
 ****************************************************************************************/
function getObjectArrayByKey(objectArray, key)
{
	for (var i = 0; i < objectArray.length; i++)
		if (objectArray[i].hasOwnProperty(key))
			return (objectArray[i][key]);
		return (false);
}

/****************************************************************************************
 * 		Function name	:	unset														*
 * 		Author			:	Ousmane SENE												*
 * 		Date			:	21 january 2014												*
 * 																						*
 * 		Description		:	Remove an object from an array. You could use delete 		*
 * 							instead of this function if you just want to the set the 	*
 * 							value in the array as 'undefined' or you don't want to		*
 *							change the size of the array.								*
 * 																						*
 * 		Example			:	var obj1 = {'foo':'bar', 'bar':'foo'};						*
 * 							var obj2 = {'key':'value'};									*
 * 							var myArray = [obj1, obj2];									*
 * 																						*
 * 							var res1 = isset(myArray, 'foo');		// [obj2]			*
 * 							var res2 = isset(myArray, 'bar');		// [obj2]			*
 * 							var res3 = isset(myArray, 'value');		// false			*
 * 							var res4 = isset(myArray, 'key');		// [obj1]			*
 * 																						*
 ****************************************************************************************/
function unset(objectArray, key)
{
	for (var i = 0; i < objectArray.length; i++)
		if (objectArray[i].hasOwnProperty(key))
		{
			objectArray.splice(i, 1);
			return (objectArray);
		}
	return (false);
}

/****************************************************************************************
 * 		Function name	:																*
 * 		Author			:	Ousmane SENE												*
 * 		Date			:	21 january 2014												*
 * 																						*
 * 		Description		:																*
 * 																						*
 * 																						*
 * 																						*
 * 		Example			:																*
 * 																						*
 * 																						*
 * 																						*
 * 																						*
 * 																						*
 * 																						*
 * 																						*
 ****************************************************************************************/


								// OBJECTS

function getObjectKeys(_object)
{
	var keys = [];
	
	for(var k in _object)
		keys.push(k);

	return(keys);
}

function getDeepValueByKey(_object, key)
{
	var results = [];
	var value;
	var keys = getObjectKeys(_object);
	
	for (var i = 0; i < keys.length; i++)
	{
		if (keys[i] == key)
			results.push(_object[key]);
		else if (typeof(_object[keys[i]] == 'object' && _object[keys[i]] != null))
		{
			value = [];
			value = getDeepValueByKey(_object[keys[i]], key);
			if (value.length > 0)
				results.push(value);
		}
	}
	
	return (results);
}
