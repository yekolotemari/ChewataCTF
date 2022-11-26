from flask import Flask, request
from flask import render_template, render_template_string

app = Flask(__name__)
app.config['SECRET_KEY'] = "somri"
filter = ["config", "class", "write", "bin", "socket", "__subclasses__"]
def error(e):
  return render_template('index.html', sus="sus"), 500
app.register_error_handler(500, error)

@app.route('/')
def index():

 
  arg = request.args.get('cmd')
  '''<h1> {{ arg }}</h1>'''

  s = render_template_string(arg) if arg else ""

  if not arg:
      return render_template('index.html')
  else:
      #if str(arg)[0] not in "{}$@!<>[]":
      for v in filter:
          if v in str(arg) or str(arg)[0] in "{<>}[]()@":
              return render_template('index.html', sus="sus")
              break

          return render_template("index.html", name=s)



app.run(host='0.0.0.0', port=8000)
