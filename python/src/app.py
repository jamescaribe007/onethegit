from flask import Flask, render_template, request, redirect, url_for, flash

app = Flask(__name__)

# Settings session
app.secret_key = "mysecretkey"

@app.route('/')
def ping():
    return render_template('index.html')

@app.route('/login')
def login():
    return render_template('login.html')

@app.route('/logged', methods = ['POST'])
def logged():
    if request.method == 'POST':
        username = request.form['username']
        password = request.form['password']
        if username == 'asteroide77' and password == 'secret':
            flash('Logged sucessfully')
            return render_template('logged.html')
        else:
            flash("You've tried to sign with an incorrect account or password")
            return redirect(url_for('login'))

if __name__ == "__main__":
    app.run(debug=True, port=4000)