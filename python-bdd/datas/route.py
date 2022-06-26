from datas.users import *
from datas import users, app, admin
import flask_bcrypt
from flask import request, flash, url_for, redirect, render_template,  session, escape
from flask_mail import Mail, Message
from flask_bcrypt import check_password_hash


mail = Mail(app)


# Fonction affichage des utilisateurs inscrit

@app.route('/show_all', methods=['GET', 'POST'])
def show_all():
    if session['role'] == 'ROLE_ADMIN':
        for user in users.Newsletters.query.all():
            print(user)
        return render_template('show_all.html', users=users.Newsletters.query.all())
    else:
        return redirect(url_for('login'))

# Fonction pour se déconnecter


# non utilisé
@app.route('/logout')
def logout():
    # enleve le nom de l'utilsateur de la session s'il est actif
    session.pop('email', None)
    return redirect(url_for('login'))


# Fonction pour le contenu de la news letter
# et l'envoyer

@app.route('/send', methods=['GET', 'POST'])
def send():
    if request.method == 'POST':
        # sujet du message avec le destinataire
        msg = Message('Hey', sender='no-reply@yuniq.com',
                      recipients=[f"{request.form['email']}"])
        msg.body = render_template('index.html')

        mail.send(msg)
        return "sent email."
    return render_template("index.html")


# Fonction enregistrer un utilisateur
# et ensuite le renvoie sur la page show-all

@app.route('/new', methods=['GET', 'POST'])
def new():
    if session['role'] == 'ROLE_ADMIN':
        if request.method == 'POST':
            if not request.form['email']:
                flash('Please enter all the fields', 'error')
            else:
                user = users.Newsletters(request.form['email'])
                db.session.add(user)
                db.session.commit()
                flash('Record was successfully added')
                return redirect(url_for('show_all'))
        return render_template('index.html')
    else:
        return redirect(url_for('login'))


# Fonction pour se connecter avec  la création du formulaire

@app.route('/', methods=['GET', 'POST'])
def login():
    session['role'] = 'ROLE_USER'
    if request.method == 'POST':
        email = request.form['email']
        pwd = request.form['password'].encode('utf-8')
        new_pwd = flask_bcrypt.generate_password_hash(pwd)
        print(pwd)
        print(new_pwd)
        print(new_pwd.decode('utf-8'))
        user = admin.Users.query.filter_by(email=email).first()
        if user and check_password_hash(user.password, pwd) and user.role == 'ROLE_ADMIN':
            print("Ca marche", user)
            session['role'] = user.role
            return redirect(url_for('show_all'))
        else:
            print("echec")
            return render_template('login.html', msg="Accès interdit")

    else:
        return render_template('login.html')





