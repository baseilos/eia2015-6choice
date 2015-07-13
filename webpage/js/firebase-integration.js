var Database = function() {
	this.connectionRef = new Firebase("https://dazzling-fire-7861.firebaseio.com/6choice/survey");
};

Database.prototype.submit = function(values) {
	var record = this.connectionRef.push({
		timestamp: new Date(),
		values: values
	});	
	return record.key();
};

