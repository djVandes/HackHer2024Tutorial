from flask import Flask, session, render_template, Response, request, request, url_for, flash, redirect, jsonify
# import random
# import os
#import openai

app = Flask(__name__)
app.config['TEMPLATES_AUTO_RELOAD'] = True

@app.route('/') # render home page
def index():
   return render_template('index.html')

@app.route('/volunteer') # render volunteer page
def volunteer():
    return render_template('volunteer.html')

@app.route('/resources') #render resources page
def resources():
   return render_template('resources.html')

@app.route('/chat') # render chat page
def chat():
    return render_template('chat.html')

if __name__ == "__main__":
  app.run(debug=True)

