from datas.newsletters import *
from datas import app
from flask import request, redirect, flash, url_for, render_template
from datas import newsletters

@app.route('/new', methods=['GET', 'POST'])
def index():
    if request.method == 'POST':
        if not request.form['email']:
            flash('Please enter all the fields', 'error')
        else:
            newsletter = newsletters.Newsletter(request.form['email'])

            db.session.add(newsletter)
            db.session.commit()
            flash('Record was successfully added')
            return redirect(url_for('show_all'))
    return render_template('index.html')

@app.route('/')
def show_all():
   for newsletter in newsletters.Newsletter.query.all():
       print(newsletter)
   return render_template('show_all.html', newsletters = newsletters.Newsletter.query.all() )

