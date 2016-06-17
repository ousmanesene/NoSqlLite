/****************************************************************************************
 * 										BDI MODULE										*
 * 																						*
 * 		Author	: Ousmane SENE															*
 * 		Year	: 2014																	*
 * 		Version	: 1.0																	*
 ****************************************************************************************/
function BDI(_name){
	var self = this;
	
	self.name = _name;
	self.maslow = [];
	self.desireList = [];
	self.intentionList = [];
	
	
	/****************************************************************************************
	 * 		Function name	:	makeChoice													*
	 * 		Author			:	Ousmane SENE												*
	 * 		Date			:	21 january 2014												*
	 * 																						*
	 * 		Description		:	Reorganize the intentionList based on desire and maslow.	*
	 * 																						*
	 ****************************************************************************************/
	self.makeChoice = function(){
		var maslowName;
		var maslowCategory;
		var desires;
		var i
		var j;
		var k;
		
		self.intentionList = [];
		// Ordering desires based on each level of the Maslow pyramide
		for (i = 0; i < self.maslow.length; i++)
		{
			maslowName = self.maslow[i]['name'];
			// Ordering desires based on each category of the current level
			for (j = 0; j < self.maslow[i]['category'].length; j++)
			{
				maslowCategory = self.maslow[i]['category'][j];
				desires = self.getDesiresByCategory(maslowName, maslowCategory);
				for (k = 0; k < desires.length; k++)
					self.intentionList.push(desires[k]);
			}
		}
	};
	
	self.addDesire = function(desire, category, rank){
		var obj = {};
		obj[desire] = {'desire':desire, 'category':category, 'rank':rank};
		self.desireList.push(obj);
	};
	
	
	self.getDesiresByCategory = function(level, _category){
		var result = [];
		var i;
		var desire;
		var category = level+'.'+_category;
		var tempCategory;
		
		for (i = 0; i < self.desireList.length; i++)
		{
			desire = self.desireList[i];
			tempCategory = getDeepValueByKey(desire, 'category');
			if (tempCategory.length != 0 && tempCategory[0] == category)
				result.push(desire);
		}
		
		return (result);
	}
	
	self.setMaslow = function(maslow){self.maslow = maslow;};
	self.getMaslow = function(){return (self.maslow);};
	self.removeDesire = function(desire){unset(self.desireList[desire]);};
	self.getIntentions = function(){return (self.intentionList);};
}