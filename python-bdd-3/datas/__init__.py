from flask import Flask
from flask_sqlalchemy import SQLAlchemy
from flaskext.mysql import MySQL



app = Flask(__name__)
app.config['SQLALCHEMY_DATABASE_URI'] = 'mysql://root:@localhost/mvc'
app.config['SECRET_KEY'] = "random string"

db = SQLAlchemy(app)

mysql = MySQL(autocommit=True)
app.config['MYSQL_DATABASE_USER'] = 'root'
app.config['MYSQL_DATABASE_PASSWORD'] = ''
app.config['MYSQL_DATABASE_DB'] = 'db'
app.config['MYSQL_DATABASE_HOST'] = 'localhost'
app.config['MYSQL_DATABASE_PORT'] = 3306
app.config['MYSQL_CURSORCLASS'] = 'DictCursor'
mysql.init_app(app)

from datas import route
