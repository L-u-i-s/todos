CREATE TABLE todos (
	id INTEGER PRIMARY KEY AUTOINCREMENT,
	task CHAR(128) NOT NULL,
	status INTEGER NOT NULL default 0,
	created_at DATETIME default current_timestamp,
	updated_at DATETIME default current_timestamp
);

INSERT INTO todos
	(id, task, status)
VALUES
	(NULL, "Get milk", 0),
	(NULL, "Walk the dog", 0),
	(NULL, "Learn MVC", 0);

CREATE TABLE lookup (
	id INTEGER PRIMARY KEY AUTOINCREMENT,
	type CHAR(128) NOT NULL,
	code INTEGER NOT NULL,
	value CHAR(128)
);

INSERT INTO lookup
	(id, type, code, value)
VALUES
	(NULL, 'todo.status', 0, 'new'),
	(NULL, 'todo.status', 1, 'working'),
	(NULL, 'todo.status', 2, 'done'),
	(NULL, 'todo.status', 3, 'archived');

/*CREATE TABLE css_class (
	id INTEGER PRIMARY KEY AUTOINCREMENT,
	type CHAR(128) NOT NULL,
	code INTEGER NOT NULL,
	itemCssClass CHAR(128),
	labelCssClass CHAR(128),
	buttonCssClass CHAR(128),
	buttonIconClass CHAR(128)
);

INSERT INTO css_class
	(id, type, code, itemCssClass, labelCssClass, buttonCssClass, buttonIconClass)
VALUES
	(NULL, 'todo.status', 0, 'list-group-item-info', 'label-info', 'btn-default', 'glyphicon-plus'),
	(NULL, 'todo.status', 1, 'list-group-item-warning', 'label-warning', 'btn-warning', 'glyphicon-cog'),
	(NULL, 'todo.status', 2, 'list-group-item-success', 'label-success', 'btn-success', 'glyphicon-ok'),
	(NULL, 'todo.status', 3, 'disabled', 'label-default', 'btn-default', 'glyphicon-save');