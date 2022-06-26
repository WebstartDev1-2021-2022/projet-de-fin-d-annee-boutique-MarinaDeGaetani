import flask_bcrypt
from flask import request, flash, url_for, redirect, render_template, session, escape
from flask_mail import Mail, Message
from datas.users import *
from datas import users, app, admin
from flask_bcrypt import check_password_hash

mail = Mail(app)


@app.route('/show_all', methods=['GET', 'POST'])
def show_all():
    if session['role'] == 'ROLE_ADMIN':
        for user in users.Newsletters.query.all():
            print(user)
        return render_template('show_all.html', users=users.Newsletters.query.all())
    else:
        return redirect(url_for('login'))


@app.route('/logout')
def logout():
    # remove the username from the session if it is there
    session.pop('email', None)
    return redirect(url_for('login'))


@app.route('/email', methods=['GET', 'POST'])
def email():
    if session['role'] == 'ROLE_ADMIN':
        msg = ''
        if request.method == 'POST':
            msg_body = request.form['body']
            msg_subject = request.form['subject']
            print(msg_body)
            print(msg_subject)
            sendMail(msg_subject, msg_body)
            msg = 'Message bien envoyez'

        return render_template('email.html', msg=msg)

    else:
        return redirect(url_for('login'))


@app.route('/sendMail', methods=['GET', 'POST'])
def sendMail(msg_subject, msg_body):
    if session['role'] == 'ROLE_ADMIN':
        destinataire = []
        for user in users.Newsletters.query.all():
            destinataire.append(f"{user}")
        msg = Message(msg_subject, sender='unicare@alwaysdata.net', recipients=destinataire)
        msg.html = msg_body

        mail.send(msg)
        return "sent email."

    else:
        return redirect(url_for('login'))


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
