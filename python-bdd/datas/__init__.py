from flask import Flask
from flask_sqlalchemy import SQLAlchemy
from flask_bcrypt import Bcrypt



app = Flask(__name__)
app.config['SQLALCHEMY_DATABASE_URI'] = 'mysql://root:@localhost/mvc'
app.config['SECRET_KEY'] = "random string"


# Connexion a alwaysdata
# ne fonctionne pas
app.config['MAIL_SERVER'] = 'unicare.alwaysdata.net'
app.config['MAIL_PORT'] = 587
app.config['MAIL_USERNAME'] = 'unicare@alwaysdata.net'
app.config['MAIL_PASSWORD'] = 'Jesuis1poulet!'
app.config['MAIL_USE_SSL'] = False
app.config['MAIL_USE_TLS'] = True

# crypter mdp
app.config['BCRYPT_LOG_ROUNDS'] = 6
app.config['BCRYPT_HASH_IDENT'] = '2b'
app.config['BCRYPT_HANDLE_LONG_PASSWORDS'] = False

db = SQLAlchemy(app)
bcrypt = Bcrypt(app)



from datas import route